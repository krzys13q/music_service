<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="search.css">
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
            <div id="form-contener">
            <form action="">
                autor
               <input type="text" name="author" id="author"><br>
               tutuł
               <input type="text" name="tittle" id="tittle"><br>
               album
               <input type="text" name="album" id="album"><br>
                okładka
               <input type="file" name="cover" id="cover"><br>
               plik mp3
               <input type="file" name="music" id="music"><br>
               
               <input type="submit" value="dodaj">
               
            </form>
            </div>
        
         
        </div>
    
</body>
</html>