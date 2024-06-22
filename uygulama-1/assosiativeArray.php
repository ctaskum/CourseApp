<?php

    // //ilişkisel dizi - key - value mantığı var

    // $plakaVeSehir = array(
    //     "41" => "Kocaeli",
    //     "34" => "İstanbul",
    //     "61" => "Trabzon",
    //     "53" => "Rize" 
    // );

    // $isim = "çiğdem";
    // echo $isim;
    // echo $plakaVeSehir["53"]."<br>";

    // // çok boyutlu dizi

    // $ogrenciA = array("Çiğdem", array(10,47,41));

    // echo $ogrenciA[1][0]." : birinci sınav notu"."<br>";

    // $ogrenciOrt = ($ogrenciA[1][0]+$ogrenciA[1][2]+$ogrenciA[1][1])/3;
    // echo $ogrenciOrt;


    $allStudents = array(
        "100" => array(
            "ad" => "çiğdem",
            "soyad" => "taşkum",
            "notlar" => array(
                "fizik" => array(10,20,39,100),
                "kimya" => array(20,30,30),
                "biyoloji" => array(40,80,99)
            )
        ),
        "200" => array(
            "ad" => "gökhan",
            "soyad" => "taşkum",
            "notlar" => array(
                "fizik" => array(60,80,100,50),
                "kimya" => array(50,50,50),
                "biyoloji" => array(70,70,79)
            )
        )

     );

     echo $allStudents["100"]["notlar"]["fizik"][0]."<br>";

     // dizi eleman sayısı
     echo count($allStudents["100"]["notlar"]["fizik"]);
     // dizinin sonuna eleman ekleme
     array_push($allStudents["100"]["notlar"]["fizik"],90);
     echo count($allStudents["100"]["notlar"]["fizik"]);
     // dizinin başına eleman ekleme
     array_unshift($allStudents["100"]["notlar"]["kimya"],100);
     
    
     // dizileri olduğu gibi yazdırıma
     print_r($allStudents["100"]);
     echo count($allStudents["100"]["notlar"]["kimya"])."<br>";
     // diziden sondan eleman silme
     array_pop($allStudents["100"]);
     print_r($allStudents["100"]);

     //dizinin başından eleman silme **** array_shift(dizi,eleman)

     //sıralama
    //  sort($dizi)
    //  asort($dizi) // value ya gre artan sıralama
    //  ksort($dizi) // key bilgisine gçre aartan sıralama
     // azalan sıralamada rsort-arsort-krsort kullanılır


     // string to array 
     $str = "kocaeli,41";
     $arr = explode( ",",$str);

     // array to string 
     $arr = array("sadikturan","mail.com");
     $str = implode(",",$arr);

     


?>
