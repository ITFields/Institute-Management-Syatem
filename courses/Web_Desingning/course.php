<?php
include('auth.php');
include('db.php');
include('navbar.php');

$user_id = $_SESSION['user_id'];

// Fetch user course data
$query = "SELECT course_name, name, start_date, end_date, fee FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($result);

if (!$user) {
    echo "<p>User not found!</p>";
    exit();
}

$course_name = $user['course_name'];
$user_name = $user['name'];
$start_date = $user['start_date'];
$end_date = $user['end_date'];
$original_fee = $user['fee'];
$coursedir = str_replace(' ', '_', $course_name);

// 🔐 Only count successful payments
$payment_query = "SELECT SUM(amount) as total_paid FROM payments WHERE user_id = '$user_id' AND course_name = '$course_name' AND payment_status = 'success'";
$payment_result = mysqli_query($conn, $payment_query);

if (!$payment_result) {
    die("SQL Error: " . mysqli_error($conn));
}

$payment = mysqli_fetch_assoc($payment_result);
$total_paid = $payment['total_paid'] ?? 0;

// ⛔ Show alert if no successful payment
if ($total_paid == 0) {
    echo "<script>alert('⚠ Let admin set your fee status to SUCCESS before accessing the course.');</script>";
}

// Get max level access based on payment
$access_query = "SELECT MAX(max_level_access) as max_level FROM course_level_access WHERE course_name = '$course_name' AND min_fee <= '$total_paid'";
$access_result = mysqli_query($conn, $access_query);

if (!$access_result) {
    die("SQL Error: " . mysqli_error($conn));
}

$access = mysqli_fetch_assoc($access_result);
$max_level = $access['max_level'] ?? 0;

// Get course level details
$levels_query = "SELECT level1, level2, level3, level4, level5, level6, level7, level8, level9, level10 FROM courses WHERE course_name = '$course_name'";
$levels_result = mysqli_query($conn, $levels_query);

if (!$levels_result) {
    die("SQL Error: " . mysqli_error($conn));
}

$levels = mysqli_fetch_assoc($levels_result);

// Prepare level details array
$level_details = [];
if ($levels) {
    for ($i = 1; $i <= $max_level; $i++) {
        $level_column = "level" . $i;
        if (!empty($levels[$level_column])) {
            $level_details[] = [
                'name' => $levels[$level_column],
                'file' => "courses/$coursedir/level$i.php"
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Course Details</title>
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f5f5f5; }
        .container { max-width: 600px; margin: 30px auto; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { color: #ff9800; }
        .info { margin-bottom: 10px; font-size: 16px; }
        .topics-box { margin-top: 30px; padding: 20px; background: #fafafa; border-radius: 10px; }
        .topics-list li { margin-bottom: 10px; }
        .topics-list a { text-decoration: none; color: #333; }
        .topics-list a:hover { color: #ff9800; }
        .back-btn { display: inline-block; margin-top: 20px; background: #ff9800; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>

<div class="container">
    <h2>📚 Your Course Details</h2>
    <p class="info"><strong>Name:</strong> <?= $user_name ?></p>
    <p class="info"><strong>Course:</strong> <?= $course_name ?></p>
    <p class="info"><strong>Start Date:</strong> <?= $start_date ?></p>
    <p class="info"><strong>End Date:</strong> <?= $end_date ?></p>
    <p class="info"><strong>Course Fee:</strong> ₹<?= $original_fee ?> </p>
    <p class="info"><strong>Paid (Success Only):</strong> ₹<?= $total_paid ?></p>
    <p class="info"><strong>Unlocked Levels:</strong> <?= $max_level ?></p>
</div>

<div class="container">
    <div class="topics-box">
        <h3>📖 Topics Covered:</h3>
        <?php if (!empty($level_details)): ?>
            <ul class="topics-list">
                <?php foreach ($level_details as $index => $level): ?>
                    <li><a href="<?= $level['file']; ?>" target="_blank">Level <?= $index + 1 ?> - <?= $level['name'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p style="color:red;">⚠ First clear the due fees or ask admin to mark your payment as SUCCESS to access topics.</p>
        <?php endif; ?>
    </div>
</div>

<div class="container">
    <a href="dashboard.php" class="back-btn">⬅ Back to Home</a>
</div>

</body>
</html>
