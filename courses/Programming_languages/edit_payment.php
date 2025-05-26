<?php
include('auth.php'); // DB & session

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid Payment ID.");
}

$payment_id = $_GET['id'];

// Fetch current data
$sql = "SELECT * FROM payments WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $payment_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$payment = mysqli_fetch_assoc($result);

if (!$payment) {
    die("Payment not found.");
}

// On form submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_POST['user_id'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];
    $transaction_id = $_POST['transaction_id'];
    $payment_status = $_POST['payment_status']; // This must be either 'success' or 'fail'

    $update = "UPDATE payments SET user_id=?, amount=?, payment_method=?, transaction_id=?, payment_status=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $update);
    mysqli_stmt_bind_param($stmt, "idsssi", $user_id, $amount, $payment_method, $transaction_id, $payment_status, $payment_id);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('✅ Payment updated successfully!'); window.location.href='payments.php';</script>";
    } else {
        echo "<script>alert('❌ Update failed: " . mysqli_stmt_error($stmt) . "');</script>";
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Payment</title>
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
        
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .container h2 {
            text-align: center;
            color: #e53935;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input, select {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[readonly] {
            background-color: #f1f1f1;
        }

        button {
            background: #e53935;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #c62828;
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
        <a href="payments.php">Payments</a>
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

<!-- 🔸 Form Section -->
<div class="container">
    <h2>Edit Payment</h2>
    <form method="POST">
    <label>User ID:</label>
    <input type="text" name="user_id" value="<?php echo $payment['user_id']; ?>" required><br>

    <label>Amount:</label>
    <input type="number" name="amount" value="<?php echo $payment['amount']; ?>" required><br>

    <label>Payment Method:</label>
    <select name="payment_method">
        <option value="Cash" <?php if($payment['payment_method']=="Cash") echo "selected"; ?>>Cash</option>
        <option value="UPI" <?php if($payment['payment_method']=="UPI") echo "selected"; ?>>UPI</option>
        <option value="Net Banking" <?php if($payment['payment_method']=="Net Banking") echo "selected"; ?>>Net Banking</option>
    </select><br>

    <label>Transaction ID:</label>
    <input type="text" name="transaction_id" value="<?php echo $payment['transaction_id']; ?>"><br>

    <label>Payment Status:</label>
    <select name="payment_status">
        <option value="success" <?php if($payment['payment_status']=="success") echo "selected"; ?>>Success</option>
        <option value="failed" <?php if($payment['payment_status']=="failed") echo "selected"; ?>>Fail</option>
    </select><br>

    <button type="submit">Update</button>
</form>
</div>

</body>
</html>
