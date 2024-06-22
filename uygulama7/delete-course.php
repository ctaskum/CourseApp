<?php 
require 'libs/functions.php';
require 'libs/variables.php';
?>
<?php
if(empty($_GET["id"])){
    header("Location:admin-courses.php");
}
session_start();
$id=$_GET["id"];
$sonuc = getCourseById($id);
$row = mysqli_fetch_assoc($sonuc);
$resim = $row["resim"];
$baslik = $row["baslik"];
$altbaslik = $row["altbaslik"];
$deleteErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $result = deleteCourse($id);
    if($result){
        $_SESSION["message"]=$baslik." isimli kurs silindi";
        $_SESSION["type"] = "danger";
        header("Location:admin-courses.php");
    }else{
        $deleteErr=$baslik." isimli kurs silinemedi";
    }

}




?>



<?php 
include 'partials/header.php';
include 'partials/_navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="card card-body mx-3">
            <div class="col">
                <div class="form">
                    <form method="post">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="img/<?php echo $resim; ?>" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $baslik;?></h5>
                            <p class="card-text"><?php echo $altbaslik; ?></p>
                        </div>
                        <div>
                            <p class="text-danger"><?php echo $deleteErr;?></p>
                        </div>
                        <div class="card-body mx-auto">
                            <a class="btn btn-warning" href="admin-courses.php" role="button">Vazgeç</a>
                            <button class="btn btn-danger" style="width:70px;" type="submit" id="deleteButton">Sil</button>

                        </div>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>




