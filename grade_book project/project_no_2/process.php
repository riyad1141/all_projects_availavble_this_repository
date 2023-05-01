<?php
include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'Triangle.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $shape = $_REQUEST['shape'];
    $num1 = $_REQUEST['measurement'];
    $num2 = $_REQUEST['measurement2'];
    switch ($shape){
        case 'circle':
            $circle = new circle('Circle',$num1);
            $area = $circle->get_area();
            break;
        case 'rectangle':
            $rectangle = new Rectangle('Rectangle',$num1,$num2);
            $area = $rectangle->get_area();
            break;
        case 'triangle':
            $triangle = new Triangle('Triangle',$num1,$num2);
            $area = $triangle->get_area();
            break;
        default:
            $area = "You have type invalid shape sorry to say";
            break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Project</title>
</head>
<body>
<?php if ( isset( $area ) ): ?>
    <h1><?php echo $shape; ?></h1>
    <p>Area: <?php echo $area; ?></p>
<?php endif;?>
</body>
</html>
