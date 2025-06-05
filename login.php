<?php
include('db.php');
session_start();

$error = "";  // initialize error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Step 1: Check in admin table
    $admin_query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$admin_result = mysqli_query($conn, query: $admin_query);

if (!$admin_result) {
    die("Admin Query Failed: " . mysqli_error($conn)); // 👈 Shows exact SQL error
}

$admin = mysqli_fetch_assoc($admin_result);

if ($admin) {
    // Store admin info in session
    $_SESSION['admin_id'] = $admin['id'];
    $_SESSION['admin_username'] = $admin['username'];  // 👈 Store the username in session
    $_SESSION['last_activity'] = time();
    header("Location: admin.php");
    exit();
}


    // Step 2: Check in users table
    $user_query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
    $user_result = mysqli_query($conn, $user_query);

    if (!$user_result) {
        die("User Query Failed: " . mysqli_error($conn)); // 👈 Shows exact SQL error
    }

    $user = mysqli_fetch_assoc($user_result);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['last_activity'] = time();
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}

// ⏳ Check if session timeout happened
if (isset($_GET['timeout']) && $_GET['timeout'] == 1) {
    $error = "Login Again: Your session has expired.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        
        .container { max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        .container h2 { text-align: center; margin-bottom: 20px; }
        input { width: 100%; padding: 10px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px; }
        button { width: 100%; background: #ff9800; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        button:hover { background: #e68900; }
        .error { color: red; text-align: center; margin-bottom: 10px; font-weight: 600; }

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
        <a href="www.instagram.com" ><img src="images/i.png"></a>
        <a href="https://x.com/" > <img src="images/x.png"></a>

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
    <h2>Login</h2>

    <!-- 🔴 Show session timeout message -->
    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>  
