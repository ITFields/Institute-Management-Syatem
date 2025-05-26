<?php
include('auth.php');
include('db.php'); // Include the database connection

// Get the search parameters from the URL
$search = $_GET['search'] ?? '';
$method = $_GET['method'] ?? '';
$status = $_GET['status'] ?? '';

// Building dynamic WHERE clause
$where = "WHERE 1";
if ($search != '') $where .= " AND (user_id LIKE '%$search%' OR transaction_id LIKE '%$search%')";
if ($method != '') $where .= " AND payment_method='$method'";
if ($status != '') $where .= " AND payment_status='$status'";

// Query to fetch all payments matching the filters
$query = "SELECT * FROM payments $where ORDER BY created_at DESC";
$payments = mysqli_query($conn, $query);

// Set the headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="payments_export.csv"');
header('Pragma: no-cache');
header('Expires: 0');

// Open the output stream
$output = fopen('php://output', 'w');

// Output the column headings as the first row
fputcsv($output, ['ID', 'User ID', 'Amount', 'Payment Method', 'Transaction ID', 'Status', 'Date']);

// Output the payment data rows
while ($row = mysqli_fetch_assoc($payments)) {
    $data = [
        $row['id'],
        $row['user_id'],
        '₹' . $row['amount'],
        $row['payment_method'],
        $row['transaction_id'],
        $row['payment_status'],
        date('d M Y', strtotime($row['created_at']))
    ];
    fputcsv($output, $data);
}

// Close the output stream
fclose($output);
exit;
?>
