<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form action="upload.php" method ="POST" enctype="multipart/form-data" > <!-- enctype, file türündeki dosyaları submit edebilmek için mutlaka eklenmeli -->
    <input type="text" name="username">
    <input type="file" name="fileToUpload" >
    <input type="submit" value="Upload"  name ="btnFileUpload"></input>

</form>
    




</body>
</html>