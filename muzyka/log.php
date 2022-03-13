<?php
session_start();
if(isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany']==true)){
    header('location:start.php');
}
else
{
    header('location:login.php');
}
?>