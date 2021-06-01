<?php
// $scores = array(90, 98, 89, 100, 100, 86);
$scores = array(
    $_POST["score1"],
    $_POST["score2"],
    $_POST["score3"],
    $_POST["score4"],
    $_POST["score5"],
    $_POST["score6"]
);

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
        return "A <br>";
    } else if ($average >= 60) {
        return "B <br>";
    } else if ($average >= 40) {
        return "C <br>";
    } else if ($average >= 20) {
        return "D <br>";
    } else if ($average >= 1) {
        return "E <br>";
    } else {
        return "F <br>";
    }
}

// testing get method
// echo $_GET["score1"] . "<br>";
// echo $_GET["score2"] . "<br>";
// echo $_GET["score3"] . "<br>";
// echo $_GET["score4"] . "<br>";
// echo $_GET["score5"] . "<br>";
// echo $_GET["score6"] . "<br>";
