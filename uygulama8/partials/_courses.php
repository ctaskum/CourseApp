<?php 
    $categoryId = "";
    $keyword = "";
    $page = 1;

    if(isset($_GET["categoryId"]) && is_numeric($_GET["categoryId"])){
        $selectedCatId = $_GET["categoryId"];         
        $sonuc3 =  getCoursesByCatID($selectedCatId);  
        $KursSayisi=0;
        while($Kurs = mysqli_fetch_assoc($sonuc3)){
            if($Kurs["onay"]){
                $KursSayisi+=1;
            }
        }
        $sonuc2= getCategoryById($_GET["categoryId"]);
        $row2 = mysqli_fetch_assoc($sonuc2);
        $KategoriAdi = $row2["kategori_adi"];
        echo"<h1 class='lead fs-4 mb-3 fw-semibold'>". $KategoriAdi." kategorisinde toplam".$KursSayisi." adet kurs listelenmiştir.</h1>";
        $categoryId = $_GET["categoryId"];
    }else if (isset($_GET["q"])) {
        
        $sonuc4 = getCoursesByKeyword($_GET["q"]);
        $KursSayisi=0;
        $KategoriId =array();
        $KategoriSayisi=0;
        while($Kurs = mysqli_fetch_assoc($sonuc4)){
            if($Kurs["onay"]){
                $KursSayisi+=1;
                if(!in_array($Kurs["kategori_id"],$KategoriId)){
                $KategoriSayisi+=1;
                array_push($KategoriId,$Kurs["kategori_id"]);
                }
            }
        }
        echo"<h1 class='lead fs-4 mb-3 fw-semibold'>". $KategoriSayisi." kategoride toplam".$KursSayisi." adet kurs listelenmiştir.</h1>";
        $keyword = $_GET["q"];

    }else if(isset($_GET["page"]) && is_numeric($_GET["page"])){
        $page = $_GET["page"];
    }

    $sonuc = getCoursesByFilters($categoryId,$keyword,$page);
?>


<?php  while($row = mysqli_fetch_assoc($sonuc["data"])): ?> 
    
    <?php if($row["onay"]):?>
        <div class="card ">
            <div class="row">
                <div class="col-4">                   
                    <img src=img/<?php echo $row["resim"]; ?> class="img-fluid rounded-start" alt="php">            
                </div>  
                <div class="col-8">
                    <div class="card-body">
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


      