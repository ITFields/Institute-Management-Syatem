<?php
include('auth.php'); // 🔐 Session & Authentication

// 🔍 Search Logic
$search = $_GET['search'] ?? '';
$where = "WHERE 1";
if ($search != '') {
    $where .= " AND (id LIKE '%$search%' OR name LIKE '%$search%' OR email LIKE '%$search%')";
}

// 🔢 Pagination Setup
$limit = 5;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// 🔢 Total Users Count
$countSql = "SELECT COUNT(*) AS total FROM users $where";
$countResult = mysqli_query($conn, $countSql);
$total = mysqli_fetch_assoc($countResult)['total'];
$totalPages = ceil($total / $limit);

// 🔄 Paginated User Data
$query = "SELECT * FROM users $where ORDER BY start_date DESC LIMIT $offset, $limit";
$users = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Learn with Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <style>
        
        .container { max-width:100%; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }

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
         input{width:25%;}
        .submit-btn { background-color: #1565c0; color: white; padding: 10px 15px; border: none; border-radius: 5px; margin-top: 10px; }
        .top-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e06e6e;
            padding: 10px 20px;
            flex-wrap: wrap;
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
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .pagination a {
            padding: 8px 12px;
            text-decoration: none;
            background: #eee;
            border-radius: 4px;
            color: black;
        }
        .pagination a.disabled {
            pointer-events: none;
            background: #ddd;
            color: #999;
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
        <a href="payments.php">Payment</a>
    </div>
    <div class="auth">
        <?php if (isset($_SESSION['user'])): ?>
            <?php if ($_SESSION['user'] == $_SESSION['admin_name']): ?>
                <span>Hello, Admin!</span>
            <?php else: ?>
                <span>Hello, <?php echo $_SESSION['user']; ?>!</span>
            <?php endif; ?>
            <a href="logout.php" class="logout">Logout</a>
        <?php else: ?>
            <a href="login.php" class="login">Login</a>
            <a href="register.php" class="register">Create Account</a>
        <?php endif; ?>
    </div>
</div>

<!-- 🔹 User Search Form -->
<div class="container">
    <h2>👤 Users</h2>
    <form method="POST" action="export_users.php" style="margin-top: 10px;">
    <button type="submit" class="submit-btn">📤 Export to CSV</button>
</form>

    <!-- 🔍 Search Form -->
    <form method="GET">
        <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search by ID, Name, or Email">
        <button type="submit" class="submit-btn">Search</button>
    </form>

    <!-- 🔹 Users Table -->
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Course</th><th>Start</th><th>End</th><th>Fee</th><th>Actions</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($users)) {
            echo "<tr>
                <td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['password']}</td>
                <td>{$row['course_name']}</td><td>{$row['start_date']}</td><td>{$row['end_date']}</td><td>{$row['fee']}</td>
                <td>
                    <button class='edit' onclick='window.location.href=\"edit_user.php?id={$row['id']}\"'>Edit</button>
                    <br><br>
                    <button class='delete' onclick='deleteUser({$row['id']})'>Delete</button>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>

<!-- 🔹 Delete User Script -->
<script>
function deleteUser(userId) {
    if (confirm('Are you sure you want to delete this user?')) {
        window.location.href = 'delete_user.php?id=' + userId;
    }
}
</script>
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

</body>
</html>
