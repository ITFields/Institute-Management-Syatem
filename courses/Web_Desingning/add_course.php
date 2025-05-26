<?php
include('auth.php'); // Include session and DB connection

// Insert user on POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $course_name = $_POST['course_name'];
    $start_date  = $_POST['start_date'];
    $end_date    = $_POST['end_date'];
    $fee         = $_POST['fee'];

    $insert_query = "INSERT INTO users (name, email, password, course_name, start_date, end_date, fee) 
                     VALUES ('$name', '$email', '$password', '$course_name', '$start_date', '$end_date', '$fee')";

    if (mysqli_query($conn, $insert_query)) {
        header("Location: users.php"); // redirect to user listing
        exit();
    } else {
        echo "Insert Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New User - Learn with Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">
    <style>
        /* 👇 Same CSS as edit_user.php */
    

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .container h2 {
            text-align: center;
            color: #e53935;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 15px;
        }

        input:focus {
            border-color: #e53935;
            outline: none;
        }

        button[type="submit"] {
            background-color: #e53935;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #c62828;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<!-- 🔹 Top Navbar -->
<div class="top-navbar">
    <div>
        <a href="#">Contact Us</a>
        <a href="#">Feedback</a>
    </div>
    <div>
        <a href="#">Skip to main content</a> |
        <a href="#">-A</a>
        <a href="#">A</a>
        <a href="#">A+</a>
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

<!-- 🔹 Insert Form -->
<div class="container">
    <h2>Add New User</h2>
    <form method="POST" action="">
        <label for="name">Name</label>
        <input type="text" name="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="password">Password</label>
        <input type="text" name="password" required>

        <label for="course_name">Course Name</label>
        <input type="text" name="course_name" required>

        <label for="start_date">Start Date</label>
        <input type="date" name="start_date" required>

        <label for="end_date">End Date</label>
        <input type="date" name="end_date" required>

        <label for="fee">Fee</label>
        <input type="text" name="fee" required>

        <button type="submit">Add User</button>
    </form>
</div>

</body>
</html>
