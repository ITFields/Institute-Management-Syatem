<?php
include('auth.php');
include('db.php');
// Total Users
$userQuery = mysqli_query($conn, "SELECT COUNT(*) as total_users FROM users");
$userData = mysqli_fetch_assoc($userQuery);
$totalUsers = $userData['total_users'];

// Total Courses
$courseQuery = mysqli_query($conn, "SELECT COUNT(*) as total_courses FROM courses");
$courseData = mysqli_fetch_assoc($courseQuery);
$totalCourses = $courseData['total_courses'];

// Total Payments
$paymentQuery = mysqli_query($conn, "SELECT SUM(amount) as total_payment FROM payments");
$paymentData = mysqli_fetch_assoc($paymentQuery);
$totalPayments = $paymentData['total_payment'] ?? 0; // null check

// Course Engagement Query (Safe and clean)
$query_enrollments = "
    SELECT courses.course_name, COUNT(enrollments.enrollment_id) AS enrollments
    FROM courses
    LEFT JOIN enrollments ON courses.course_id = enrollments.course_id
    GROUP BY courses.course_name
";
$result_enrollments = mysqli_query($conn, $query_enrollments);

// Check for query error
$enrollmentError = '';
if (!$result_enrollments) {
    $enrollmentError = mysqli_error($conn);
}
// Failed Payments
$failedPaymentsQuery = mysqli_query($conn, "SELECT user_name FROM payments WHERE payment_status ='failed' LIMIT 5");

// Recent Payments
$recentPaymentsQuery = mysqli_query($conn, "SELECT name, amount FROM payments WHERE payment_status = 'success' ORDER BY payment_date DESC LIMIT 5");

