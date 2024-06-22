<?php

include 'ayar.php';

$sorgu = "SELECT * FROM courses WHERE id>1 and baslik like 'Angular%'";

$sonuc = mysqli_query($baglanti,$sorgu);


if(mysqli_num_rows($sonuc)>0){  //   $sonuc sorgusundan dönen row sayısı 0 dan büyükse... 
    while($row = mysqli_fetch_row($sonuc)){
        echo $row[0]." ".$row[1];
        echo "<br>";
    }
}else{
    echo "kayıt bulunamadı";
}

mysqli_close($baglanti);
?>