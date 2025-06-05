<?php
include('auth.php');
include('db.php');

if (!isset($_GET['id'])) {
    echo "Invalid Request!";
    exit;
}

$id = $_GET['id'];
$delete = mysqli_query($conn, "DELETE FROM payments WHERE id = $id");

if ($delete) {
    echo "<script>alert('Payment deleted successfully'); window.location.href='payments.php';</script>";
} else {
    echo "<script>alert('Failed to delete'); window.location.href='payments.php';</script>";
}
?>
