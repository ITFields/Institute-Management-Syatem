<?php
include('auth.php');

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=courses_export.csv');

$output = fopen('php://output', 'w');
fputcsv($output, ['ID', 'Course Name', 'Level 1', 'Level 2', 'Level 3', 'Level 4', 'Level 5', 'Level 6', 'Level 7', 'Level 8', 'Level 9', 'Level 10']);

$result = mysqli_query($conn, "SELECT * FROM courses");

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, [
        $row['id'], $row['course_name'],
        $row['level1'], $row['level2'], $row['level3'], $row['level4'],
        $row['level5'], $row['level6'], $row['level7'], $row['level8'],
        $row['level9'], $row['level10']
    ]);
}

fclose($output);
exit;
?>
