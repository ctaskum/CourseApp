<?php
include 'ayar.php';

 // *** $sorgu = "INSERT INTO courses(baslik,altbaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
//       VALUES ('angular','ileri seviye angular dersleri','1.jpg','10/10/2020',10,10,1)"; => bu şekilde eklersek güvenlik sorunları oluşabiliyor.

$baslik = "Angular Kursu";
$altbaslik = "İleri seviye Angular kursu";
$resim = "1.jpg";
$yayinTarihi = "10/10/2020";
$yorumSayisi = 10;
$begeniSayisi = 20;
$onay = 1;


$sorgu = "INSERT INTO courses(baslik,altbaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
          VALUES (?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($baglanti,$sorgu);
mysqli_stmt_bind_param($stmt,'ssssiii',$baslik,$altbaslik,$resim,$yayinTarihi,$yorumSayisi,$begeniSayisi,$onay);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

echo "veri eklendi";

mysqli_close($baglanti);
?>