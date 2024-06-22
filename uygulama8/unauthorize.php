<?php require 'libs/variables.php'; require 'libs/functions.php'; ?>
<?php include "partials/header.php"?>
<?php 

if(!isLoggedin()){
    header('Location: login.php');
}


?>



<?php include 'partials/_navbar.php'?>
<div class="container my-3">
    <div class="row mt-3 ">
        <div class="col">
           <h3>Merhaba ,  <?php echo $_SESSION["username"]; ?></h3>
           <p>Yetkiniz olmayan bir sayfaya girmeye çalışıyorsunuz!</p>
           <a href="logout.php"> Çıkış Yap </a>
        </div>
        
    </div>  
</div>  


<?php include 'partials/_footer.php'?>