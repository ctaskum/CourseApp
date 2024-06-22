<?php require 'libs/variables.php'; 
require 'libs/functions.php'; ?>

<?php
session_start();
$id = $_GET["id"];
$sonuc = getCourseById($id);
$SelectedCourse = mysqli_fetch_assoc($sonuc);
$courseNameErr =$courseName= $AltbaslikErr= $Altbaslik=$resim=$resimErr="";
$categoryErr="";
$categoryId=0;
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if($_POST["category"]==0){
        $categoryErr="Lütfen bir kategori seçiniz!";
    }else{
        $categoryId=$_POST["category"];
    }

    if(empty($_POST["CourseName"] )){
        $courseNameErr = "kurs adı adı boş bırakılamaz";
    }else{
        $courseName =$_POST["CourseName"];
    }
    if(empty($_POST["AltBaslik"])){
        $AltbaslikErr = "Alt başlık boş bırakılamaz";
    }else{
        $Altbaslik =$_POST["AltBaslik"];
    }
    if(empty( $_FILES["imgFile"]["name"])){
        $resimErr = "resim yükleyiniz";
    }else{
        uploadImg($_FILES["imgFile"]);
        $resim= $_FILES["imgFile"]["name"];
    }
    if(empty($courseNameErr) && empty($AltbaslikErr) && empty($resimErr)  && empty($categoryErr)){
        editCourse($id,$courseName,$Altbaslik,$resim,$categoryId);
        $_SESSION["message"]=$courseName." isimli kurs güncellendi.";
        $_SESSION["type"]="success";
        header('Location: admin-courses.php');
    }
}  
?>



<?php include 'partials/header.php'?>

<?php include 'partials/_navbar.php'?>
<div class="container my-3">
    <div class="row mt-3 ">
        <div class="card card-body">
            <div class="col">
                <form  method="POST" enctype="multipart/form-data" >
                    <div class="mb-3">                  
                        <label for="CourseName" > Kurs Adı </label>
                        <input type="text" name="CourseName" id="CourseName" class="form-control" value="<?php echo $SelectedCourse["baslik"]; ?>">
                        <div class="text-danger"><?php echo $courseNameErr; ?></div> 
                    </div>
                    <div class="mb-3">
                        <label for="AltBaslik" > Alt Başlık </label>
                        <input type="text" name="AltBaslik" id="AltBaslik" class="form-control" value="<?php echo $SelectedCourse["altbaslik"]; ?>">
                        <div class="text-danger"><?php echo $AltbaslikErr; ?></div> 
                    </div>
                    <div><p>Resim Belgenizi Yükleyin:</p></div>
                    <div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="imgFile" name = "imgFile">
                            <button  class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Resmi Yükle</button>
                            <div class="text-danger"><?php echo $resimErr; ?></div> 
                        </div>
                        <img src="img/<?php echo $SelectedCourse["resim"]; ?>" style="width:50px" class="mb-3">
                    </div>
                    <div>
                        <div class= "mt-2"><p>Kursunuz için bir kategori belirleyin:</p></div>
                        <select class="form-select mb-3" name ="category" id="category" aria-label="Default select example" >
                            <option value="0" selected>Seçiniz</option>
                            <?php  $sonuc=getCategories(); while($row = mysqli_fetch_array($sonuc)):?>
                            <option value="<?php echo  $row["id"]; ?>"><?php echo $row["kategori_adi"]; ?></option>
                            <?php endwhile; ?>                            
                        </select>
                        <div class="text-danger"><?php echo $categoryErr; ?></div> 
                        <script type="text/javascript">
                            document.getElementById("category").value= "<?php echo $SelectedCourse["kategori_id"]; ?>"
                        </script>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" id ="categoryCreate">Kaydet</button>
                    
                </form>
            </div>
        </div>
        
    </div>  
</div>  