<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    
    <title>Rejestracja</title>
</head>
<body>
<div id="background">
<div id="left">
        
        <table>
        <tr>
            <td >
            <a href="start.php"><i  class="fa-solid fa-house-chimney"></i></a> </td>
        </tr>
        <tr>
            <td >
            <a href="search.php"><i  class="fa-solid fa-magnifying-glass"></a></i>
            </td>
        </tr>
        <tr>
            <td >
            <a href="playlist.php"><i  class="fa-solid fa-compact-disc"></a></i>
            </td>
        </tr>
        <tr>
            <td >
            <a href="add-music.php"><i id="add-music" class="fa-regular fa-square-plus"></a></i>
            </td>
        </tr>
        <tr>
            <td >
            <a href="user.php">
            <i  class="fa-solid fa-circle-user"></i>
            </a>
            </td>
        </tr>
        </table>
        </div>
    <div id="form">
    <img id="logo" src="logo.png" alt="logo">
    <h1>Rejestracja</h1>
    <form  method="post">
    <input type="text" name="name" placeholder="nazwa" id="name"><br><br>
    <input type="text" name="login" placeholder="login"id="login"><br><br>

    <input type="password" name="password" placeholder="haslo"id="password"><br>
    <h4>Typ konta </h4>
    <div id="checkbox1">
    <input type="radio" name="type" value="2" id="type"><label for="2">Artysta</label> <br>
</div><div id="checkbox1">
    <input type="radio" name="type" value="1" id="type"><label for="1">Słuchacz</label><br><br>
    </div>
    <a href="login.php"><input type="submit" value="Zarejestruj"></a>

    <p>Masz konto?<a href="login.php"> Zaloguj sie</a></p>

    </form>
    <?php
$conn=mysqli_connect('localhost','root','','serwis_muzyka') or die("error");

if(isset($_POST['name'])&&isset($_POST['login'])&&isset($_POST['password'])&&isset($_POST['type'])){
$name=$_POST['name'];
$login=$_POST['login'];
$password=$_POST['password'];
$type=$_POST['type'];



$sql="INSERT INTO `users` (`id`, `login`, `name`, `password`, `type`) VALUES (null, '$login', '$name', '$password', '$type')";

if($result=$conn->query($sql)===TRUE){
    header("location:login.php");

}
else{
    echo "error";
}
}

?>
    </div>
</div>




    
</body>
</html>