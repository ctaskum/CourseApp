<?php


function toplama(...$sayilar){ // değişken sayıda parametre alan fonksiyon 

    $toplam = 0;
    foreach($sayilar as $sayi){
        $toplam += $sayi;
    }
    return $toplam;

}

echo toplama(10,20,50)."<br>";

$x =5;
echo $x;

function test(){
    $GLOBALS["x"] = 6;
    
}


test();
echo $x."<br>";

$y = 10;
echo $y;

function test2(&$z){
    $z =5;
}

test2($y);
echo $y;

function test3(){
    $sayi = func_num_args();
    $parametre1 = func_get_arg(0);
    return $parametre1;
}

echo test3("çiğdem","taşkum","gökhan","taşkum");

declare(strict_types=1); //fonksiyonu, fonksiyonun parametre veri türündeki parametreyi kabul etmeye zorlar

?>