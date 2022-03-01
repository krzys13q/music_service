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
        <div id="mid">
            <h1>Dodaj utwór</h1>
            <div id="form-contener">
            <form action="" method="post" enctype="multipart/form-data">
                Autor <br>
               <input type="text" name="author" id="author"><br>
               Tytuł   <br>
               <input type="text" name="tittle" id="tittle"><br>
               Album <br>
               <input type="text" name="album" id="album"><br>
               Rok <br>
               <input type="number" name="year" id="year" value="2022"><br> 
               Okładka <br>
               <input type="file" name="cover" id="cover"><br>
               Plik mp3 <br>
               <input type="file" name="music" id="music"><br>
               <input type="submit" value="Potwierdź">
            </form>
            </div>
            <?php
                $conn = mysqli_connect('localhost','root','','serwis muzyka');
                if(isset($_POST['author']) && isset($_POST['tittle']) && isset($_POST['album']) && isset($_POST['year'])){
                    $author = $_POST['author'];
                    $tittle = $_POST['tittle'];
                    $album = $_POST['album'];
                    $year = $_POST['year'];

                    $cover_file_name = $_FILES['cover'] ['name'];
                    $cover_file_tmp = $_FILES['cover'] ['tmp_name'];
                    $pathc = $_SERVER['DOCUMENT_ROOT'] . '/muzyka/cover';
                    move_uploaded_file($cover_file_tmp, $pathc."/".$cover_file_name);
                    $dbpathc = "./cover/".$cover_file_name;

                    $song_file_name = $_FILES['music'] ['name'];
                    $song_file_tmp = $_FILES['music'] ['tmp_name'];
                    $paths = $_SERVER['DOCUMENT_ROOT'] . '/muzyka/songs';
                    move_uploaded_file($song_file_tmp, $paths."/".$song_file_name);
                    $dbpaths = "./songs/".$song_file_name;
                    $sql = "insert into `muzyka` (`autor`, `album`, `tytul`, `rok`, `sciezka_muzyki`, `sciezka_okladki`) values ('$author', '$album', '$tittle', '$year', '$dbpaths', '$dbpathc')";
                    $result = $conn -> query($sql);
                } 
            
                
                    
                       
        
                   

                
            ?>
        </div>
    
</body>
</html>
