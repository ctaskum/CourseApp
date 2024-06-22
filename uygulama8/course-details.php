<?php 
    require 'libs/variables.php' ;
    require 'libs/functions.php';   
    session_start();

    if(!isset($_GET["id"]) or !is_numeric($_GET["id"])){
        header('Location: index.php');
    }else{
        $sonuc = getCourseById($_GET["id"]);
        $course = mysqli_fetch_assoc($sonuc);
    }
?>



<?php include "partials/header.php"; ?>
<?php include 'partials/_navbar.php'; ?>
<div class="container mt-5 mx-auto">
    <div class="row">
        <div class="col-6 mx-auto">        
            <div class="card mb-3" >
                <img src="img/<?php echo $course["resim"]; ?>" class="card-img-top text-center" >
                <div class="card-body">
                    <h5 class="card-title"><?php echo $course["baslik"]; ?></h5>
                    <p class="card-text"><?php echo $course["altbaslik"]; ?></p>
                    <p class="card-text"><small class="text-body-secondary"><?php echo $course["yayinTarihi"]; ?> tarihinde yayınlandı.</small></p>
                </div>
            </div>
    
        </div>
    </div>
</div>




<?php include 'partials/_footer.php'?>