<?php


    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"] == "Upload" ){
        $dosyaAdeti =count( $_FILES["fileToUpload"]["name"]);
        $maxDosyaBoyut = (1024*1024)*3; // 3 mb
        $fileTypes = array("image/png","image/jpeg");
        $uploadOk = true;

        if($dosyaAdeti>2){
            $uploadOk=false;
            echo "en fazla iki adet dosya yükleyebilirsiniz";
        }

        for ($i=0; $i<$dosyaAdeti;$i++){
            $fileTempPath  = $_FILES["fileToUpload"]["tmp_name"][$i];
            $fileName  = $_FILES["fileToUpload"]["name"][$i];
            $fileSize = $_FILES["fileToUpload"]["size"][$i];
            $fileType = $_FILES["fileToUpload"]["type"][$i];

            $destPath = "uploadedFiles/".$fileName;
           
            if($fileSize>$maxDosyaBoyut){
                $uploadOk = false;
                echo "en fazla 3 mb boyutunda bir dosya yükleyebilirsiniz";
            }
            if(!in_array($fileType,$fileTypes)){
                echo "yüklemek istediğiniz dosya formatı desteklenmiyor"."<br>";
                echo "yüklenilebilecek dosya türleri: ".implode(",",$fileTypes);
                $uploadOk = false;
            }

            if($uploadOk){

                if(move_uploaded_file($fileTempPath,$destPath)){
                    echo "dosya yüklendi"."<br>";
                }else{
                    echo "dosya yükleme hatası";
                }
            }
        }

    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method ="POST" enctype="multipart/form-data" > <!-- enctype, file türündeki dosyaları submit edebilmek için mutlaka eklenmeli -->
    <input type="text" name="username">
    <input type="file" name="fileToUpload[]" multiple = "multiple"  > <!-- multiple ile çoklu dosya gönderimi sağlanabilir -->
    <input type="submit" value="Upload"  name ="btnFileUpload"></input>

</form>

</body>
</html>