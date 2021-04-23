<?php
// $scores = array(90, 98, 89, 100, 100, 86);
$scores = array(40, 65, 77, 82, 80, 54, 73, 63, 95, 49);

$sum = array_sum($scores);
$count = count($scores);

echo "Sample scores: ";
foreach ($scores as $score) {
    echo $score . ", ";
}

echo nl2br("\nSample output:\n");
echo "Average score for [";

foreach ($scores as $value) {
    $sum += $value;
    $count++;
    echo "$value ";
}

echo "] is ";
$avg = $sum / $count;
printf('%0.1f <br>', $avg);
echo "Average grade is " . checkGrade($avg);

function checkGrade($average): string
{
    if ($average >= 80) {
        return "A";
    } else if ($average >= 60) {
        return "B";
    } else if ($average >= 40) {
        return "C";
    } else if ($average >= 20) {
        return "D";
    } else if ($average >= 1) {
        return "E";
    } else {
        return "F";
    }
}
