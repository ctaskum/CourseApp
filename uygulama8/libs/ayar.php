<?php
    $host = "localhost";
    $username = "root";
    $parola = "";
    $database = "coursedb";

    $baglanti = mysqli_connect($host, $username , $parola, $database);
    
    if(mysqli_connect_errno() > 0){
        die("baglanti hatası ".mysqli_connect_errno());
    }
   
?>