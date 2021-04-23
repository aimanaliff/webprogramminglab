<?php

declare(strict_types=1);

function printName(string $fname, string $lname, int $number)
{
    for ($count = 0; $count < $number; $count++) {
        echo $fname . " " . $lname . "<br>";
    }
    echo "Looped for " . $count . " times";
}

printName("John", "Smith", 10);
