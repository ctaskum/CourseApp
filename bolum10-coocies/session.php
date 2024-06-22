<?php 

session_start(); // php de sessionlar otomatik olarak kapalı gelir. Başlatmak için bu mthod kullanılır.

// $_SESSION["username"] = "ctaskum";
// $_SESSION["password"] = "12345";

if(isset($_SESSION["username"])){
    echo $_SESSION["username"];
}else {
    echo "username bilgisi yok";
}
unset($_SESSION["username"]);
print_r($_SESSION);

session_unset(); // bütün sessionları siler.
$_SESSION = []; // diğer session silme yöntemi.






?>