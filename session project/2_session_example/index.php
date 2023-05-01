<?php
session_start();
if (empty($_SESSION['count'])){
   $_SESSION['count'] =1;
}else{
    $_SESSION['count']++;
}
?>

<p>
    hello visitor you have seen the page <?php echo $_SESSION['count']; ?> times
</p>

<p>
    To continue, <a href="nextpage.php?sid=<?php echo htmlspecialchars( session_id()); ?>">click
        here</a>.
</p>
