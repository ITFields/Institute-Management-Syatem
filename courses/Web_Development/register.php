<?php
session_start();
require 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($conn, $_POST['end_date']);
    $fee = mysqli_real_escape_string($conn, $_POST['fee']);

    // Hash the password before storing it
    

    // Insert into the database
    $query = "INSERT INTO users (name, email, password, course_name, start_date, end_date, fee) 
              VALUES ('$name', '$username', '$password', '$course', '$start_date', '$end_date', '$fee')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registration successful!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn); // Show actual MySQL error
    }
    
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background: #ff9800;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #e68900;
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
    <a href="https://www.facebook.com/" > <img src="images/fb.png" ></a>
        <a href="www.instagram.com" ><img src="images/i.png" ></a>
        <a href="https://x.com/" > <img src="images/x.png" ></a>


    </div>
</div>

<!-- Main Navbar -->
<div class="main-navbar">
    <img src="logo.png" alt="Logo">
    <div class="nav-links">
        <a href="index.html">Home</a>
        <a href="course_training.html">Courses & Training</a>
        <a href="development_consulting.html">Development & Consulting</a>
        <a href="software.html">Software Solutions</a>
        <a href="contact_support.html">Contact Support</a>
    </div>
    <div class="auth">
        <a href="login.php" class="login">Login</a>
        <a href="register.php" class="register">Create Account</a>
    </div>
</div>
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="">
            <label for="name">Full Name:</label>
            <input type="text" name="name" required>

            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="course">Course:</label>
            <select name="course" required>
                <option value="Basics">Basics</option>
                <option value="Web Development">Web Development</option>
                <option value="Web Desingning">Web Designing</option>
                <option value="Programming languages">Programming Languages</option>
                <option value="AI & ML">AI & ML</option>
                <option value="Networking">Networking</option>
            </select>

            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" required>

            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" required>

            <label for="fee">Total Fees (₹):</label>
            <input type="number" name="fee" step="0.01" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>