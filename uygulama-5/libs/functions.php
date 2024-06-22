

<?php


function safe_html($data){

    $data=trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

function kursEkle(&$kurslar, string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $yorumSayisi=0, int $begeniSayisi=0,bool $onay=true ){
    $yeni_kurs[count($kurslar)+1]=array(
        "baslik" => $baslik,
        "altbaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    );
    $kurslar = array_merge($kurslar,$yeni_kurs);
}




?>