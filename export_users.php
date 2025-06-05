<?php
include('auth.php'); // Session and DB connection

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=users_export.csv');

// Open output stream
$output = fopen("php://output", "w");

// CSV Column Headers
fputcsv($output, ['ID', 'Name', 'Email', 'Password', 'Course', 'Start Date', 'End Date', 'Fee']);

// Fetch users from database
$search = $_GET['search'] ?? '';
$where = "WHERE 1";
if ($search != '') {
    $where .= " AND (id LIKE '%$search%' OR name LIKE '%$search%' OR email LIKE '%$search%')";
}

$sql = "SELECT * FROM users $where ORDER BY start_date DESC";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, [
        $row['id'],
        $row['name'],
        $row['email'],
        $row['password'],
        $row['course_name'],
        $row['start_date'],
        $row['end_date'],
        $row['fee']
    ]);
}

fclose($output);
exit;
?>
