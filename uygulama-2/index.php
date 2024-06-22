<?php
    $kategoriler = array("Programlama","Web Geliştirme","Veri Analizi", "Ofis Uygulamaları");
    sort($kategoriler);
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
            "onay" => false
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
            <a href="#" class="list-group-item list-group-item-action active " ><?php echo $kategoriler[0] ; ?> </a>
            <a href="#" class="list-group-item list-group-item-action " ><?php echo $kategoriler[1] ; ?> </a>
            <a href="#" class="list-group-item list-group-item-action " ><?php echo $kategoriler[2] ; ?> </a>   
            <a href="#" class="list-group-item list-group-item-action " ><?php echo $kategoriler[3] ; ?> </a>
            </div>
        </div>    
        <div class="col-9">
            <h1 class="lead fs-4 mb-3 fw-semibold"> <?php echo count($kategoriler)?> kategoride toplam <?php echo count($kurslar)?> kurs listelenmiştir.</h1>
           
            <?php if($kurslar["1"]["onay"]):?>
                <div class="card">
                    <div class="row">
                        <div class="col-4">                   
                            <img src=<?php echo $kurslar["1"]["resim"]; ?> class="img-fluid rounded-start" alt="php">            
                        </div>   

                        <div class="col-8">
                            <div class="card-body">
                                <a class="card-title mt-3"><?php echo $kurslar["1"]["baslik"]  ?></a>

                                <?php if(strlen($kurslar["1"]["altbaslik"])>50): ?>
                                    <p class="card-text mt-3"><?php echo substr($kurslar["1"]["altbaslik"],0,50)."..." ?></p>
                                    <?php else: ?>
                                    <p class="card-text mt-3"><?php echo $kurslar["2"]["altbaslik"]; ?></p>
                                <?php endif ?>
                                

                                <?php if($kurslar["1"]["begeniSayisi"]>0): ?>
                                <span class="badge text-bg-danger mb-3">Beğeni: <?php echo $kurslar["1"]["begeniSayisi"];  ?> </span>
                                <?php endif ?>
                               
                                <?php if($kurslar["1"]["yorumSayisi"]>0): ?>
                                    <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurslar["1"]["yorumSayisi"] ?> </span>
                                    <?php else: ?>
                                        <span class="badge text-bg-warning mb-3"> İlk yorumu sen yap! </span>
                                <?php endif ?>
                            </div>
                        </div> 
                    </div>  
                </div>
            <?php endif ?>

            <?php if($kurslar["2"]["onay"]):?>
            <div class="card mt-3">
                <div class="row">
                    <div class="col-4">                   
                        <img src=<?php echo $kurslar["2"]["resim"]; ?> class="img-fluid rounded-start" alt="php">            
                    </div>   

                    <div class="col-8">
                        <div class="card-body">
                            <a class="card-title mt-3"><?php echo $kurslar["2"]["baslik"]  ?></a>

                            <?php if(strlen($kurslar["2"]["altbaslik"]) > 50): ?>
                                <p class="card-text mt-3"><?php echo substr($kurslar["2"]["altbaslik"],0,50)."..." ?></p>
                                <?php else : ?>
                                    <p class="card-text mt-3"><?php echo $kurslar["2"]["altbaslik"]; ?></p>
                            <?php endif ?>

                            <?php if($kurslar["2"]["begeniSayisi"]>0): ?>
                            <span class="badge text-bg-danger mb-3">Beğeni: <?php echo $kurslar["2"]["begeniSayisi"] ?> </span>
                            <?php endif ?>

                            <?php if($kurslar["2"]["yorumSayisi"]>0): ?>
                            <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurslar["2"]["yorumSayisi"] ?> </span>
                            <?php else: ?>
                                <span class="badge text-bg-warning mb-3"> İlk yorumu sen yap! </span>
                            <?php endif ?>
                        </div>
                    </div> 
                </div>  
            </div>
            <?php endif ?>

            <?php if($kurslar["3"]["onay"]):?>
            <div class="card mt-3">
                <div class="row">
                    <div class="col-4">                   
                        <img src=<?php echo $kurslar["3"]["resim"]; ?> class="img-fluid rounded-start" alt="php">            
                    </div>   

                    <div class="col-8">
                        <div class="card-body">
                            <a class="card-title mt-3"><?php echo $kurslar["3"]["baslik"]  ?></a>

                             <?php if(strlen($kurslar["3"]["altbaslik"]) > 50): ?>
                                <p class="card-text mt-3"><?php echo substr($kurslar["3"]["altbaslik"],0,50)."..." ?></p>
                                <?php else : ?>
                                    <p class="card-text mt-3"><?php echo $kurslar["3"]["altbaslik"]; ?></p>
                            <?php endif ?>

                            <?php if($kurslar["3"]["begeniSayisi"]>0): ?>
                            <span class="badge text-bg-danger mb-3">Beğeni: <?php echo $kurslar["3"]["begeniSayisi"] ?> </span>
                            <?php endif ?>
                            <?php if($kurslar["3"]["yorumSayisi"]>0): ?>
                            <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurslar["3"]["yorumSayisi"] ?> </span>
                            <?php else: ?>
                                <span class="badge text-bg-warning mb-3"> İlk yorumu sen yap! </span>
                            <?php endif ?>
                        </div>
                    </div> 
                </div>  
            </div>
            <?php endif ?>

            <?php if($kurslar["4"]["onay"]): ?>
                <div class="card mt-3">
                    <div class="row">
                        <div class="col-4">                   
                            <img src=<?php echo $kurslar["4"]["resim"]; ?> class="img-fluid rounded-start" alt="php">            
                        </div>   

                        <div class="col-8">
                            <div class="card-body">
                                <a class="card-title mt-3"><?php echo $kurslar["4"]["baslik"]  ?></a>

                                <?php if(strlen($kurslar["4"]["altbaslik"]) > 50): ?>
                                    <p class="card-text mt-3"><?php echo substr($kurslar["4"]["altbaslik"],0,50)."..." ?></p>
                                        <?php else : ?>
                                            <p class="card-text mt-3"><?php echo $kurslar["4"]["altbaslik"]; ?></p>
                                <?php endif ?>

                                <?php if($kurslar["4"]["begeniSayisi"]>0): ?>
                                <span class="badge text-bg-danger mb-3">Beğeni: <?php echo $kurslar["4"]["begeniSayisi"] ?> </span>
                                <?php endif ?>
                                
                                <?php if($kurslar["4"]["yorumSayisi"]>0):?>
                                <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurslar["4"]["yorumSayisi"] ?> </span>
                                <?php else: ?>
                                    <span class="badge text-bg-warning mb-3"> İlk yorumu sen yap! </span>
                                <?php endif ?>
                            </div>
                        </div> 
                    </div>  
                </div>
            <?php endif ?>
            


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