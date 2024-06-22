<?php

include 'ayar.php';

$sorgu = "DELETE FROM courses WHERE id=7 ";

$sonuc = mysqli_query($baglanti,$sorgu);
$adet = mysqli_affected_rows($baglanti);
if($sonuc){
    echo $adet."adet kayıt silindi";
}else {
    echo "silme hatası";
}





mysqli_close($baglanti);

?>