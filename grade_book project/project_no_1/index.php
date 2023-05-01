<?php
require_once "student.php";
require_once "course.php";
require_once "gradebook.php";

$student1 = new student('s001','Hider');
$student2 = new student('s002','Faisal');
$student3 = new student('s003','Robin');
$student4 = new student('s004','Hasan');


$course1 = new course('c001','English');
$course1->addStudent($student1);
$course1->addStudent($student2);
$course1->addStudent($student3);
$course1->addStudent($student4);


$course1->addGrade('s001',95);
$course1->addGrade('s002',90);
$course1->addGrade('s003',85);
$course1->addGrade('s004',80);



$course2 = new course('c002','Science');
$course2->addStudent($student1);
$course2->addStudent($student2);
$course2->addStudent($student3);
$course2->addStudent($student4);

$course2->addGrade('s001',50);
$course2->addGrade('s002',55);
$course2->addGrade('s003',60);
$course2->addGrade('s004',70);




$gradebook = new Gradebook();
$gradebook->addcourse($course1);
$gradebook->addcourse($course2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gradebook</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
<h1>Gradebook</h1>

<table>
    <thead>
    <tr>
        <th>Student</th>
        <th>Course</th>
        <th>Grade</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ( $gradebook->getCourses() as $course ): ?>
        <?php foreach ( $course->getStudents() as $student ): ?>
            <tr>
                <td><?php echo $student->getName(); ?></td>
                <td><?php echo $course->getName(); ?></td>
                <td><?php echo $course->getGrade( $student->getId() ); ?></td>
            </tr>
        <?php endforeach;?>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>












