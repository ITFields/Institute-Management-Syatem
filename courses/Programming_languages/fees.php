<?php
include('navbar.php');
include('auth.php'); // Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    die("User is not logged in.");
}

$user_id = $_SESSION['user_id'];

// Fetch user data from the database
$query = "SELECT name, course_name FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);

// Error checking for user query
if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($result);

if (!$user) {
    die("User not found.");
}

$user_name = $user['name'];
$course_name = $user['course_name'];

// Check if the form is submitted and payment is done
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch the payment amount and payment details entered by the user
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];
    $transaction_id = $_POST['transaction_id'];


    // Insert the payment record into the 'payments' table
    $payment_query = "INSERT INTO payments (user_id, amount, payment_method, transaction_id,course_name, user_name) 
                      VALUES ('$user_id', '$amount', '$payment_method', '$transaction_id','$course_name', '$user_name')";

    $payment_result = mysqli_query($conn, $payment_query);

    // Error checking for payment insertion query
    if (!$payment_result) {
        die("SQL Error: " . mysqli_error($conn));
    }

    // If the payment is successfully recorded, display an alert message
    echo "<script>
            alert('Payment of ₹$amount has been successfully recorded for course \"$course_name\".');
            window.location.href = 'dashboard.php'; // Redirect to dashboard after alert
          </script>";
    exit(); // Stop further script execution after the alert
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Fees</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        .container {
            max-width: 450px;
            margin: 60px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            background: #fff;
        }
        h2 { color: #ff9800; margin-bottom: 10px; }
        .info { font-size: 16px; margin-bottom: 10px; }
        .form-group { margin-bottom: 15px; text-align: left; }
        label { font-weight: 500; }
        select, input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
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
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover { background: #e68900; }
        .back-btn {
            display: block;
            margin-top: 15px;
            padding: 8px 12px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .back-btn:hover { background: #444; }
    </style>
</head>
<body>

<div class="container">
    <h2>💳 Pay Your Fees</h2>
    
    <!-- Display user details dynamically -->
    <p class="info"><strong>Name:</strong> <?php echo $user_name; ?></p>
    <p class="info"><strong>Course:</strong> <?php echo $course_name; ?></p>
    

    <form method="POST" action="">
    <div class="form-group">
        <label for="amount">Enter Amount:</label>
        <input type="number" name="amount" required>
    </div>

    <div class="form-group">
        <label for="payment_method">Select Payment Method:</label>
        <select name="payment_method" id="payment_method" required onchange="togglePaymentField()">
            <option value="">-- Select --</option>
            <option value="UPI">UPI</option>
            <option value="Credit Card">Credit/Debit Card</option>
        </select>
    </div>

    <!-- UPI Number Field -->
    <div class="form-group" id="upiField" style="display:none;">
        <label for="upi_number">Enter UPI ID:</label>
        <input type="text" name="upi_number" placeholder="example@upi">
    </div>

    <!-- Credit/Debit Card Field -->
    <div class="form-group" id="cardField" style="display:none;">
        <label for="card_number">Enter Card Number:</label>
        <input type="text" name="card_number" maxlength="16" placeholder="1234 5678 9012 3456">
    </div>

    <div class="form-group">
        <label for="transaction_id">Transaction ID (if applicable):</label>
        <input type="text" name="transaction_id">
    </div>

    <button type="submit">Proceed to Pay</button>
</form>


    <a href="dashboard.php" class="back-btn">⬅ Back to Home</a>
</div>
<script>
function togglePaymentField() {
    var method = document.getElementById('payment_method').value;
    var upiField = document.getElementById('upiField');
    var cardField = document.getElementById('cardField');

    // Reset both fields
    upiField.style.display = 'none';
    cardField.style.display = 'none';

    if (method === 'UPI') {
        upiField.style.display = 'block';
    } else if (method === 'Credit Card') {
        cardField.style.display = 'block';
    }
}
</script>

</body>
</html>
