<?php
    $kategoriler = array(
        array("kategori_adi" => "Programlama", "aktif" => true),
        array("kategori_adi" => "Web Geliştirme", "aktif" => false),
        array("kategori_adi" => "Veri Analizi", "aktif" => false),
        array("kategori_adi" => "Ofis uygulamalari", "aktif" => false),
        array("kategori_adi" => "Mobil Uygulamalar", "aktif" => false)
    );
    
    $kurslar = array(
        "1" => array(
            "baslik" => "Php kursu",
            "altbaslik" => "sıfırdan ileri seviye Php ile web geliştirmesıfırdan ileri seviye Php ile web geliştirme",
            "resim" => "/KURSLAR/img/phpRESİM.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi"=> 0,
            "begeniSayisi" => 10,
            "onay" => true
        ),   
        "2" => array(
            "baslik" => "Python kursu",
            "altbaslik" => "sıfırdan ileri seviye Python ile web geliştirme",
            "resim" => "/KURSLAR/img/2.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi"=> 10,
            "begeniSayisi" => 0,
            "onay" => true
        ),   
        "3" => array(
            "baslik" => "Node js kursu",
            "altbaslik" => "sıfırdan ileri seviye node.js ile web geliştirme",
            "resim" => "/KURSLAR/img/3.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi"=> 10,
            "begeniSayisi" => 20,
            "onay" => true
        ), 
        "4" => array(
            "baslik" => "Django kursu",
            "altbaslik" => "sıfırdan ileri seviye Django programlama",
            "resim" => "/KURSLAR/img/1.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi"=> 0,
            "begeniSayisi" => 5,
            "onay" => true
        ) 
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container my-3">
    <div class="row mt-3 ">
        <div class="col-3 ">
            <div class="list-group">

                <?php for($i=0; $i < count($kategoriler) ; $i++): ?>

                    <a href="#" class="list-group-item list-group-item-action <?php echo ($kategoriler[$i]["aktif"])?"active":"" ?>" >
                        <?php echo $kategoriler[$i]["kategori_adi"] ; ?> 
                    </a>
                <?php endfor ?>

            </div>
        </div>    

        <div class="col-9">
            <h1 class="lead fs-4 mb-3 fw-semibold"> <?php echo count($kategoriler)?> kategoride toplam
                <?php
                    $kursSayisi=0;
                        foreach ($kurslar as $key => $value)
                        {                         
                                if($kurslar[$key]["onay"]){
                                    $kursSayisi += 1;
                                }                           
                        }
                        echo $kursSayisi;
                 ?> kurs listelenmiştir.
            </h1>
           
            <?php
            $key = array_keys($kurslar);
            for($i=0 ; $i < count($kurslar) ; $i++): ?>
            <?php if($kurslar[$key[$i]]["onay"]):?>
                <div class="card">
                    <div class="row">
                        <div class="col-4">                   
                            <img src=<?php echo $kurslar[$key[$i]]["resim"]; ?> class="img-fluid rounded-start" alt="php">            
                        </div>   

                        <div class="col-8">
                            <div class="card-body">
                                <a class="card-title mt-3"><?php echo $kurslar[$key[$i]]["baslik"]  ?></a>

                                <?php if(strlen($kurslar[$key[$i]]["altbaslik"])>50): ?>
                                    <p class="card-text mt-3"><?php echo substr($kurslar[$key[$i]]["altbaslik"],0,50)."..." ?></p>
                                    <?php else: ?>
                                    <p class="card-text mt-3"><?php echo $kurslar[$key[$i]]["altbaslik"]; ?></p>
                                <?php endif ?>
                                

                                <?php if($kurslar[$key[$i]]["begeniSayisi"]>0): ?>
                                <span class="badge text-bg-danger mb-3">Beğeni: <?php echo $kurslar[$key[$i]]["begeniSayisi"];  ?> </span>
                                <?php endif ?>
                               
                                <?php if($kurslar[$key[$i]]["yorumSayisi"]>0): ?>
                                    <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurslar[$key[$i]]["yorumSayisi"] ?> </span>
                                    <?php else: ?>
                                        <span class="badge text-bg-warning mb-3"> İlk yorumu sen yap! </span>
                                <?php endif ?>
                            </div>
                        </div> 
                    </div>  
                </div>
            <?php endif ?>
            <?php endfor ?>


        </div>
    </div>  
</div>  





    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
 crossorigin="anonymous"></script>
</body>
</html>