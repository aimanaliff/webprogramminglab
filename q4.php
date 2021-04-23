<?php

function computeReverseSum($n1, $n2)
{
    return reverseInteger($n1) + reverseInteger($n2);
}

function reverseInteger($n)
{
    $reverse = 0;
    while ($n > 0) {
        $reverse = $reverse * 10;
        $reverse = $reverse + $n % 10;
        $n = (int)($n / 10);
    }
    return $reverse;
}

printf(computeReverseSum(13, 14) . "<br>");
printf(computeReverseSum(130, 1) . "<br>");
printf(computeReverseSum(305, 794) . "<br>");
