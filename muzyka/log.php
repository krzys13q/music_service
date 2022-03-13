<?php
session_start();
if(isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany']==true)){
    header('location:start.php');
}
else
{
   session_unset();
   header('location:login.php');
}
?>