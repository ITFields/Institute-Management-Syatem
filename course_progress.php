<?php
include('auth.php'); // 🔹 Global Session & Authentication
include('config.php'); // Database connection

// Fetching course progress data (enrollments for each course)
$query_progress = "
    SELECT courses.course_name, COUNT(enrollments.user_id) AS enrollments
    FROM courses
    LEFT JOIN enrollments ON courses.course_id = enrollments.course_id
    GROUP BY courses.course_name
";

// Run the query
$result_progress = mysqli_query($conn, $query_progress);

// Check for query execution error
if (!$result_progress) {
    // If the query fails, display an error message
    die("Query failed: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Progress - Learn with Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
        }

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
            margin-bottom: 20px;
        }

        .course-list {
            margin-top: 30px;
        }

        .course-item {
            background-color: #f7fafc;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .course-item h3 {
            color: #34495e;
        }

        .course-item p {
            font-size: 16px;
        }

        .course-item .enrollment-count {
            color: #2ecc71;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Top Navbar -->
<div class="top-navbar">
    <div>
        <a href="contactus.php">Contact Us</a>
        <a href="feedback.php">Feedback</a>
    </div>
    <div> 
        <a href="https://www.facebook.com/" ><img src="images/fb.png" height="40px" width="15%"></a>
        <a href="www.instagram.com" ><img src="images/i.png" height="5%" width="5%"></a>
        <a href="https://x.com/" ><img src="images/x.png" height="5%" width="5%"></a>
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
            <?php if ($_SESSION['user'] == $_SESSION['admin_name']): ?>
                <span>Hello, Admin!</span>
            <?php else: ?>
                <span>Hello, <?php echo $_SESSION['user']; ?>!</span>
            <?php endif; ?>
            <a href="logout.php" class="logout">Logout</a>
        <?php else: ?>
            <a href="login.php" class="login">Login</a>
            <a href="register.php" class="register">Create Account</a>
        <?php endif; ?>
    </div>
</div>

<!-- 🔹 Course Progress -->
<div class="dashboard">
    <h1>Course Progress & Engagement</h1>

    <div class="course-list">
        <?php if (mysqli_num_rows($result_progress) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result_progress)): ?>
                <div class="course-item">
                    <h3><?php echo $row['course_name']; ?></h3>
                    <p>Total Enrollments: <span class="enrollment-count"><?php echo $row['enrollments']; ?> students</span></p>
                    <p>Progress and engagement data for this course can be expanded further here...</p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No course progress data available.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
