<?php
// Assignment 4

function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $average = $total / count($grades);
        echo "Average grade => $student: $average\n";
    }
}

$studentGrades = array(
    'Student 1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student 2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student 3' => array('Math' => 75, 'English' => 80, 'Science' => 85)
);

calculateAverageGrades($studentGrades);
