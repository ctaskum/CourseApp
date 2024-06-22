<?php

$course = array(
    "title" => "PHP",
    "description" => "Ileri seviye PHP programlama egitimi",
    "image" => "1.jpg"
);

echo $course["title"];

// array to string => json encode

$JsonStr = json_encode($course,JSON_PRETTY_PRINT);

$myfile = fopen("course2.json","w");
fwrite($myfile,$JsonStr);

fclose($myfile);

?>