<!-- 🔹 Top Navbar -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Payments</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
</head>
<body>
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
    <img src="logo.png" alt="Logo" style="height: 40px;">
    <div class="nav-links">
        <a href="admin.php">Home</a>
        <a href="users.php">Users</a>
        <a href="course2.php">Courses</a>
        <a href="payments.php" style="color: #e53935; font-weight: bold;">Payments</a>
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
</body>
</html>