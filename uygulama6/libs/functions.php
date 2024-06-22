<?php

function getDb(){

    $myFile = fopen("db.json","r");
    $size = filesize("db.json");
    
    // str to array => decode
    $data = json_decode(fread($myFile,$size),true);
    fclose($myFile);
    return $data;
}

function safe_html($data){

    $data=trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

function kursEkle(string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $yorumSayisi=0, int $begeniSayisi=0,bool $onay=true ){
    
    $db = getDb(); 
    array_push($db["kurslar"], array(
        "baslik" => $baslik,
        "altbaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    ));   // Bu bilgiler bellekte tutulan bilgilerdir. Yani geçicidir. Kalıcı olması için json dosyasına yazdırmamız gerekiyor.
    
    $myFile = fopen("db.json","w");
    fwrite($myFile,json_encode($db,JSON_PRETTY_PRINT));
    fclose($myFile);

}




?>