<?php
include('auth.php'); // Session and DB connection

// Check if 'id' is provided in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: course2.php");
    exit();
}

$course_id = $_GET['id'];

// Fetch course data from the database
$sql = "SELECT * FROM courses WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $course_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$course = mysqli_fetch_assoc($result);

if (!$course) {
    echo "Course not found.";
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $course_name = $_POST['course_name'];
    $level = [];

    // Collect the levels from the form
    for ($i = 1; $i <= 10; $i++) {
        $level[$i] = $_POST['level' . $i];
    }

    // Update course data
    $update_query = "UPDATE courses SET course_name = ?, ";
    for ($i = 1; $i <= 10; $i++) {
        $update_query .= "level$i = ?, ";
    }
    $update_query = rtrim($update_query, ', '); // Remove the last comma
    $update_query .= " WHERE id = ?";

    $stmt = mysqli_prepare($conn, $update_query);
    if (!$stmt) {
        die("SQL Error in prepare statement: " . mysqli_error($conn));
    }

    $params = array_merge([$course_name], $level, [$course_id]);
    mysqli_stmt_bind_param($stmt, str_repeat('s', 11) . 'i', ...$params); // Dynamic binding

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('✅ Course updated successfully!');
              window.location.href = 'course2.php?updated=1';
              </script>";

        exit();
    } else {
        echo "Error updating course: " . mysqli_stmt_error($stmt);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        .top-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e06e6e;
            padding: 10px 20px;
            flex-wrap: wrap; /* Optional: handle small screens */
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
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .container h2 {
            text-align: center;
            color: #e53935;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            background: #e53935;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #c62828;
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
        <a href="https://www.facebook.com/" > <img src="images/fb.png"></a>
        <a href="www.instagram.com" ><img src="images/i.png" ></a>
        <a href="https://x.com/" > <img src="images/x.png"></a>

    </div>
</div>

<!-- 🔹 Main Navbar -->
<div class="main-navbar">
    <img src="logo.png" alt="Logo">
    <div class="nav-links">
        <a href="admin.php">Home</a>
        <a href="users.php">Users</a>
        <a href="course2.php">Courses</a>
        <a href="payments.php">Payment</a>
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

<div class="container">
    <h2>Edit Course</h2>
    <form method="POST">
        <label for="course_name">Course Name</label>
        <input type="text" name="course_name" id="course_name" value="<?php echo htmlspecialchars($course['course_name']); ?>" required>

        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label for="level<?php echo $i; ?>">Level <?php echo $i; ?></label>
            <input type="text" name="level<?php echo $i; ?>" id="level<?php echo $i; ?>" value="<?php echo htmlspecialchars($course['level'.$i]); ?>"><br>
        <?php endfor; ?>

        <button type="submit">Update Course</button>
    </form>
</div>

</body>
</html>
