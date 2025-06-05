<?php
include('auth.php'); // 🔹 Global Session & Authentication
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Software Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: #f8f9fa;
            color: #333;
        }
        /* 🔹 NAVBAR KA CSS (Untouched) */
        .top-navbar {
            background: #E57373;
            padding: 5px 12px;
            display: flex;
            justify-content: space-between;
            color: white;
            font-size: 10px;
        }
        .top-navbar a {
            color: white;
            text-decoration: none;
            margin-right: 8px;
        }
        .main-navbar {
            background: white;
            padding: 6px 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            font-size: 10px;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .main-navbar img {
            height: 25px;
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
        .logout {
            background: red;
            color: white;
            padding: 3px 6px;
            border-radius: 4px;
            font-size: 9px;
            text-decoration: none;
        }

        /* 🔹 SOFTWARE SOLUTIONS CONTENT */
        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px; /* 🔥 Navbar ke neeche gap added */
        }
        .section {
            margin: 20px 0;
            padding: 10px;
            border-left: 4px solid #ff9800;
            background: #fff3e0;
            border-radius: 5px;
        }
        .section h2 {
            font-size: 22px;
            color: #e65100;
        }
        .section p {
            font-size: 14px;
            color: #555;
        }
        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .service-box {
            width: 300px;
            background: white;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: 0.3s;
            text-align: center;
        }
        .service-box:hover {
            transform: translateY(-5px);
        }
        .service-box h3 {
            color: #e65100;
            font-size: 18px;
        }
        .service-box p {
            font-size: 14px;
            color: #555;
        }
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 30px;
            border-radius: 5px;
        }
        .back-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #ff9800;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-btn:hover {
            background: #e68900;
        }
    </style>
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
    
    <!-- 🔹 Main Navbar (Bilkul untouched) -->
    <div class="main-navbar">
        <img src="logo.png" alt="Logo">
        <div class="nav-links">
            <a href="dashboard.php">Home</a>
            <a href="course.php">Course</a>
            <a href="submit_fees.php">Fees</a>
            <a href="software_solution.html">Software Solutions</a>
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
<!-- 🔹 Software Solutions Section -->
<div class="container">
    <h1>Our Software Solutions</h1>

    <div class="section">
        <h2>🚀 Custom Business Software</h2>
        <p>We develop CRM, ERP, and HRM solutions to automate your business operations.</p>
    </div>

    <div class="section">
        <h2>🤖 AI & Automation</h2>
        <p>From AI Chatbots to Smart Content Generators, we build intelligent solutions.</p>
    </div>

    <div class="section">
        <h2>💻 Web Development</h2>
        <p>We design E-commerce websites, portfolios, and SaaS platforms with advanced features.</p>
    </div>

    <div class="services">
        <div class="service-box">
            <h3>AI Chatbots</h3>
            <p>Smart virtual assistants to automate interactions.</p>
        </div>
        <div class="service-box">
            <h3>E-commerce Solutions</h3>
            <p>Sell products online with a user-friendly store.</p>
        </div>
        <div class="service-box">
            <h3>Cybersecurity Tools</h3>
            <p>Keep your data safe from hackers and threats.</p>
        </div>
    </div>

    <a href="dashboard.php" class="back-btn">⬅ Back to Home</a>
</div>

<!-- 🔹 Footer (Untouched) -->
<div class="footer">
    &copy; 2025 Your Company | All Rights Reserved
</div>

</body>
</html>
