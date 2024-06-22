<?php 
    if(isset($_GET["categoryId"]) && is_numeric($_GET["categoryId"])){
        $selectedCatId = $_GET["categoryId"];
     }else{
        $selectedCatId = "";
    }

?>


<div class="list-group container-md">
<?php ?>
    <?php 
        $sonuc = getCategories();
        while($row = mysqli_fetch_assoc($sonuc)):    
    ?>

    <a href="courses.php?categoryId=<?php echo $row["id"]?>" class="list-group-item list-group-item-action
        <?php if($row["id"] == $selectedCatId){    echo "active";}?>" >
        <?php echo $row["kategori_adi"] ; ?> 
    </a>
<?php endwhile; ?>

</div>