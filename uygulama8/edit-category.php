<?php require 'libs/variables.php'; 
require 'libs/functions.php'; ?>

<?php

$id = $_GET["id"];
$sonuc = getCategoryById($id);
$SelectedCategori = mysqli_fetch_assoc($sonuc);
$categoryErr = $CatName = "";

 if($_SERVER["REQUEST_METHOD"]== "POST")
 {
    if(empty($_POST["CatName"])){
        $categoryErr = "category adı boş bırakılamaz";
    }else{
        $CatName =safe_html($_POST["CatName"]);
        editCategory($id, $CatName);

        $_SESSION["message"]=$CatName." isimli kategori güncellendi";
        $_SESSION["type"]="success";
        header('Location: admin-categories.php');
    }
    
}
?>



<?php include 'partials/header.php'?>

<?php include 'partials/_navbar.php'?>
<div class="container my-3">
    <div class="row mt-3 ">
        <div class="card card-body">
            <div class="col">
                <form  method="POST" >
                    <div class="mb-3">
                        <label for="CatName" > Kategori Adı </label>
                        <input type="text" name="CatName" id="CatName" class="form-control" value="<?php echo $SelectedCategori["kategori_adi"]; ?>">
                        <div class="text-danger"><?php echo $categoryErr; ?></div> 
                    </div>
                    
                    <button type="submit" class="btn btn-primary" id ="categoryCreate">Kaydet</button>
                    
                </form>
            </div>
        </div>
        
    </div>  
</div>  
