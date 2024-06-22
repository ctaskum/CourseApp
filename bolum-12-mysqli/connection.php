<?php

include 'ayar.php';

$query = "INSERT INTO courses(baslik,altbaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES ('angular','ileri seviye angular dersleri','1.jpg','10/10/2020',10,10,1)";

// $query .= "INSERT INTO courses(baslik,altbaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
//VALUES ('angular','ileri seviye angular dersleri','1.jpg','10/10/2020',10,10,1);"; // çoklu sorgu

$sonuc = mysqli_query($baglanti,$query); // çoklu sorguda mysqli_multi_query($baglanti,$squery);
$inserted_id = mysqli_insert_id($baglanti); // eklenen son verinin id sini döner.
if($sonuc){
    echo "query eklendi : ".$inserted_id;
}else{
    echo "query eklenemedi";
}
mysqli_close($baglanti);
?>