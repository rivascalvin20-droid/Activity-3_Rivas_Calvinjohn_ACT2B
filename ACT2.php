<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Evaluator</title>
</head>
<body>

<?php

$grade_Rivas = 84;

if ($grade_Rivas >= 80.5) {
    $resulta_Rivas = "Passed";
} else {
    $resulta_Rivas = "Failed";
}

if ($grade_Rivas >= 90) {
    $letter_grade = "A";
} elseif ($grade_Rivas >= 80) {
    $letter_grade = "B";
} elseif ($grade_Rivas >= 75) {
    $letter_grade = "C";
} elseif ($grade_Rivas >= 70) {
    $letter_grade = "D";
} else {
    $letter_grade = "F";
}

echo "Grade: " . $grade_Rivas . "<br>";
echo "Remark: " . $resulta_Rivas . "<br>";
echo "Letter Grade: " . $letter_grade . "<br>";

?>

</body>
</html>