<?php
include('auth.php');
include('db.php');

// Fetch all contact messages
$contactQuery = mysqli_query($conn, "SELECT message FROM contact_us ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Messages</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            padding: 40px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: square;
            padding-left: 25px;
        }
        li {
            margin-bottom: 15px;
            background: #e9f7ef;
            padding: 15px;
            border-left: 5px solid #2ecc71;
            border-radius: 5px;
        }
        a.back-btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #27ae60;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 6px;
        }
        a.back-btn:hover {
            background-color: #1e8449;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Contact Us Messages</h2>
    <ul>
        <?php if ($contactQuery && mysqli_num_rows($contactQuery) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($contactQuery)): ?>
                <li><?php echo nl2br(htmlspecialchars($row['message'])); ?></li>
            <?php endwhile; ?>
        <?php else: ?>
            <li>No messages available.</li>
        <?php endif; ?>
    </ul>

    <a href="admin.php" class="back-btn">⬅ Back to Dashboard</a>
</div>

</body>
</html>
