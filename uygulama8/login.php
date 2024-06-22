<?php
include 'libs/ayar.php';
require 'libs/variables.php';
require 'libs/functions.php';

  

    if(isLoggedin()){
        header('Location:index.php');
    }

    $usernameErr = "";
    $passwordErr="";
    $userName = "";  
    $Password="";
    $loginErr="";

    if($_SERVER["REQUEST_METHOD"] =="POST"){

        if (isset($_POST["login"])){
            if(empty($_POST["username"])){
                $usernameErr="username gerekli alandır <br>";
             }else {
                 $userName=safe_html($_POST["username"]);
             }

             if(empty($_POST["password"])){
                $passwordErr="password gerekli alandır <br>";
             }else {
                 $Password=safe_html($_POST["password"]);

             }                 
        }

        if(empty($usernameErr) && empty($passwordErr)){
            $sql = "SELECT id,Username,password,user_type FROM users WHERE username=?";
           if( $stmt = mysqli_prepare($baglanti, $sql)){
                mysqli_stmt_bind_param($stmt,"s",$userName);
                    if(mysqli_stmt_execute($stmt)){
                        mysqli_stmt_store_result($stmt);

                            if(mysqli_stmt_num_rows($stmt)==1){
                                // parola kontrolü
                                mysqli_stmt_bind_result($stmt,$id,$Username,$hash_password,$user_type);
                                if(mysqli_stmt_fetch($stmt)){
                                    if(password_verify($Password,$hash_password)){
                                        // uygulamaya giriş yapıldı
                                        $_SESSION["loggedIn"]=true;
                                        $_SESSION["id"]=$id;
                                        $_SESSION["username"]=$Username;
                                        $_SESSION["user_type"]=$user_type;
                                        header('Location: index.php');
                                    }else{
                                        $passwordErr="parola yanlış";
                                    }
                                }

                                
                            }else{
                                $usernameErr = "username yanlış";
                            }
                    }else{
                        $loginErr="bağlantı hatası";
                    }
           }
           mysqli_stmt_close($stmt);
           mysqli_close($baglanti);

        }



    }
        
?>

<?php include "partials/header.php"?>

<?php include 'partials/_navbar.php'?>

<?php 

if(!empty($loginErr)){
   echo "<div class='alert alert-danger'>".$loginErr."</div>";
}

?>


<div class="container my-3">
<div class="row">
        <div class="col-12">
            <form action="login.php" method="POST">
                
                <div class="mb-3"> 
                    <label for="username">Kullanıcı Adı:</label>
                    <input class = "form-control" type="text" name="username" placeholder ="kullanıcı adı" value="<?php echo $userName;?>" ></input> 
                    <div class="text-danger"><?php echo $usernameErr ?></div>        
                </div>  

                <div class="mb-3">
                    <label for="password">Parola : </label>
                    <input class = "form-control" type="password" name="password" placeholder="şifre" value="<?php echo $Password?>">
                    <div class="text-danger"><?php echo $passwordErr ?></div> 
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