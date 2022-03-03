<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="play.css">
    <link rel="stylesheet" href="css/all.css">
    
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="navbar.js"></script>
    <title>Odtwarzacz muzyki</title>
    
    
</head>
<body>
    
<div id="background">
<?php

$autor=$_GET['autor'];
$okladka=$_GET['okladka'];
$tytul=$_GET['tytul'];
$muzyka=$_GET['muzyka'];

?>

    <div id="left">
    
    
    
        
    <table>
    <tr>
        <td >
        <a href="start.php"><i id="home" class="fa-solid fa-house-chimney"></i></a> </td>
    </tr>
    <tr>
        <td >
        <a href="search.php"><i id="search" class="fa-solid fa-magnifying-glass"></a></i>
        </td>
    </tr>
    <tr>
        <td >
        <a href="playlist.php"><i id="playlist" class="fa-solid fa-compact-disc"></a></i>
        </td>
    </tr>
    <tr>
        <td >
        <a href="add-playlist.php"><i id="add-playlist" class="fa-regular fa-square-plus"></a></i>
        </td>
    </tr>
    <tr>
        <td >
        <a href="user.php">
        <i id="account" class="fa-solid fa-circle-user"></i>
        </a>
        </td>
    </tr>
    </table>
    
    </div>
    
        
    
    
        <div id="mid">
            
            <div id="album-list">
                        <h2>Utwory z Albumu:World of walker</h2>
                        <div class="list">
                        <img src="./cover/walker.jpg" alt="walker"> piosenka1
                        </div>
                        <div class="list">
                        <img src="./cover/walker.jpg" alt="walker"> piosenka1
                        </div>
                        <div class="list">
                        <img src="./cover/walker.jpg" alt="walker"> piosenka1
                        </div>
                        <div class="list">
                        <img src="./cover/walker.jpg" alt="walker"> piosenka1
                        </div>
                        <div class="list">
                        <img src="./cover/walker.jpg" alt="walker"> piosenka1
                        </div>
                        <div class="list">
                        <img src="./cover/walker.jpg" alt="walker"> piosenka1
                        </div>
                        <div class="list">
                        <img src="./cover/walker.jpg" alt="walker"> piosenka1
                        </div>
                        <div class="list">
                        <img src="./cover/walker.jpg" alt="walker"> piosenka1
                        </div>
                        <div class="list">
                        <img src="./cover/walker.jpg" alt="walker"> piosenka1
                        </div>
                


            </div>
       <div id="player">
        <div id="info">
            <div class="fota">
                <div class="fota-box">
                <img src="<?php echo $okladka ?>" alt="fota">
                </div>
            </div>
            
        
            
            <div id="title">
                <h1><?php echo $tytul ?></h1>
                <h2><?php echo $autor ?></h2>
                
            </div>
        </div>
        <div id="playbar">
            <div class="audio">
        <audio controls>

  <source src="<?php echo $muzyka ?>" type="">
 
  </div>
  

</audio>
        </div>
                
        </div>
       </div>
         
        </div>

    
</body>
</html>