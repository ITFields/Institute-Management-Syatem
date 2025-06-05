<?php
include('auth.php');
include('db.php'); // Ensure the database connection is included

// 🔍 Filter/Search Logic
$search = $_GET['search'] ?? '';
$method = $_GET['method'] ?? '';
$status = $_GET['status'] ?? '';
$limit = 10; // Define number of records per page

// Pagination Logic
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Building dynamic WHERE clause
$where = "WHERE 1";
if ($search != '') $where .= " AND (user_id LIKE '%$search%' OR transaction_id LIKE '%$search%')";
if ($method != '') $where .= " AND payment_method='$method'";
if ($status != '') $where .= " AND payment_status='$status'";

// Query for fetching filtered payments with pagination
$query = "SELECT * FROM payments $where ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
$payments = mysqli_query($conn, $query);

// Query for counting total records
$totalQuery = "SELECT COUNT(*) AS total FROM payments $where";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalRecords = $totalRow['total'];

// Calculate total pages
$totalPages = ceil($totalRecords / $limit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Payments</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        body { font-family: Poppins, sans-serif; background-color: #f4f7fc; padding: 0; margin: 0; }
        .container { max-width: 1100px; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }

        h2 { color: #e53935; margin-bottom: 20px; }
        form.filter-bar { margin-bottom: 20px; display: flex; flex-wrap: wrap; gap: 10px; }
        form input, form select { padding: 8px; border: 1px solid #ccc; border-radius: 5px; }
        .add-btn { background: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 5px; text-decoration: none; float: right; }

        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: center; }
        th { background: #e53935; color: white; }
        tr:hover { background-color: #ffe0e0; }

        .edit, .delete { padding: 6px 12px; font-size: 14px; border: none; border-radius: 5px; color: white; text-decoration: none; }
        .edit { background: #4caf50; }
        .delete { background: #f44336; }

        .form-inline { margin-top: 30px; }
        .form-inline input, .form-inline select { margin-bottom: 10px; display: block; width: 100%; }

        .submit-btn { background-color: #1565c0; color: white; padding: 10px 15px; border: none; border-radius: 5px; margin-top: 10px; }
        .top-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e06e6e;
            padding: 10px 20px;
            flex-wrap: wrap; /* Optional: handle small screens */
        }

        .top-navbar {
            display: flex;
            justify-content: space-between;
            background-color: #e06e6e;
            padding: 10px 20px;
        }
        .top-navbar a {
            color: white;
            margin-right: 15px;
            font-weight: 600;
            text-decoration: none;
        }
        .top-navbar img {
            height: 40px;
        }
        .pagination {
    text-align: center;
    margin-top: 20px;
}

.pagination a {
    display: inline-block;
    padding: 8px 14px;
    margin: 0 4px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: #fff;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
}

.pagination a:hover {
    background: #e53935;
    color: white;
    border-color: #e53935;
}

.pagination a.active {
    background: #e53935;
    color: white;
    font-weight: bold;
}

    </style>
</head>
<body>
<!-- Top Navbar -->
<div class="top-navbar">
    <div>
        <a href="contactus.php">Contact Us</a>
        <a href="feedback.php">Feedback</a>
    </div>
    <div>
        <a href="https://www.facebook.com/" > <img src="images/fb.png"></a>
        <a href="www.instagram.com" ><img src="images/i.png" ></a>
        <a href="https://x.com/" > <img src="images/x.png"></a>

    </div>
</div>
<!-- 🔹 Main Navbar -->
<div class="main-navbar">
    <img src="logo.png" alt="Logo">
    <div class="nav-links">
        <a href="admin.php">Home</a>
        <a href="users.php">Users</a>
        <a href="course2.php">Courses</a>
        <a href="payments.php">Payments</a>
    </div>
    <div class="auth">
        <?php if (isset($_SESSION['user'])): ?>
            <span>Hello, <?php echo $_SESSION['user']; ?>!</span>
            <a href="logout.php" class="logout">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>
    </div>
</div>
<div class="container">
    <h2>💳 Manage Payments
        <a href="add_payment.php" class="add-btn">+ Add Payment</a>
    </h2>
    <form method="POST" action="export_payments.php" style="margin-top: 10px;">
    <button type="submit" class="submit-btn">📤 Export to CSV</button>
</form>
    <!-- 🔍 Filter Section -->
    <form class="filter-bar" method="GET">
        <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search by user ID or txn ID">
        <select name="method">
            <option value="">All Methods</option>
            <option value="UPI" <?= $method == 'UPI' ? 'selected' : '' ?>>UPI</option>
            <option value="Card" <?= $method == 'Card' ? 'selected' : '' ?>>Card</option>
            <option value="NetBanking" <?= $method == 'NetBanking' ? 'selected' : '' ?>>NetBanking</option>
        </select>
        <select name="status">
            <option value="">All Statuses</option>
            <option value="Paid" <?= $status == 'Paid' ? 'selected' : '' ?>>Paid</option>
            <option value="Pending" <?= $status == 'Pending' ? 'selected' : '' ?>>Pending</option>
        </select>
        <button type="submit" class="submit-btn">Search</button>
    </form>

    <!-- 🔁 Payments Table -->
    <table>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Amount</th>
            <th>Method</th>
            <th>Txn ID</th>
            <th>Status</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($payments)) : ?>
            <tr class="<?= $row['payment_status'] == 'Pending' ? 'highlight-pending' : ($row['payment_status'] == 'Paid' ? 'highlight-paid' : '') ?>">
                <td><?= $row['id'] ?></td>
                <td><?= $row['user_id'] ?></td>
                <td>₹<?= $row['amount'] ?></td>
                <td><?= $row['payment_method'] ?></td>
                <td><?= $row['transaction_id'] ?></td>
                <td><?= $row['payment_status'] ?></td>
                <td><?= date('d M Y', strtotime($row['created_at'])) ?></td>
                <td>
                    <a class="edit" href="edit_payment.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="delete" href="delete_payment.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this payment?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <div class="pagination">
    <?php
    $baseURL = "?";
    if (!empty($search)) $baseURL .= "search=" . urlencode($search) . "&";

    echo '<a href="' . $baseURL . 'page=1" class="' . ($page <= 1 ? 'disabled' : '') . '">First</a>';

    $prevPage = $page - 1;
    echo '<a href="' . $baseURL . 'page=' . $prevPage . '" class="' . ($page <= 1 ? 'disabled' : '') . '">Prev</a>';

    $nextPage = $page + 1;
    echo '<a href="' . $baseURL . 'page=' . $nextPage . '" class="' . ($page >= $totalPages ? 'disabled' : '') . '">Next</a>';

    echo '<a href="' . $baseURL . 'page=' . $totalPages . '" class="' . ($page >= $totalPages ? 'disabled' : '') . '">Last</a>';
    ?>
</div>

</div>

</body>
</html>