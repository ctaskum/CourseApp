
<?php 
$sonuc = getCategories();
$rowSayisi = mysqli_num_rows($sonuc);
$sonuc2 = getCourses();
$rowSayisi2 = mysqli_num_rows($sonuc2);

?>

<h1 class="lead fs-4 mb-3 fw-semibold">
     <?php echo $rowSayisi ?> kategoride toplam <?php echo $rowSayisi2;  ?> kurs listelenmiştir.
</h1>