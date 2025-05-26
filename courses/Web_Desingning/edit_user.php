<?php
include('auth.php'); // 🔹 Global Session & Authentication
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
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        /* 🔹 Instructions Section Styling */
        .instructions-section {
            max-width: 1000px;
            margin: 50px auto;
            padding: 30px;
            border-left: 6px solid #e53935;
            background-color: #fff3f3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            font-family: 'Poppins', sans-serif;
            border-radius: 8px;
        }

        .instructions-section h2 {
            color: #b71c1c;
            font-size: 28px;
            margin-bottom: 15px;
        }

        .instructions-section h3 {
            color: #d84315;
            font-size: 22px;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .instructions-section ul {
            list-style: disc;
            padding-left: 25px;
            margin-bottom: 20px;
        }

        .instructions-section ul li {
            margin-bottom: 10px;
            line-height: 1.8;
            font-size: 16px;
        }

        .instructions-section a {
            color: #1565c0;
            text-decoration: underline;
        }

        .instructions-section .note {
            margin-top: 30px;
            padding: 15px;
            background-color: #ffe0e0;
            border-left: 4px solid #ff1744;
            font-weight: 500;
            color: #c62828;
            font-size: 15px;
        }
        
        /* 🔹 Table Styling */
        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 8px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #e53935;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) {
            background-color: #f1f1f1;
        }

        tr:hover {
            background-color: #ffe0e0;
        }

        /* 🔹 Button Styling */
        .edit, .delete {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px; /* Space between buttons */
        }

        .edit {
            background-color: #4caf50;
            color: white;
        }

        .edit:hover {
            background-color: #45a049;
        }

        .delete {
            background-color: #f44336;
            color: white;
        }

        .delete:hover {
            background-color: #d32f2f;
        }

        /* 🔹 Responsive Layout */
        @media screen and (max-width: 768px) {
            .nav-links {
                display: block;
                text-align: center;
            }

            .nav-links a {
                margin-bottom: 10px;
            }

            table {
                font-size: 14px;
            }
        }

    /* 🔹 Form Container */
    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        font-family: 'Poppins', sans-serif;
    }

    .container h2 {
        text-align: center;
        color: #e53935;
        margin-bottom: 30px;
        font-weight: 600;
    }

    /* 🔹 Input Styling */
    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
        color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 15px;
        transition: border 0.3s ease;
    }

    input:focus {
        border-color: #e53935;
        outline: none;
    }

    /* 🔹 Submit Button */
    button[type="submit"] {
        background-color: #e53935;
        color: white;
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #c62828;
    }

    /* 🔹 Responsive */
    @media (max-width: 600px) {
        .container {
            padding: 20px;
        }

        button[type="submit"] {
            font-size: 15px;
        }
    }
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
</style>

</head>

<?php
include('auth.php'); // 🔹 Global Session & Authentication

// Check if user ID is passed
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Fetch user data from database
    $query = "SELECT * FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    // If user not found, redirect
    if (!$user) {
        header("Location: users.php");
        exit();
    }
}

// Handle update operation
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $course_name = $_POST['course_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $fee = $_POST['fee'];

    // Update query
    $update_query = "UPDATE users SET name = '$name', email = '$email', password = '$password', course_name = '$course_name', start_date = '$start_date', end_date = '$end_date', fee = '$fee' WHERE id = $user_id";
    
    if (mysqli_query($conn, $update_query)) {
        header("Location: users.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - Learn with Us</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<body>

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
<!-- User Edit Form -->
<div class="container">
    <h2>Edit User</h2>
    <form method="POST" action="">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        
        <label for="password">Password</label>
        <input type="password" name="password" value="<?php echo $user['password']; ?>" required>
        
        <label for="course_name">Course</label>
        <input type="text" name="course_name" value="<?php echo $user['course_name']; ?>" required>
        
        <label for="start_date">Start Date</label>
        <input type="date" name="start_date" value="<?php echo $user['start_date']; ?>" required>
        
        <label for="end_date">End Date</label>
        <input type="date" name="end_date" value="<?php echo $user['end_date']; ?>" required>
        
        <label for="fee">Fee</label>
        <input type="text" name="fee" value="<?php echo $user['fee']; ?>" required>
        
        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
