<?php 

include 'ayar.php';

$query = "SELECT id,baslik FROM courses";

$sonuc = mysqli_query($baglanti,$query);

//$row = mysqli_fetch_row($sonuc); // sorgu sonucunda gelen bilgilerin ilk satırını okur, imleç satır sonuna gelir.

while($row = mysqli_fetch_row($sonuc)){
    echo $row[0]." ".$row[1];
    echo "<br>";
}

echo "<hr>";

$query2 = "SELECT * FROM courses";
$sonuc2 = mysqli_query($baglanti,$query2);
while($row2 = mysqli_fetch_assoc($sonuc2)){
    echo $row2["id"]."   ".$row2["baslik"]."     ".$row2["altbaslik"]."     ".$row2["yorumSayisi"]; 
    echo "<br>";
}


mysqli_close($baglanti);
?>