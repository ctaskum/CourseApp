<?php include 'libs/ayar.php'; ?>
<?php require 'libs/variables.php' ?>
<?php require 'libs/functions.php' ?>

<?php include "partials/header.php"?>

<?php include 'partials/_navbar.php'?>

<?php
     $usernameErr = "";
     $emailErr= "";
     $passwordErr="";
     $repasswordErr = "";
   

     $userName = "";
     $email= "";
     $password="";
     $repassword = "";
     

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

            $sql = "SELECT id FROM users WHERE Username=?";

            if($stmt = mysqli_prepare($baglanti,$sql)){
                $param_username=trim(safe_html($_POST["username"]));
                mysqli_stmt_bind_param($stmt,"s",$param_username);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt); // sonucu saklayalım

                    if(mysqli_stmt_num_rows($stmt)==1){
                         $usernameErr= "kullanıcı adı alınmış";
                    }else{
                        $userName=safe_html($_POST["username"]);
                    }
                }else{
                    echo "hata";
                }
            }
        }
        
        if(empty($_POST["email"])){
            $emailErr= "email gerekli alandır <br>";
        }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $emailErr= "hatalı email <br>";
        }
        else {
            $sql = "SELECT id FROM users WHERE mail=?";

            if($stmt = mysqli_prepare($baglanti,$sql)){
                $param_mail=trim(safe_html($_POST["email"]));
                mysqli_stmt_bind_param($stmt,"s",$param_mail);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt); // sonucu saklayalım

                    if(mysqli_stmt_num_rows($stmt)==1){
                         $emailErr= "bu e posta ile daha önce hesap oluşturulmuştur!";
                    }else{
                        $email=safe_html($_POST["email"]);
                    }
                }else{
                    echo "hata";
                }
            }
           
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

        if(empty($usernameErr) && empty($emailErr) && empty($passwordErr) && empty($repasswordErr)){

            

            $sql = "INSERT INTO users(Username,mail,password) VALUES (?,?,?)";

            if($stmt = mysqli_prepare($baglanti, $sql)){
                $param_username = $userName;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt,"sss", $param_username, $param_email, $param_password);

                if(mysqli_stmt_execute($stmt)){
                    header("Location: login.php");
                }else {
                    echo mysqli_error($baglanti);
                    echo "<br>";
                    echo "baglantı hatası";
                }

            }


        }
        
    }

?>






<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="register.php" method="POST">
                
                <div class="mb-3"> 
                    <label for="username">Kullanıcı Adı :</label>
                    <input class = "form-control" type="text" name="username" placeholder ="kullanıcı adı" value="<?php echo $userName;?>" ></input> 
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