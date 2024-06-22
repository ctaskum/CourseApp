<?php
require 'libs/variables.php';
require 'libs/functions.php';

    session_start();

    if($_SERVER["REQUEST_METHOD"] =="POST"){

        if (isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            if( $username == db_user["db_username"] && $password == db_user["db_parola"]){
                setcookie("auth[username]",$username,time() + (60*60*24));
                setcookie("auth[name]", db_user["name"] , time() + (60*60*24));
                $_SESSION["message"] = "uygulamaya ".$username." ile giriş yapıldı.";
                header("Location: index.php");
            }else{
                echo "<div class = 'alert alert-danger mb-0 text-center'> Yanlış Kullanıcı adı ya da şifre</div>";
            }
        }
    }
        
?>

<?php include "partials/header.php"?>

<?php include 'partials/_navbar.php'?>
<div class="container my-3">
<div class="row">
        <div class="col-12">
            <form action="login.php" method="POST">
                
                <div class="mb-3"> 
                    <label for="username">Kullanıcı Adı :</label>
                    <input class = "form-control" type="text" name="username" placeholder ="kullanıcı adı"  ></input> 
                             
                </div>  

                <div class="mb-3">
                    <label for="password">Parola : </label>
                    <input class = "form-control" type="password" name="password" placeholder="şifre">
                    
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="login">Giriş Yap</button>
                </div>
             
            </form>
        </div>
         
    </div>  
</div>    
</div>  


<?php include 'partials/_footer.php'?>