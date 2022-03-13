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
session_start();
if(!isset($session['zalogowany'])){
    header('location:login.php');
}


$autor=$_GET['autor'];
$okladka=$_GET['okladka'];
$tytul=$_GET['tytul'];
$muzyka=$_GET['muzyka'];
$album=$_GET['album'];

?>

    <div id="left">
    
    <div class="menu">
    

        <a href="start.php"><i id="home" class="fa-solid fa-house-chimney"></i></a>
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
            
            <div id="album-list">
                        <h2>Utwory z Albumu: <?php echo $album ?></h2>

                        <?php
                        session_start();
                        $conn=mysqli_connect('localhost','root','','serwis_muzyka') or die("error");
                        
                        $sql="SELECT ROW_number() over(ORDER by tytul asc) as licznik, autor,album,tytul,sciezka_muzyki,sciezka_okladki FROM muzyka WHERE album ='$album'";
                        $result=$conn->query($sql);

                        

                        if($result->num_rows>0){
                            
                        while($row=$result->fetch_assoc()){
                            


                       echo "<div class='list'>";
                        echo "<div class='tracklist-row'><p>".$row['licznik']."</p></div>";
                        echo "<div class='img-list'><img src='".$row['sciezka_okladki']."' alt='".$row['album']."'></div>";
                        echo "<div class='author-tittle'><p><b>".$row['tytul']."</b><br>".$row['autor']."</p></div>";
                        echo "<div class='play'><a href='play.php?autor=$row[autor]&okladka=$row[sciezka_okladki]&tytul=$row[tytul]&muzyka=$row[sciezka_muzyki]&album=$row[album]'><i class='fa-solid fa-circle-play'></i></a></div>";
                        
                        
                           
                        echo "</div>";
               

                        }
                      
                    }
                    
                    mysqli_close($conn);
                        ?>
                


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