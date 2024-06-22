<?php require 'libs/variables.php' ?>

<?php include "partials/header.php"?>

<?php include 'partials/_navbar.php'?>
<div class="container my-3">
    <div class="row mt-3 ">
        <div class="col">
           <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="title" > Başlık </label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="subtitle" > Alt Başlık </label>
                <input type="text" name="subtitle" id="subtitle" class="form-control">
            </div>
            <div class="mb-3">
                <label for="image" >Resim </label>
                <input type="text" name="image" id="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="dateAdded" > Eklenme Tarihi </label>
                <input type="text" name="dateAdded" id="dateAdded" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>

           </form>
        </div>
        
    </div>  
</div>  


<?php include 'partials/_footer.php'?>