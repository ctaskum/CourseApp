<?php 
$page =1;
$keyword ="";
if(isset($_GET["page"]) && is_numeric($_GET["page"])){
    
    $page = $_GET["page"];
}
if (isset($_GET["q"])){
    $keyword = $_GET["q"];
}
$sonuc = getCoursesByFilters("",$keyword,$page);
  
    while($row = mysqli_fetch_assoc($sonuc["data"])): ?> 
    
    <?php if($row["onay"]):?>
        <div class="card ">
            <div class="row">
                <div class="col-4">                   
                    <img  src=img/<?php echo $row["resim"]; ?> class="img-fluid rounded-start" alt="php">            
                </div>  
                <div class="col-8">
                    <div class="card-body m-3">
                        <a href="course-details.php?id=<?php echo $row["id"]; ?>" class="card-title mt-3"><?php echo $row["baslik"]  ?></a>
                        <?php if(strlen($row["altbaslik"])>50): ?>
                            <p class="card-text mt-3" ><?php echo substr($row["altbaslik"],0,50)."..." ?></p>
                            <?php else: ?>
                            <p class="card-text mt-3"><?php echo $row["altbaslik"]; ?></p>
                        <?php endif ?>
                    
                        <?php if($row["begeniSayisi"]>0): ?>
                        <span class="badge text-bg-danger mb-3">Beğeni: <?php echo $row["begeniSayisi"];  ?> </span>
                        <?php endif ?>
                    
                        <?php if($row["yorumSayisi"]>0): ?>
                            <span class="badge text-bg-success mb-3">Yorum: <?php echo $row["yorumSayisi"] ?> </span>
                            <?php else: ?>
                                <span class="badge text-bg-warning mb-3"> İlk yorumu sen yap! </span>
                        <?php endif ?>
                    </div>
                </div> 
                
            </div>  
            
        </div>
    <?php endif ; ?>
    
<?php endwhile; ?>
