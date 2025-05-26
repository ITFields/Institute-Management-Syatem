<?php
include('auth.php');
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $amount = $_POST['amount'];
    $method = $_POST['method'];
    $txn = $_POST['txn_id'];
    $status = $_POST['status'];

    $insert = "INSERT INTO payments (user_id, amount, payment_method, transaction_id, payment_status, created_at)
               VALUES ('$user_id', '$amount', '$method', '$txn', '$status', NOW())";
    mysqli_query($conn, $insert);
    header('Location: payments.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Payments</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        body { font-family: Poppins, sans-serif; background-color: #f4f7fc; padding: 0; margin: 0; }
        .container { max-width: 1100px; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }

        h2 { color: #e53935; margin-bottom: 20px; }
        form.filter-bar { margin-bottom: 20px; display: flex; flex-wrap: wrap; gap: 10px; }
        form input, form select { padding: 8px; border: 1px solid #ccc; border-radius: 5px; }
        .add-btn { background: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 5px; text-decoration: none; float: right; }

        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: center; }
        th { background: #e53935; color: white; }
        tr:hover { background-color: #ffe0e0; }

        .edit, .delete { padding: 6px 12px; font-size: 14px; border: none; border-radius: 5px; color: white; text-decoration: none; }
        .edit { background: #4caf50; }
        .delete { background: #f44336; }

        .form-inline { margin-top: 30px; }
        .form-inline input, .form-inline select { margin-bottom: 10px; display: block; width: 100%; }

        .submit-btn { background-color: #1565c0; color: white; padding: 10px 15px; border: none; border-radius: 5px; margin-top: 10px; }
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
<center>
<form method="POST" class="container">
    <h2>Add New Payment</h2>
    <input type="text" name="user_id" placeholder="User ID" required>
    <br><br>
    <input type="number" name="amount" placeholder="Amount (INR)" required>
    <br><br>
    <select name="method" required>
        <option value="">Select Payment Method</option>
        <option value="UPI">UPI</option>
        <option value="Card">Card</option>
        <option value="NetBanking">NetBanking</option>
    </select>
    <br><br>
    <input type="text" name="txn_id" placeholder="Transaction ID">
    <br><br>
    <select name="status" required>
        <option value="success">Success</option>
        <option value="failed">Failed</option>
    </select>
    <br><br>
    <button type="submit" class="submit-btn">Submit</button>
</form>
</center>
</body>
</html>