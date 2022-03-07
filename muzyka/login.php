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
    <h1>Login</h1>
    <form action="start.php" method="post">

        <input type="text" name="login" placeholder="haslo" id="login"><br><br>
        <input type="password" name="password" placeholder="login" id="password"><br><br>
        <input type="submit" value="ZALOGUJ">
        <p>Nie masz konta?<a href="registration.php"> Zarejestruj sie</a></p>
    </form>

    </div>
</div>
    
</body>
</html>