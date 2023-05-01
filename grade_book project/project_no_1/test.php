<?php
require_once "student.php";
require_once "course.php";


$student1 = new student('s001','Hider');
$student2 = new student('s002','Faisal');
$student3 = new student('s003','Robin');

$course1 = new course('c001','English');

$course1->addStudent($student1);
$course1->addStudent($student2);
$course1->addStudent($student3);

print_r($course1);