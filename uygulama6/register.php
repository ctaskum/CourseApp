<?php require 'libs/variables.php' ?>

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
        }else {
            $username=safe_html($_POST["username"]);
        }
        
        if(empty($_POST["email"])){
            $emailErr= "email gerekli alandır <br>";
        }else {
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
        
        
        if($_POST["city"]== -1){
            $cityErr = "şehir seçmelisiniz! <br>";
        }else {
            $city=$_POST["city"];
        }

        if(!isset($_POST["hobbies"])){
            $hobbiesErr = "Hobilerinizi seçmediniz";
        }else {
            $hobbies=$_POST["hobbies"];
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
                    <label for="city">Şehir:</label>
                    <select name="city" class ="form-select"  >
                        <option value="-1" selected>Şehir Seçiniz</option>
                        <?php foreach ($sehirler as $plaka => $sehir): ?>
                            <option value="<?php echo $plaka; ?>"  
                                <?php echo ($city == $plaka)?' selected':'';?>>
                                <?php echo $sehir;?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="text-danger"><?php echo $cityErr; ?></div> 
                </div>
                <div class="mb-3">
                    <label for="hobbies">Hobiler</label>

                    <?php foreach ($hobiler as $id => $hobi):?>
                    <div class="form-check">

                        <input type="checkbox" name="hobbies[]" 
                        value ="<?php echo $hobi; ?>" 
                        id="hobbies_<?php echo $id;?>"
                        <?php  if(in_array($hobi,$hobbies)) echo 'checked'?>>

                        <label for="hobbies_<?php echo $id;?>" class ="form-check-label"> <?php echo $hobi; ?> </label>

                    </div>
                    <?php endforeach; ?>
                    <div class="text-danger"><?php echo $hobbiesErr; ?></div> 

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </div>
             
            </form>
        </div>
         
    </div>  
</div>  


<?php include 'partials/_footer.php'?>