<?php
    $kurs1_baslik = "Php kursu";
    $kurs1_altbaslik = "sıfırdan ileri seviye Php ile web geliştirme";
    $kurs1_resim = "/KURSLAR/img/phpRESİM.jpg";
    $kurs1_yayinTarihi = "01.01.2023";
    $kurs1_yorumSayisi = "200";
    $kurs1_begeniSayisi = "300";

    $kurs2_baslik = "Phyton kursu";
    $kurs2_altbaslik = "sıfırdan ileri seviye Python ile web geliştirme";
    $kurs2_resim = "/KURSLAR/img/2.jpg";
    $kurs2_yayinTarihi = "01.01.2023";
    $kurs2_yorumSayisi = "200";
    $kurs2_begeniSayisi = "300";

    $kurs3_baslik = "Node js kursu";
    $kurs3_altbaslik = "Sıfırdan ileri seviye node.js ile web geliştirme";
    $kurs3_resim = "/KURSLAR/img/3.jpg";
    $kurs3_yayinTarihi = "01.01.2023";
    $kurs3_yorumSayisi = "200";
    $kurs3_begeniSayisi = "300";

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
    <div class="card mb-3" >
        <div class="row">
                <div class="col-3  ">
                    <img src="<?php echo $kurs1_resim; ?>" class="img-fluid rounded-start" alt="php resmi">
                </div>
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $kurs1_baslik  ?></h5>
                            <p class="card-text"><?php echo str_pad($kurs1_altbaslik,33,"...") ?></p>
                            <span class="badge text-bg-primary mb-3">Beğeni: <?php echo $kurs1_begeniSayisi ?></span>
                            <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurs1_yorumSayisi ?></span>
                            
                        </div>
                    </div>
        </div>
    </div>
    <div class="card mb-3" >
        <div class="row">
                <div class="col-3  ">
                    <img src="<?php echo $kurs2_resim; ?>" class="img-fluid rounded-start" alt="php resmi">
                </div>
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $kurs2_baslik  ?></h5>
                            <p class="card-text"><?php echo ucfirst($kurs2_altbaslik) ?></p>
                            <span class="badge text-bg-primary mb-3">Beğeni: <?php echo $kurs2_begeniSayisi ?></span>
                            <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurs2_yorumSayisi ?></span>
                            
                        </div>
                    </div>
        </div>
    </div>

    <div class="card mb-3" >
        <div class="row">
                <div class="col-3  ">
                    <img src="<?php echo $kurs3_resim; ?>" class="img-fluid rounded-start" alt="php resmi">
                </div>
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $kurs3_baslik  ?></h5>
                            <p class="card-text"><?php echo $kurs3_altbaslik ?></p>
                            <span class="badge text-bg-primary mb-3">Beğeni: <?php echo $kurs3_begeniSayisi ?></span>
                            <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurs3_yorumSayisi ?></span>
                            
                        </div>
                    </div>
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