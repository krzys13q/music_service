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
                <p>lista</p>

                <?php
$conn=mysqli_connect('localhost','root','','serwis_muzyka') or die("error");

if(isset($_POST['search'])){
$search=$_POST['search'];
$sql="SELECT album,autor,tytul,sciezka_okladki,sciezka_muzyki FROM muzyka where tytul like '%$search%'  or autor like '%$search%' ";

$result=$conn->query($sql);

if($result->num_rows>0){
    echo "<h1>Utwory</h1>";
    while($row=$result->fetch_assoc()){
    echo <<< row
    

                
                <a href="play.php?autor=$row[autor]&okladka=$row[sciezka_okladki]&tytul=$row[tytul]&muzyka=$row[sciezka_muzyki]&album=$row[album]" >
                <div class="list-element">
                <img src="$row[sciezka_okladki]" alt="">
                <div class="description">

                <h4>$row[autor]</h4>
                <h5>$row[tytul]</h5>
               

                </div>

                
                </div>
                </a>
                
            
            

        
 
row;
}


}else
{
    echo "<script> alert('Brak wyników wyszukiwania');</script>";
}
}





mysqli_close($conn);

?>
            </div>
         </div>
         <div id="list">
             

         </div>


        </div>
    
</body>
</html>