<?php

    const db_user = array(
        "db_username" => "cigdem",
        "db_parola" => "123",
        "name" => "Çiğdem Taşkum"
    );
    


    $kategoriler = array(
        array("kategori_adi" => "Programlama", "aktif" => true),
        array("kategori_adi" => "Web Geliştirme", "aktif" => false),
        array("kategori_adi" => "Veri Analizi", "aktif" => false),
        array("kategori_adi" => "Ofis uygulamalari", "aktif" => false),
        array("kategori_adi" => "Mobil Uygulamalar", "aktif" => false)
    );

    
    $kurslar = array(
        "1" => array(
            "baslik" => "Php kursu",
            "altbaslik" => "sıfırdan ileri seviye Php ile web geliştirmesıfırdan ileri seviye Php ile web geliştirme",
            "resim" => "/KURSLAR/img/phpRESİM.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi"=> 0,
            "begeniSayisi" => 10,
            "onay" => true
        ),   
        "2" => array(
            "baslik" => "Python kursu",
            "altbaslik" => "sıfırdan ileri seviye Python ile web geliştirme",
            "resim" => "/KURSLAR/img/2.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi"=> 10,
            "begeniSayisi" => 0,
            "onay" => true
        ),   
        "3" => array(
            "baslik" => "Node js kursu",
            "altbaslik" => "sıfırdan ileri seviye node.js ile web geliştirme",
            "resim" => "/KURSLAR/img/3.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi"=> 10,
            "begeniSayisi" => 20,
            "onay" => true
        ), 
        "4" => array(
            "baslik" => "Django kursu",
            "altbaslik" => "sıfırdan ileri seviye Django programlama",
            "resim" => "/KURSLAR/img/1.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi"=> 0,
            "begeniSayisi" => 5,
            "onay" => true
        ) 
    );

    $sehirler = array(
        "06" => "Ankara",
        "34" => "İstanbul",
        "53" => "Rize",
        "61" => "Trabzon",
        "54" => "Sakarya"
        
    );

    $hobiler = array(
        "1" => "Sinema",
        "2" => "Spor",
        "3" => "Müzik"
    );
?>