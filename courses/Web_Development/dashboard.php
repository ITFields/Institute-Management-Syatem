<?php
include('auth.php'); // 🔹 Global Session & Authentication
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Learn with Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
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

.main-navbar {
    height: 60px;
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
    .instructions-section {
    max-width: 1000px;
    margin: 50px auto;
    padding: 30px;
    border-left: 6px solid #e53935;
    background-color: #fff3f3;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    font-family: 'Poppins', sans-serif;
    border-radius: 8px;
}

.instructions-section h2 {
    color: #b71c1c;
    font-size: 28px;
    margin-bottom: 15px;
}

.instructions-section h3 {
    color: #d84315;
    font-size: 22px;
    margin-top: 30px;
    margin-bottom: 10px;
}

.instructions-section ul {
    list-style: disc;
    padding-left: 25px;
    margin-bottom: 20px;
}

.instructions-section ul li {
    margin-bottom: 10px;
    line-height: 1.8;
    font-size: 16px;
}

.instructions-section a {
    color: #1565c0;
    text-decoration: underline;
}

.instructions-section .note {
    margin-top: 30px;
    padding: 15px;
    background-color: #ffe0e0;
    border-left: 4px solid #ff1744;
    font-weight: 500;
    color: #c62828;
    font-size: 15px;
}

    </style>
</head>
<body>

<!-- 🔹 Top Navbar (Bilkul untouched) -->
<div class="top-navbar">
    <div>
        <a href="#">Contact Us</a>
        <a href="#">Feedback</a>
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
        <a href="#">Contact Support</a>
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

<!-- 🔹 Hero Section -->
<div class="hero">
    <h1>Welcome to Our Learning Platform</h1>
    <p>Enhance your skills with expert-led courses in IT, Business, and more.</p>
</div>

<!-- 🔹 Detailed Instruction Section -->
<div class="instructions-section">
    <h2>⚠️ Important Student Instructions</h2>
    <p>Dear Student, please go through the following instructions carefully to avoid any inconvenience in accessing your courses:</p>
    
    <h3>📌 1. Fee Submission Guidelines</h3>
    <ul>
        <li>Fees must be submitted <strong>before the due date</strong> to maintain uninterrupted access to your enrolled courses.</li>
        <li>Use the <a href="submit_fees.php">Fees Deposit</a> section for online submission of your tuition or course fees.</li>
        <li>Once payment is made, you can view your receipt in the <a href="transaction_history.php">Transaction History</a> section.</li>
    </ul>

    <h3>⛔ 2. Course Access & Fee Defaulters</h3>
    <ul>
        <li>If you fail to submit fees on time, your <strong>course will be auto-blocked</strong> and you won't be able to access your learning materials.</li>
        <li>Reactivation of the course will only be possible after successful fee submission.</li>
        <li><strong>No exceptions</strong> will be made unless officially approved by the admin in written format.</li>
    </ul>

    <h3>🧾 3. Fee Status & Payment Proof</h3>
    <ul>
        <li>After paying, always take a screenshot or download the payment confirmation for future reference.</li>
        <li>If your payment is deducted but not reflecting, email us at <a href="mailto:support@learnwithus.com">support@learnwithus.com</a> with the transaction ID.</li>
    </ul>

    <h3>🔐 4. Account & Login Responsibility</h3>
    <ul>
        <li>Do not share your login credentials with anyone. You are fully responsible for any activity on your account.</li>
        <li>In case of suspicious activity, change your password immediately or contact support.</li>
    </ul>

    <h3>📞 5. Support & Contact Info</h3>
    <ul>
        <li>Facing technical issues or access problems? Visit the <strong>Contact Support</strong> section from the menu.</li>
        <li>Support hours: Monday to Saturday, 10:00 AM – 6:00 PM</li>
        <li>Email: <a href="mailto:support@learnwithus.com">support@learnwithus.com</a></li>
        <li>Phone: +91-9876543210</li>
    </ul>

    <div class="note">
        <strong>Note:</strong> Kindly ensure all your details are correct and up-to-date in your profile to receive important notifications via email/SMS.
    </div>
</div>


</body>
</html>
