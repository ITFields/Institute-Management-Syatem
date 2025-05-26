<?php
include('auth.php');

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=users_export.csv');

$output = fopen('php://output', 'w');
fputcsv($output, ['ID', 'Name', 'Email', 'Password', 'Course', 'Start', 'End', 'Fee']);

$result = mysqli_query($conn, "SELECT * FROM courses");

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, [
        $row['id'], $row['name'],
        $row['email'], $row['password'], $row['course'], $row['start'],
        $row['end'], $row['fee']
    ]);
}

fclose($output);
exit;
?>
