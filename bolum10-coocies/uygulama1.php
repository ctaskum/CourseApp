<?php 

setcookie("username","cigdem", time() +  (60 * 60 * 24 ));

if(isset($_COOKIE["username"])){
    echo $_COOKIE["username"];
}else{
    echo "cookie tanımlanmamış";
}

setcookie("username","gokhan",time() + (60 * 60 * 24)); // güncelleme

if(isset($_COOKIE["username"])){
    echo $_COOKIE["username"];
}else{
    echo "cookie tanımlanmamış";
}

setcookie("username","gokhan", time() - (3600));// silme

?>