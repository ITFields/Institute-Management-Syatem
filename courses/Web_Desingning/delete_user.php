<?php
include('auth.php'); // 🔹 Global Session & Authentication

// Check if user ID is passed
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Delete query
    $delete_query = "DELETE FROM users WHERE id = $user_id";
    
    if (mysqli_query($conn, $delete_query)) {
        header("Location: users.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Redirect if no ID is passed
    header("Location: users.php");
    exit();
}
