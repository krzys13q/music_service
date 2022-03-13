<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="user.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="navbar.js"></script>
    
    <title>Informacje o Kosncie</title>
</head>
<body onload="check()">
<?php
session_start();
if(!isset($session['zalogowany'])){
    header('location:login.php');
}
?>
<div id="background">
    

    <div id="left">
    
    
    <div class="menu">
    

    <a href="start.php"><i  class="fa-solid fa-house-chimney"></i></a>
    </div>
    <div class="menu">
    <a href="search.php"><i  class="fa-solid fa-magnifying-glass"></a></i>
    </div>
    <div class="menu">
    <a href="playlist.php"><i  class="fa-solid fa-compact-disc"></a></i>
    </div>
    <div class="menu">
    <a href="add-music.php"><i  class="fa-regular fa-square-plus"></a></i>
    </div>

    <div class="menu">
    <a href="user.php">
    <i id="account" class="fa-solid fa-circle-user"></i>
    </a>
    </div>
        
    <div id="logout">
<a href="logout.php">
        <i  class="fa-solid fa-right-to-bracket"></i>
        </a>
        </div>
    </div>
    
        
    
    
        <div id="mid">
        <?php
            
        ?>
        <div id="info-user">
        <h1>Profil </h1><p><?php echo $_SESSION['login']; ?></p>
        <h3>Nazwa</h3><p><?php echo $_SESSION['name']; ?></p>
        
        <h3>Typ konta </h3><p><?php echo $_SESSION['type']; ?></p>

    </div>
         
        </div>
        
    
    
    
        
    </body>
    </html>
</body>
</html>