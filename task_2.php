<?php
// Assignment 2

function removeEvenNumbers($numbers)
{
    $result = array_filter($numbers, function ($num) {
        return $num % 2 != 0;
    });

    return $result;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$filteredNumbers = removeEvenNumbers($numbers);

print_r($filteredNumbers);
