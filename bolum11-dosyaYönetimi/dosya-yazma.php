<?php

// $file = fopen("dosya.txt","a");
// $title = "laravel dersleri \n";  // yeni satır : \n

// fwrite($file, $title);
// fclose($file);


$file2 = fopen("dosya.txt","a+");
$title2 = "Laravel öğreniyorum2 \n";
fwrite($file2,$title2);

fseek($file2, 0);
while(!feof($file2)){
    echo fgets($file2)."<br>";
}
fclose($file2);

?>