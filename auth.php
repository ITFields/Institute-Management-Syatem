<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('db.php'); // Database connection

$session_timeout = 900; // Session timeout set to 15 minutes

// 🟢 If user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // 🟢 Fetch user data if not already in session
    if (!isset($_SESSION['name']) || !isset($_SESSION['course_name'])) {
        $query = "SELECT * FROM users WHERE id='$user_id'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['user'] = $user['email']; // User's email will be displayed in navbar
            $_SESSION['course_name'] = $user['course_name'];
            $_SESSION['start_date'] = $user['start_date'];
            $_SESSION['end_date'] = $user['end_date'];
            $_SESSION['fee'] = $user['fee'];
        }
    }
}

// 🟢 If admin is logged in
if (isset($_SESSION['admin_username'])) {
    $admin_username = $_SESSION['admin_username'];

    // Fetch admin data
    if (!isset($_SESSION['admin_name'])) {
        $query = "SELECT * FROM admin WHERE username='$admin_username'";
        $result = mysqli_query($conn, $query);
        $admin = mysqli_fetch_assoc($result);

        if ($admin) {
            $_SESSION['admin_name'] = $admin['username']; // Admin's username
            $_SESSION['user'] = $admin['username']; // Same key used for display (for the navbar)
        }
    }
}

// 🔥 Session Timeout (for both)
if (!isset($_SESSION['last_activity'])) {
    $_SESSION['last_activity'] = time();
}

if (time() - $_SESSION['last_activity'] > $session_timeout) {
    session_unset();
    session_destroy();
    header("Location: login.php?timeout=1");
    exit();
}

$_SESSION['last_activity'] = time();