// Top Learner
$topLearnerQuery = mysqli_query($conn, "
    SELECT name, COUNT(course_name) as total_courses
    FROM users
    GROUP BY name
    ORDER BY total_courses DESC
    LIMIT 1
");

// Feedback
$feedbackQuery = mysqli_query($conn, "SELECT comments FROM feedback ORDER BY id DESC LIMIT 5");
$totalUsers      = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS cnt FROM users"))['cnt'];
$totalCourses    = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS cnt FROM courses"))['cnt'];
$totalPayments   = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COALESCE(SUM(amount),0) AS sum FROM payments WHERE payment_status='success'"))['sum'];
$dues = mysqli_query($conn, "
    SELECT 
      u.id,
      u.name,
      u.course_name,
      u.fee,
      COALESCE(SUM(p.amount),0) AS paid
    FROM users u
    LEFT JOIN payments p
      ON u.id = p.user_id
     AND p.payment_status = 'success'
   WHERE u.end_date < CURDATE()
   GROUP BY u.id, u.name, u.course_name, u.fee
  HAVING paid < u.fee
   LIMIT 5
");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Learn with Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <style>
        .dashboard {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2c3e50;
            font-size: 32px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        .card {
            background: linear-gradient(135deg, #4db6ac, #00695c);
            color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        }
        .card h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .card p {
            font-size: 16px;
        }
        .card ul {
            padding-left: 20px;
        }
        .quick-links {
            margin-top: 40px;
        }
        .quick-links h2 {
            font-size: 24px;
            color: #34495e;
        }
        .quick-links ul {
            padding-left: 20px;
        }
        .quick-links a {
            color: #0077cc;
            text-decoration: none;
        }
        .top-navbar {
            display: flex;
            justify-content: space-between;
            background-color: #e06e6e;
            padding: 10px 20px;
        }
        .top-navbar a {
            color: white;
            margin-right: 15px;
            font-weight: 600;
            text-decoration: none;
        }
        .top-navbar img {
            height: 40px;
        }
    </style>
</head>
<body>

<!-- 🔹 Top Navbar -->
<div class="top-navbar">
    <div>
        <a href="contactus.php">Contact Us</a>
        <a href="feedback.php">Feedback</a>
    </div>
    <div>
        <a href="https://www.facebook.com/"><img src="images/fb.png"></a>
        <a href="https://www.instagram.com/"><img src="images/i.png"></a>
        <a href="https://x.com/"><img src="images/x.png"></a>
    </div>
</div>
<!-- 🔹 Main Navbar -->
<div class="main-navbar">
    <img src="logo.png" alt="Logo">
    <div class="nav-links">
        <a href="admin.php">Home</a>
        <a href="users.php">Users</a>
        <a href="course2.php">Courses</a>
        <a href="payments.php">Payments</a>
    </div>
    <div class="auth">
        <?php if (isset($_SESSION['user'])): ?>
            <span>Hello, <?php echo $_SESSION['user']; ?>!</span>
            <a href="logout.php" class="logout">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>
    </div>
</div>

<!-- 🔹 Main Dashboard -->
<div class="dashboard" id="main-content">
    <h1>Welcome to the Admin Dashboard 👋</h1>

    <div class="cards">
        <div class="card">
            <h3>Total Users</h3>
            <p><?php echo $totalUsers; ?> users have registered.</p>
        </div>

        <div class="card">
            <h3>Total Courses</h3>
            <p><?php echo $totalCourses; ?> courses available.</p>
        </div>

        <div class="card">
            <h3>Total Payments</h3>
            <p>₹<?php echo number_format($totalPayments); ?> collected in total.</p>
        </div>

        <div class="card">
    <h3>Course Engagement</h3>
    <?php
    // Get all unique courses and how many users are in each
    $query = "SELECT course_name, COUNT(*) AS student_count 
              FROM users 
              WHERE course_name IS NOT NULL AND course_name != '' 
              GROUP BY course_name";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "<p style='color: yellow;'>⚠️ Query Failed: " . mysqli_error($conn) . "</p>";
    } elseif (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li><strong>" . htmlspecialchars($row['course_name']) . "</strong>: " . $row['student_count'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No course data found in user table.</p>";
    }
    ?>
</div>
<!-- 👎 Failed Payments -->
<div class="card">
    <h3>Failed Payments</h3>
    <ul>
    <?php
    if ($failedPaymentsQuery && mysqli_num_rows($failedPaymentsQuery) > 0):
        while ($row = mysqli_fetch_assoc($failedPaymentsQuery)): ?>
            <li><?php echo htmlspecialchars($row['user_name']); ?></li>
        <?php endwhile;
    else:
        echo "<li>No failed payments found.</li>";
    endif;
    ?>
</ul>

</div>


<!-- 💬 Feedback Overview -->
<div class="card">
    <h3>Feedback</h3>
    <ul>
        <?php
        if ($feedbackQuery && mysqli_num_rows($feedbackQuery) > 0):
            while ($row = mysqli_fetch_assoc($feedbackQuery)): ?>
                <li><?php echo substr(htmlspecialchars($row['comments']), 0, 50); ?>...</li>
            <?php endwhile;
        else:
            echo "<li>No feedback available.</li>";
            // Optional debug:
            // echo "<li style='color: yellow;'>Query Error: " . mysqli_error($conn) . "</li>";
        endif;
        ?>
    </ul>
    <a href="feedback_list.php" class="button" style="color:white; font-weight:bold;">View All</a>
</div>

<div class="card">
    <h3>Contact Messages</h3>
    <ul>
        <?php
        $contactQuery = mysqli_query($conn, "SELECT message FROM contact_us ORDER BY id DESC LIMIT 5");

        if ($contactQuery && mysqli_num_rows($contactQuery) > 0):
            while ($row = mysqli_fetch_assoc($contactQuery)): ?>
                <li><?php echo substr(htmlspecialchars($row['message']), 0, 50); ?>...</li>
            <?php endwhile;
        else:
            echo "<li>No messages available.</li>";
            // echo "<li style='color: yellow;'>Query Error: " . mysqli_error($conn) . "</li>";
        endif;
        ?>
    </ul>
    <a href="contact_list.php" class="button" style="color:white; font-weight:bold;">View All</a>
</div>
<div class="card">
    <!-- Pending Dues -->
    <div class="card dues">
        <h3>Pending Dues</h3>
        <ul>
          <?php if(mysqli_num_rows($dues)): while($r=mysqli_fetch_assoc($dues)): ?>
            <?php $due = $r['fee'] - $r['paid']; ?>
            <li><?=htmlspecialchars($r['name'])?> owes ₹<?=number_format($due)?> for “<?=htmlspecialchars($r['course_name'])?>”</li>
          <?php endwhile; else: ?>
            <li>Everyone’s up to date!</li>
          <?php endif; ?>
        </ul>
        <a href="dues_list.php" style="color:#fff; font-weight:bold; text-decoration:underline;">View All</a>
      </div>



    </div>

    <div class="quick-links">
        <h2>Quick Links</h2>
        <ul>
            <li><a href="add_course.php">➕ Add New Course</a></li>
            <li><a href="users.php">👥 View All Users</a></li>
            <li><a href="payments.php">💰 Manage Payments</a></li>
        </ul>
    </div>
</div>
</body>
</html>
