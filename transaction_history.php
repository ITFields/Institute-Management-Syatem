<?php
include('navbar.php');
include('auth.php'); // 🔹 Global Session & Authentication
include('db.php'); // 🔹 Include the database connection

// 🔹 Get logged-in user's ID from session (assuming session stores user_id)
$user_id = $_SESSION['user_id']; // Make sure you have this session variable set on login

// 🔹 Fetch transaction data for the logged-in user from the "payments" table
$query = "SELECT * FROM payments WHERE user_id = '$user_id' ORDER BY 'created_at' DESC";
$result = mysqli_query($conn, $query);

// 🔹 Error Handling for Query
if (!$result) {
    // Output the error message and stop the script if the query fails
    die('Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History - Learn with Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .top-navbar {
            background: #E57373;
            padding: 5px 12px;
            display: flex;
            justify-content: space-between;
            color: white;
            font-size: 10px;
        }

        .main-navbar {
            background: white;
            padding: 6px 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .auth {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logout {
            background: red;
            color: white;
            padding: 3px 6px;
            border-radius: 4px;
            font-size: 9px;
            text-decoration: none;
        }

        .table-container {
            margin: 40px auto;
            width: 90%;
            max-width: 800px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ff9800;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<!-- 🔹 Transaction History Section -->
<div class="table-container">
    <h2>Your Transaction History</h2>
    
    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['transaction_id']; ?></td>
                        <td>₹<?php echo $row['amount']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No transactions found.</p>
    <?php endif; ?>
</div>

<!-- 🔹 Footer -->
<div class="footer">
    &copy; 2025 Learn with Us | All Rights Reserved
</div>

</body>
</html>
