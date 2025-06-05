<?php
include('auth.php'); // Ensure user is logged in
include('db.php'); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);
    $transaction_id = mysqli_real_escape_string($conn, $_POST['transaction_id']);

    // 🟢 Insert payment record
    $query = "INSERT INTO payments (user_id, amount, payment_method, transaction_id, payment_status) 
              VALUES ('$user_id', '$amount', '$payment_method', '$transaction_id', 'Pending')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Payment submitted successfully!'); window.location.href='course.php';</script>";
    } else {
        echo "<script>alert('Error processing payment. Try again.'); window.location.href='dashboard.php';</script>";
    }
}
?>
