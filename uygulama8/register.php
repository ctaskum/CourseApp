<?php require 'libs/variables.php' ?>
<?php require 'libs/functions.php' ?>

<?php include "partials/header.php"?>

<?php include 'partials/_navbar.php'?>

<?php
     $usernameErr = "";
     $emailErr= "";
     $passwordErr="";
     $repasswordErr = "";
     $cityErr = "";
     $hobbiesErr = "";

     $username = "";
     $email= "";
     $password="";
     $repassword = "";
     $city = "";
     $hobbies = [];

     if($_SERVER["REQUEST_METHOD"]=="POST")   // register sayfasında kayıt ol'a tıkladıktan sonra post requesti döner    
     {                                          
        if(empty($_POST["username"])){
          $usernameErr ="username gerekli alandır <br>";
        }elseif(strlen($_POST["username"])<5 or strlen($_POST["username"])>20){
            $usernameErr= "username 5-20 karakter aralığında olmalıdır.";
        }elseif(!preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $_POST["username"])){
            $usernameErr= "username sadece rakam,harf ve altçizgi içermelidir.";
        }
        else {
            $username=safe_html($_POST["username"]);
        }
        
        if(empty($_POST["email"])){
            $emailErr= "email gerekli alandır <br>";
        }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $emailErr= "hatalı email <br>";
        }
        else {
            $email=safe_html($_POST["email"]);
        }
      
        if(empty($_POST["password"])){
           $passwordErr="password gerekli alandır <br>";
        }else {
            $password=safe_html($_POST["password"]);
        }
        
        if($_POST["repassword"]!=$_POST["password"]){
           $repasswordErr = "parolalar eşleşmiyor! <br>";
        }else {
            $repassword=safe_html($_POST["repassword"]);
        }
        
    }

?>






<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="register.php" method="POST">
                
                <div class="mb-3"> 
                    <label for="username">Kullanıcı Adı :</label>
                    <input class = "form-control" type="text" name="username" placeholder ="kullanıcı adı" value="<?php echo $username;?>" ></input> 
                    <div class="text-danger"><?php echo $usernameErr ?></div>          
                </div>  

                <div class="mb-3">
                    <label for="email">E mail:</label>
                    <input class = "form-control" type="email" name="email" placeholder="email" value="<?php echo $email;?>">
                    <div class="text-danger"><?php echo $emailErr ?></div> 
                </div>
                <div class="mb-3">
                    <label for="password">Parola : </label>
                    <input class = "form-control" type="password" name="password" placeholder="şifre" value="<?php echo $password;?>">
                    <div class="text-danger"><?php echo $passwordErr ?></div> 
                </div>
                <div class="mb-3">
                    <label for="repassword">Parola Tekrar : </label>
                    <input class = "form-control" type="password" name="repassword" placeholder="şifre tekrar" >
                    <div class="text-danger"><?php echo $repasswordErr ?></div> 
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </div>
             
            </form>
        </div>
         
    </div>  
</div>  


<?php include 'partials/_footer.php'?>