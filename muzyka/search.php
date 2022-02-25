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
            <div id="search_bar">
                <div id="search_bar_contener">
        <form action="search.php" class="search-bar" method="post">
	<input type="search" placeholder="..." name="search" pattern=".*\S.*" required>
	<button class="fa-solid fa-magnifying-glass" type="submit">
		
	</button>
    
</form>
</div>
</div>
<div class="list">




<?php

$conn=mysqli_connect('localhost','root','','serwis_muzyka') or die("error");

if(isset($_POST['search'])){
$search=$_POST['search'];




$sql="SELECT album,autor,tytul FROM muzyka where tytul like '%$search%' or album like '%$search%' or autor like '%$search%'";
$result=$conn->query($sql);

if($result->num_rows>0){

    while($row=$result->fetch_assoc()){
    echo <<< row
    

    
            
                <div class="list-element">
                <img src="cover/walker.jpg" alt="">
                <div class="description">

                <h4>$row[autor]</h4>
                <h5>$row[tytul]</h5>

                </div>

                
                </div>
                
                
            
            

        

row;
}

}
}





        ?>

</div>
    
</body>
</html>