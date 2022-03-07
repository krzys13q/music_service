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