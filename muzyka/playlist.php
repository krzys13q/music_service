<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="playlist.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="navbar.js"></script>
    <title>Wyszukaj</title>
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
    <a href="playlist.php"><i id="playlist"  class="fa-solid fa-compact-disc"></a></i>
    </div>
    <div class="menu">
    <a href="add-music.php"><i  class="fa-regular fa-square-plus"></a></i>
    </div>

    <div class="menu">
    <a href="user.php">
    <i  class="fa-solid fa-circle-user"></i>
    </a>
    </div>

    
 


<div id="logout">
<a href="logout.php">
    <i  class="fa-solid fa-right-to-bracket"></i>
    </a>
    </div>
    </div>
    
        
    
    
        <div id="mid">
            
        <div id="header">
            <p>Stwórz swoją wymarzoną Playlistę</p>
        </div>
         <div id="search">
             <div id="searchbar">
         <form action="playlist.php" class="search-bar" method="post">
	    <input type="search" placeholder="..." name="search" pattern=".*\S.*" required>
	    <button class="fa-solid fa-magnifying-glass" type="submit">
		
	    </button>
        </form>
        </div>
        <?php
           
        ?>
            <div id="search-list">
                sdsd
            </div>
         </div>
         <div id="list">
             

         </div>


        </div>
    
</body>
</html>