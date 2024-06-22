<?php

/*
fopen("dosya_ismi","dosya açma modu");

dosya açma modları :

r  :  dosya okuma modunda açılır. İmleç dosyanın başında yer alır.
w  :  dosya yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm veriler silinir.
a  :  (append) dosya yazma modunda açılır. İmleç dosyanın sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturulur.
x  :  dosya yazma modunda açılır. Dosya yoksa oluşturulur, varsa false döner.

r+  :dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır. 
w+  :dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içinceki tüm veriler silinir. 
a+  :dosya okuma ve yazma modunda açılır. İmleç dosya sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturulur
x+  :dosya okuma ve yazma modunda açılır. Dosya yoksa oluşturulur, varsa false döner.

*/

$myfile = fopen("dosya.txt","r");
$size = filesize("dosya.txt");

// echo fread($myfile,$size); // dosyayı verdiğin size bilgisi kadar okur. her harf 1 byt

// echo fgets($myfile); // dosyadan bir satır okur. cursor okuduğu satırın sonunda kalır. 

while(!feof($myfile)){ // feof("fileadı") = file end of file dosyanın sonuna gelip gelmediğine bakar
    echo fgets($myfile)."<br>";
}

fclose($myfile); // açılan streami kapatmamız gerekir. Bellekte boşuna yer kaplamasın. 

?>