<?php

$math_homework = array(
    'student1' => array('math1', 'math2'),
    'student2' => array('math3', 'math4'),
    'student3' => array('math5', 'math6')
);

function generateRandomHomework($math_homework) {
    $randomStudent = array_rand($math_homework, 1)[0];
    $randomAssignment = array_rand($math_homework[$randomStudent], 1)[0];

    return $math_homework[$randomStudent][$randomAssignment];
}

echo generateRandomHomework($math_homework);

?>
