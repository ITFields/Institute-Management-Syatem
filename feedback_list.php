<?php
include('auth.php');
include('db.php');

// Fetch all feedback comments
$feedbackQuery = mysqli_query($conn, "SELECT comments FROM feedback ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Comments</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
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
            list-style-type: disc;
            padding-left: 25px;
        }
        li {
            margin-bottom: 15px;
            background: #ecf0f1;
            padding: 15px;
            border-radius: 8px;
        }
        a.back-btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 6px;
        }
        a.back-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>All Feedback Comments</h2>
    <ul>
        <?php if ($feedbackQuery && mysqli_num_rows($feedbackQuery) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($feedbackQuery)): ?>
                <li><?php echo substr(htmlspecialchars($row['comments']), 0, 50); ?>...</li>
            <?php endwhile; ?>
        <?php else: ?>
            <li>No feedback available.</li>
        <?php endif; ?>
    </ul>
    
    <a href="admin.php" class="back-btn">⬅ Back to Dashboard</a>
</div>

</body>
</html>
