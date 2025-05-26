<?php
include('auth.php');
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['course_name'];
    $levels = [];
    for ($i = 1; $i <= 10; $i++) {
        $levels[$i] = $_POST["level$i"];
    }

    $sql = "INSERT INTO courses (course_name, level1, level2, level3, level4, level5, level6, level7, level8, level9, level10)
            VALUES ('$name', '{$levels[1]}', '{$levels[2]}', '{$levels[3]}', '{$levels[4]}', '{$levels[5]}',
                    '{$levels[6]}', '{$levels[7]}', '{$levels[8]}', '{$levels[9]}', '{$levels[10]}')";

    mysqli_query($conn, $sql);
    header('Location: course2.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Course</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        body { font-family: Poppins, sans-serif; background-color: #f7f7f7; }
        .container { max-width: 900px; margin: 30px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { color: #d32f2f; margin-bottom: 20px; }
        input[type="text"] { width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc; }
        .submit-btn { background-color: #1976d2; color: white; border: none; padding: 10px 20px; border-radius: 5px; margin-top: 15px; cursor: pointer; }
    </style>
</head>
<body>

<center>
    <form method="POST" class="container">
        <h2>Add New Course</h2>

        <input type="text" name="course_name" placeholder="Course Name" required>

        <?php for ($i = 1; $i <= 10; $i++): ?>
            <input type="text" name="level<?php echo $i; ?>" placeholder="Level <?php echo $i; ?>" required>
        <?php endfor; ?>

        <button type="submit" class="submit-btn">Add Course</button>
    </form>
</center>

</body>
</html>
