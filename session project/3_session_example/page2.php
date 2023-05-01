<?php
session_start();
echo "Dear sir welcome to our new page <br/>";
echo $_SESSION['name'];
echo "<br/>";
echo $_SESSION['id'];
echo "<br/>";
echo date( 'Y m d H:i:s', $_SESSION['time'] );

echo "<br/> <a href='index.php'> HOme </a>";
echo "<br/>";
echo $_GET['id'];