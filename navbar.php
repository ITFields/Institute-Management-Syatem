<?php
include('auth.php'); // 🔹 Global Session & Authentication
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Learn with Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}

/* 🔹 NAVBAR KA CSS BILKUL WAISE HI CHHODA */
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
.main-navbar {
    height: 50px;
    background: white;
    padding: 6px 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    font-size: 15px;
}
.main-navbar img {
    height: 50px;
    margin-right: 8px;
}
.nav-links {
    display: flex;
    align-items: center;
    gap: 10px;
}
.main-navbar a {
    text-decoration: none;
    color: black;
    font-weight: 500;
    transition: all 0.3s ease-in-out;
}
.main-navbar a:hover {
    color: #ff9800;
}
.auth {
    display: flex;
    align-items: center;
    gap: 8px;
}
.auth a{
    font-size: 15px;
}
.login {
    color: #ff9800;
    font-weight: 600;
    font-size: 9px;
}
.register {
    background: #ff9800;
    color: white;
    padding: 3px 6px;
    border-radius: 4px;
    font-size: 9px;
}
.logout {
    background: red;
    color: white;
    padding: 3px 6px;
    border-radius: 4px;
    font-size: 9px;
    text-decoration: none;
}

/* 🔹 NAYA CONTENT KA STYLING */
.hero {
    background: linear-gradient(to right, #ff9800, #ff5722);
    color: white;
    padding: 60px 0;
    text-align: center;
}
.hero h1 {
    font-size: 32px;
    font-weight: 600;
}
.hero p {
    font-size: 16px;
    margin-top: 10px;
}
.btn {
    background: white;
    color: #ff5722;
    padding: 10px 20px;
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
}
.btn:hover {
    background: #ffd54f;
}
.section {
    padding: 40px 0;
    text-align: center;
}
.section h2 {
    font-size: 28px;
    color: #ff5722;
}
.courses-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    max-width: 1000px;
    margin: auto;
    padding: 20px;
}

.course-box {
    text-align: center;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    background: #fff;
}

.course-box img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 5px;
}

.course-box h3 {
    margin-top: 10px;
    font-size: 20px;
    color: #333;
}

.course-box p {
    font-size: 14px;
    color: #666;
}
.footer {
    background: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    margin-top: 30px;
}

/* 🔹 Dropdown Menu for Fees */
/* 🔹 Dropdown Menu for Fees */

.dropdown {
position: relative;
display: inline-block;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
display: block;
}

.dropdown:hover .dropbtn {
background-color: #3e8e41;
}

    </style>
</head>
<!-- 🔹 Top Navbar (Bilkul untouched) -->
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

<!-- 🔹 Main Navbar -->
<div class="main-navbar">
    <img src="logo.png" alt="Logo">
    <div class="nav-links">
        <a href="dashboard.php">Home</a>
        <a href="course.php">Enrolled Course</a>
        
        <!-- 🔹 Fees Dropdown Menu -->
        <div class="dropdown">
            <a href="javascript:void(0)">Fees</a>
            <div class="dropdown-content">
                <a href="fees.php">Fees Deposit</a>
                <a href="transaction_history.php">Transaction History</a>
            </div>
        </div>
        <a href="contact.php">Contact Support</a>
    </div>
    
    <div class="auth">
        <?php if (isset($_SESSION['user'])): ?>
            <span>Hello, <?php echo $_SESSION['user']; ?>!</span>
            <a href="logout.php" class="logout">Logout</a>
        <?php else: ?>
            <a href="login.php" class="login">Login</a>
            <a href="register.php" class="register">Create Account</a>
        <?php endif; ?>
    </div>
</div>
</html>