<?php
session_start();  
echo "<h2> REFRESH THE PAGE </h2><br/>";
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+ 1;
else
    $_SESSION['views'] = 1;
echo  "page views = ". $_SESSION['views']; 
?>
