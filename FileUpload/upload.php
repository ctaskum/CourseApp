<?php

if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"] == "Upload")
    echo "<pre>";
    print_r($_FILES["fileToUpload"]);
    print_r($_POST);
    echo "</pre>";


    $dest_path ="./uploadedFiles/";
    $filename = $_FILES["fileToUpload"]["name"];
    $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];
    $fileDestPath = $dest_path.$filename;
    $dosyaUzantilari = ["jpg","jpeg","png"];
    $uploadOk = true;

    $dosyaAdi = explode(".",$filename);
    $dosyaAdiUzantisiz = $dosyaAdi[0];
    $dosyaUzantisi = $dosyaAdi[1];

    if(!in_array($dosyaUzantisi,$dosyaUzantilari)){
        echo "dosya uzantısı desteklenmiyor!";
        echo "kabul edilen dosya uzantıları :".implode(",",$dosyaUzantilari);
        $uploadOk = false;
    }else{
       $uploadOk = true;
    }



    if(  $uploadOk == true){
        if(move_uploaded_file($fileSourcePath,$fileDestPath)){
            echo "dosya yüklendi";
        }
    }else {
        echo "hata";
    }

?>