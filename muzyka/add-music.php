<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="add-music.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="navbar.js"></script>
    <title>Wyszukaj</title>
    
</head>
<body onload="check()">
<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
    header('location:login.php');
}
?>
<div id="background">
    

    <div id="left">
    <div class="menu">
    

    <a href="start.php"><i class="fa-solid fa-house-chimney"></i></a>
    </div>
    <div class="menu">
    <a href="search.php"><i  class="fa-solid fa-magnifying-glass"></a></i>
    </div>
    <div class="menu">
    <a href="playlist.php"><i  class="fa-solid fa-compact-disc"></a></i>
    </div>
    <div class="menu">
    <a href="add-music.php"><i id="add-music"  class="fa-regular fa-square-plus"></a></i>
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
            
            <div id="form-contener">
            
            <form action="" method="post" enctype="multipart/form-data">
            <h2>Dodaj utwór</h2>
                
               <input type="text" placeholder="Autor" name="author" id="author"><br>
                 
               <input type="text" placeholder="Tytuł" name="tittle" id="tittle"><br>
                
               <input type="text" placeholder="Album" name="album" id="album"><br>

               <input type="text" placeholder="Gatunek" name="gatunek" id="gatunek"><br>
             
               <input type="number" placeholder="Rok " name="year" id="year" value="2022"><br> 
               Okładka <br>
               <input type="file"  name="cover" id="cover"><br>
               Plik mp3 <br>
               <input type="file" name="music" id="music"><br>
               <input type="submit" value="Potwierdź">
            </form>
            </div>
            <?php
                
                $conn = mysqli_connect('localhost','root','','serwis_muzyka');
                if(isset($_POST['author']) && isset($_POST['tittle']) && isset($_POST['album']) && isset($_POST['year'])){
                    $author = $_POST['author'];
                    $tittle = $_POST['tittle'];
                    $album = $_POST['album'];
                    $year = $_POST['year'];

                    $cover_file_name = $_FILES['cover'] ['name'];
                    $cover_file_tmp = $_FILES['cover'] ['tmp_name'];
                    $pathc = $_SERVER['DOCUMENT_ROOT'] . '/gitHub/music_service/muzyka/cover'; //jak nie działa to zmien sciezke 
                    move_uploaded_file($cover_file_tmp, $pathc."/".$cover_file_name);
                    $dbpathc = "./cover/".$cover_file_name;

                    $song_file_name = $_FILES['music'] ['name'];
                    $song_file_tmp = $_FILES['music'] ['tmp_name'];
                    $paths = $_SERVER['DOCUMENT_ROOT'] . '/gitHub/music_service/muzyka/songs'; //jak nie działa to zmien sciezke 
                    move_uploaded_file($song_file_tmp, $paths."/".$song_file_name);
                    $dbpaths = "./songs/".$song_file_name;
                    $sql = "insert into `muzyka` (`autor`, `album`, `tytul`, `rok`, `sciezka_muzyki`, `sciezka_okladki`) values ('$author', '$album', '$tittle', '$year', '$dbpaths', '$dbpathc')";
                    $result = $conn -> query($sql);
                } 
            
                
                    
                       
        
                   

                
            ?>
        </div>
    
</body>
</html>
