<?php
    const host = "localhost";
    const username = "root";
    const password = "";
    const database = "coursedb";

    $baglanti = mysqli_connect(host, username , password, database);

    if(mysqli_connect_errno() > 0){
        die("baglanti hatası ".mysqli_connect_errno());
    }
?>