<?php

include 'ayar.php';

$sorgu = "UPDATE courses SET baslik = 'PHP Dersleri' WHERE id=1 ";

$sonuc = mysqli_query($baglanti,$sorgu);

if($sonuc){
    echo "kayıt güncellendi";
}else {
    echo "güncelleme hatası";
}



mysqli_close($baglanti);
?>