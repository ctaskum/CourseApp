<?php
    $ad = "Çiğdem";
    $soyad = "Taşkum";
    $yas = 25;
    $mesaj = "My name is {$ad} {$soyad} and I am {$yas} years old.";

    echo $mesaj."<br>";
    echo $mesaj[5]."<br>";

    echo strlen($mesaj)."<br>";
    echo str_word_count($mesaj)."<br>";
    echo strtolower($mesaj)."<br>";
    echo strtoupper($mesaj)."<br>";
    echo ucfirst($mesaj)."<br>"; // karakter dizisinin ilk harfini büyütür
    echo str_replace(["Çiğdem","25"],["Gökhan","24"],$mesaj);
// ?>