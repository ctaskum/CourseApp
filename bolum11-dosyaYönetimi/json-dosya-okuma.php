<?php

$myFile = fopen("dosya.json","r");
$size = filesize("dosya.json");

// echo gettype(fread($myFile,$size)); //string
// echo fread($myFile,$size);

$strJson = fread($myFile,$size);
// echo $strDosya[0]["kursAdi"]; // dizi türünde olmadığı için hata verir.

// str to array => json decode
echo $strJson."<br>";
echo gettype($strJson)."<br>";
$arrJson = json_decode($strJson,true);

echo $arrJson[0]["kursAdi"];



?>