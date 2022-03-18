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
if(!isset($_SESSION['zalogowany'])){
    header('location:login.php');
}
?>
<div id="background">
    

    <div id="left">
    
    
    
    <div class="menu">
    

    <a title="strona główna" href="start.php"><i  class="fa-solid fa-house-chimney"></i></a>
    </div>
    <div class="menu">
    <a title="wyszukaj" href="search.php"><i  class="fa-solid fa-magnifying-glass"></a></i>
    </div>
    <div class="menu">
    <a title="playlisty" href="playlist.php"><i id="playlist"  class="fa-solid fa-compact-disc"></a></i>
    </div>
    <div class="menu">
    <a title="dodaj muzykę" href="add-music.php"><i  class="fa-regular fa-square-plus"></a></i>
    </div>

    <div class="menu">
    <a title="profil użytkownika" href="user.php">
    <i  class="fa-solid fa-circle-user"></i>
    </a>
    </div>

    
 


<div id="logout">
<a title="wyloguj" href="logout.php">
    <i  class="fa-solid fa-right-to-bracket"></i>
    </a>
    </div>
    </div>
    
        
    
    
        <div id="mid">
            
        <div id="header">
            <p>Stwórz swoją wymarzoną Playlistę</p>
        </div>
         <div id="search">
             <div id="add-name-playlit"> </div>
             <div id="h1"> <h1>Wyszukaj utwór </h1></div>
           
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
              

                <?php
$conn=mysqli_connect('localhost','root','','serwis_muzyka') or die("error");

if(isset($_POST['search'])){
$search=$_POST['search'];
$sql="SELECT ROW_number() over(ORDER by tytul asc) as licznik, album,autor,tytul,sciezka_okladki,sciezka_muzyki FROM muzyka where tytul like '%$search%'  or autor like '%$search%' ";

$result=$conn->query($sql);

if($result->num_rows>0){
    
    while($row=$result->fetch_assoc()){
    echo <<< row
    

                
                
                <div class="list">
                <div class='tracklist-row'><p>$row[licznik]</p></div>
                <div class='img-list'><img src="$row[sciezka_okladki]" alt=""></div>
                <div class='author-tittle'>

                <p><b>$row[tytul]</b><br>$row[autor]
                </p>


                </div>
                <div class="play"><a><i class="fa-solid fa-circle-plus"></i></a></div>

                
                </div>
                
                
            
            

        
 
row;
}


}else
{
    echo "<script> alert('Brak wyników wyszukiwania');</script>";
}
}







?>
            </div>
         </div>
         <div id="list-add">
             
<?php



mysqli_close($conn);
?>
         </div>


        </div>
    
</body>
</html>