<?php
$conn = mysqli_connect('localhost','root','','serwis muzyka');
$liczba = 1;
if(isset($_POST['next'])){
$next = $_POST['next'];


$sql = 'SELECT `autor`,`tytul`,`sciezka` FROM `muzyka`where `id` =1';

$result= $conn->query($sql);

if($result->num_rows>0){


    while($row=$result->fetch_array()){
        
        echo $row[0]."<br>";
        echo $row[1]."<br>";
        
        echo "<audio controls>";
        echo "<br><source src='".$row[2]."' type='audio/mpeg'>";
        echo "</audio>";

        

    }
}



}
else if(isset($_POST['prev'])){

    $prev = $_POST['prev'];
    $sql = 'SELECT `autor`,`tytul`,`sciezka` FROM `muzyka`where `id` ='.$liczba +$prev;

$result= $conn->query($sql);

if($result->num_rows>0){


    while($row=$result->fetch_array()){
        
        echo $row[0]."<br>";
        echo $row[1]."<br>";
        
        echo "<audio controls>";
        echo "<br><source src='".$row[2]."' type='audio/mpeg'>";
        echo "</audio>";

        

    }
}


}


?>