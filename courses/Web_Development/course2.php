<?php
include('auth.php'); // 🔹 Global Session & Authentication

// Check if a search term is provided
$search = isset($_GET['search']) ? $_GET['search'] : '';

// If a search term is provided, modify the query to include a WHERE clause
$searchQuery = "";
if ($search) {
    // Make sure to use prepared statements to prevent SQL injection
    $searchQuery = " WHERE course_name LIKE ? OR id LIKE ?";
}

$search = isset($_GET['search']) ? $_GET['search'] : '';
$limit = 5;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$where = "";
$params = [];
$paramTypes = "";

// 🔍 If search exists
if (!empty($search)) {
    $where = "WHERE course_name LIKE ? OR id LIKE ?";
    $like = '%' . $search . '%';
    $params[] = &$like;
    $params[] = &$like;
    $paramTypes = "ss";
}

// 🔢 Count total records
$countSql = "SELECT COUNT(*) AS total FROM courses $where";
$countStmt = mysqli_prepare($conn, $countSql);
if (!empty($search)) {
    mysqli_stmt_bind_param($countStmt, $paramTypes, ...$params);
}
mysqli_stmt_execute($countStmt);
$countResult = mysqli_stmt_get_result($countStmt);
$total = mysqli_fetch_assoc($countResult)['total'];
$totalPages = ceil($total / $limit);
mysqli_stmt_close($countStmt);

// 🔄 Fetch paginated records
$sql = "SELECT * FROM courses $where LIMIT ?, ?";
$stmt = mysqli_prepare($conn, $sql);

// Bind search + offset + limit
$params[] = &$offset;
$params[] = &$limit;
$paramTypes .= "ii";

mysqli_stmt_bind_param($stmt, $paramTypes, ...$params);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
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
        /* General Layout Styling */
        body { font-family: Poppins, sans-serif; background-color: #f4f7fc; padding: 0; margin: 0; }
        .container { max-width: 100%; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }

        h2 { color: #e53935; margin-bottom: 20px; }
        form.filter-bar { margin-bottom: 20px; display: flex; flex-wrap: wrap; gap: 10px; }
        form input, form select { padding: 8px; border: 1px solid #ccc; border-radius: 5px; }
        .add-btn { background: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 5px; text-decoration: none; float: right; }

        table { width: 50%; border-collapse: collapse; margin-top: 20px; }
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
        .submit-btn { background-color: #1565c0; color: white; padding: 10px 15px; border: none; border-radius: 5px; margin-top: 10px; }
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
        .search{
            height:25%;
            width:50%;
        }
    
.course-summary {
    margin-top: 15px;
    font-size: 16px;
    font-weight: bold;
}
.add-btn { background: #4caf50; color: white; padding: 10px 10px; border: none; border-radius: 5px; text-decoration: none; float: right; }
h2 { color: #e53935; margin-bottom: 20px; }
body { font-family: Poppins, sans-serif; background-color: #f4f7fc; padding: 0; margin: 0; }
        .container { width:100%; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }

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

<!-- 🔹 User Table -->
<div class="container">
<h2>📘 Courses
<a href="course_add.php" class="add-btn">+ Add Courses</a>
</h2>
<form method="POST" action="export_courses.php" style="margin-top: 10px;">
    <button type="submit" class="submit-btn">📤 Export to CSV</button>
</form>

<form method="GET">
    <input type="text" class="search" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search by ID, Name, or Email">
    <button type="submit" class="submit-btn">Search</button>
</form>
<table id="courseTable">
    <tr>
        <th>ID</th><th>Course Name</th>
        <?php for ($i = 1; $i <= 10; $i++) echo "<th>Level $i</th>"; ?>
        <th>Actions</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['course_name'] ?></td>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <td><?= $row['level' . $i] ?></td>
            <?php endfor; ?>
            <td>
                <button class='btn edit'><a href='edit_course.php?id=<?= $row['id'] ?>'>Edit</a></button>
                <button class='btn delete' onclick="deleteCourse(<?= $row['id'] ?>)">Delete</button>

            </td>
        </tr>
    <?php endwhile; ?>
</table>

</div>
<?php
$totalResult = mysqli_query($conn, "SELECT COUNT(*) as total FROM courses");
$totalRow = mysqli_fetch_assoc($totalResult);
echo "<div class='course-summary'>Total Courses: <strong>" . $totalRow['total'] . "</strong></div>";
?>

<!-- 🔹 Delete Function (JS) -->
<script>
    function deleteCourse(id) {
        if (confirm("Are you sure you want to delete this course?")) {
            window.location.href = 'delete_course.php?id=' + id;
        }
    }
</script>

<div class="pagination">
    <?php
    $baseURL = "?";
    if (!empty($search)) $baseURL .= "search=" . urlencode($search) . "&";

    // First
    echo '<a href="' . $baseURL . 'page=1" class="' . ($page <= 1 ? 'disabled' : '') . '">First</a>';

    // Prev
    $prevPage = $page - 1;
    echo '<a href="' . $baseURL . 'page=' . $prevPage . '" class="' . ($page <= 1 ? 'disabled' : '') . '">Prev</a>';

    // Next
    $nextPage = $page + 1;
    echo '<a href="' . $baseURL . 'page=' . $nextPage . '" class="' . ($page >= $totalPages ? 'disabled' : '') . '">Next</a>';
    ?>
</div>
</body>
</html>