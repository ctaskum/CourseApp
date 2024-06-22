<?php 

function ekranaYazdirma($kelime,$sayi){

    for($i=0 ; $i<$sayi ; $i++){
        echo $kelime."<br>";
    }

}


ekranaYazdirma("çiğdem",3);

function hesap($kisa,$uzun){
    $alan = $kisa*$uzun;
    echo "dikdörtgenin alanı:".$alan."<br>";
    $cevre = 2*($kisa+$uzun);
    echo "dikdörtgenin çevresi:".$cevre."<br>";
}

hesap(5,3);


function tamBolen($sayi) {
    $dizi = array(1,$sayi);
    for($i=2;$i<=($sayi/2);$i++){
        if($sayi%$i==0){
            array_push($dizi,$i);
        }
    }
    sort($dizi);
    return $dizi;
}

print_r(tamBolen(10));


?>