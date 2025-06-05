<?php
session_start();
require 'db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "INSERT INTO contact_us (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Your message has been sent!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
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
        input, select, textarea {
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
        }
        .container h2 { text-align: center; margin-bottom: 20px; }
    </style>
   </head>
   <script>
    function changeSizeByBtn(change) {
    let container = document.getElementById("container");
    let currentSize = window.getComputedStyle(container).fontSize;
    let newSize = parseInt(currentSize) + parseInt(change) + "px";
    
    container.style.fontSize = newSize;
}

</script>

<body>
    <!-- Top Navbar -->
<div class="top-navbar">
    <div>
        <a href="contactus.php">Contact Us</a>
        <a href="feedback.php">Feedback</a>
    </div>
    <div>
        <a href="#main-content">Skip to main content</a> |  <!-- ✅ Now working -->
        <a type="a" name="btn1"
            onclick="changeSizeByBtn('-10px')">-A</a>
        <a type="a" name="btn2"
            onclick="changeSizeByBtn('10px')">A</a>
        <a type="a" name="btn3"
            onclick="changeSizeByBtn('20px')">A+</a>

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
        <h2>Contact Us</h2>
        <form method="POST">
            <label for="name">Full Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="message">Message:</label>
            <textarea name="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</body>
</html>
