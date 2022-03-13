<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Logowanie</title>
</head>
<body>


<div id="background">

    <div id="form">
        <img id="logo" src="logo.png" alt="logo">
    <h1>Login</h1>
    <form action="login.php" method="post">

        <input type="text" name="login" placeholder="login" id="login"><br><br>
        <input type="password" name="password" placeholder="hasło" id="password"><br><br>
        <input type="submit" value="ZALOGUJ">
        <p>Nie masz konta?<a href="registration.php"> Zarejestruj sie</a></p>
    </form>

    </div>
</div>

<?php
session_start();
$conn=mysqli_connect('localhost','root','','serwis_muzyka') or die("error");
if(isset($_POST['login']) && isset($_POST['password'])){
$login=$_POST['login'];
$password=$_POST['password'];

$sql="SELECT id,login,name,password,type FROM `users` where login='$login' and password='$password'";

$result=$conn->query($sql);
if($result->num_rows>0){
    $_SESSION['zalogowany'] = true;
    while($row=$result->fetch_assoc()){
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['type'] = $row['type'];
        header('location:log.php');
    }
    

}
else
{
    echo "<script> alert('Wprowadzono błędne dane');</script>";
}


}
mysqli_close($conn);

?>
    
</body>
</html>