<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="start.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.css">
    <script src="navbar.js"></script>
    
    <title>Document</title>
</head>
<body onload="check()">
<?php 
session_start();
if(!isset($_SESSION['zalogowany']))
{
    header('location:login.php');
    exit();
}
?>
<div id="background">
    

<div id="left">


<div class="menu">
    

        <a href="start.php"><i id="home" class="fa-solid fa-house-chimney"></i></a>
        </div>
        <div class="menu">
        <a href="search.php"><i class="fa-solid fa-magnifying-glass"></a></i>
        </div>
        <div class="menu">
        <a href="playlist.php"><i  class="fa-solid fa-compact-disc"></a></i>
        </div>
        <div class="menu">
        <a href="add-music.php"><i   class="fa-regular fa-square-plus"></a></i>
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
        
           
            <div class="list">
            <h1>Polecane</h1>



<?php

$conn=mysqli_connect('localhost','root','','serwis_muzyka') or die("error");






$sql="SELECT album,autor,tytul,sciezka_okladki,sciezka_muzyki FROM muzyka where tytul like '%' ";
$result=$conn->query($sql);

if($result->num_rows>0){

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

}






        ?>

            
            <h1>Pop</h1>
            <div class="list">
 <?php           
            $sql="SELECT album,autor,tytul,sciezka_okladki,sciezka_muzyki FROM muzyka where gatunek like 'pop' ";
$result=$conn->query($sql);

if($result->num_rows>0){

    while($row=$result->fetch_assoc()){
    echo <<< row2
    

    
                <a href="play.php?autor=$row[autor]&okladka=$row[sciezka_okladki]&tytul=$row[tytul]&muzyka=$row[sciezka_muzyki]&album=$row[album]" >
                <div class="list-element">
                <img src="$row[sciezka_okladki]" alt="">
                <div class="description">

                <h4>$row[autor]</h4>
                <h5>$row[tytul]</h5>
               

                </div>

                
                </div>
                </a>
                
            
            

        

row2;
}

}






        ?>



            </div>
            <h1>Rock</h1>
            <div class="list">
            <?php
            $sql="SELECT album,autor,tytul,sciezka_okladki,sciezka_muzyki FROM muzyka where gatunek like 'rock' ";
$result=$conn->query($sql);

if($result->num_rows>0){

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

}






        ?>
           
            </div>
            <h1>Hip-hop</h1>
            <div class="list">
<?php
            $sql="SELECT album,autor,tytul,sciezka_okladki,sciezka_muzyki FROM muzyka where gatunek like 'Hip-Hop' ";
$result=$conn->query($sql);

if($result->num_rows>0){

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

}






        ?>

            </div>
            <h1>Dance</h1>
        
     
    </div>
    



    
</body>
</html>