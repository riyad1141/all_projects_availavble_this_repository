<?php
session_start();
echo "Hello everyone welcome to our new page";
echo "<br/>";
if (empty($_SESSION['count'])){
    $_SESSION['count'] = 1;
}else{
    $_SESSION['count']++;
}
$_SESSION['name'] = "hider";
$_SESSION['id'] = 123456789;
$_SESSION['time'] = time();
?>
<p>
    Dear sir you have click this page for <?php echo $_SESSION['count']; ?> times
</p>
<p>
    <a href="page2.php?id=<?php echo session_id();?>">click here

    </a>
</p>
