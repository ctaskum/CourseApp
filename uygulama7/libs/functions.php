<?php

function getCategories(){
    include 'ayar.php';
    $query = "SELECT * FROM kategoriler";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}
function getCourses(){
    include 'ayar.php';
    $query = "SELECT c.id,c.baslik, c.altbaslik,c.resim,c.yorumSayisi,c.begeniSayisi,c.onay,k.kategori_adi FROM courses c INNER JOIN kategoriler k ON c.kategori_id=k.id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function getCoursesByFilters($categoryId,$keyword,$page){

    include 'ayar.php';
    $pageCount = 2;
    $offset = ($page - 1) * $pageCount;  // ötelenecek kurs sayısı
    $sorgu ="";
    if(!empty($categoryId)){
        $sorgu = "FROM courses WHERE kategori_id=$categoryId";
    }else {
        $sorgu = "FROM courses WHERE onay=1";
    } 

    if(!empty($keyword)){
        $sorgu .= " and baslik LIKE '%$keyword%' or altbaslik LIKE '%$keyword%'";
    }
    
    $totalSql = "SELECT COUNT(*)".$sorgu;
    $count_data = mysqli_query($baglanti,$totalSql);
    $count = mysqli_fetch_array($count_data)[0];
    $total_pages = ceil($count / $pageCount);

    $sql = "SELECT * ".$sorgu." LIMIT $pageCount OFFSET $offset";
    $sonuc = mysqli_query($baglanti,$sql);
    mysqli_close($baglanti);
    return array(
        "totalPages" => $total_pages,
        "data" => $sonuc
    );
}

function deleteCourse(int $id){
    include 'ayar.php';
    $sorgu = "DELETE FROM courses WHERE id='$id'";
    $sonuc = mysqli_query($baglanti,$sorgu);
    mysqli_close($baglanti);
    return $sonuc;


}

function getCoursesByKeyword($keyword){
    include 'ayar.php';
    $sorgu = "SELECT * FROM courses WHERE baslik LIKE '%$keyword%' or altbaslik LIKE '%$keyword%'";
    $sonuc = mysqli_query($baglanti,$sorgu);
    mysqli_close($baglanti);
    return $sonuc;
}

function getCategoryById(int $id){
    include 'ayar.php';
    $sorgu = "SELECT * FROM kategoriler WHERE id='$id' ";
    $sonuc = mysqli_query($baglanti,$sorgu);
    mysqli_close($baglanti);
    return $sonuc;
}

function getCoursesByCatID(int $id){
include 'ayar.php';
$sorgu = "SELECT * FROM courses WHERE kategori_id=$id ";
$sonuc = mysqli_query($baglanti,$sorgu);
mysqli_close($baglanti);
return $sonuc;
}


function getCourseById(int $id){
    include 'ayar.php';
    $sorgu = "SELECT * FROM courses WHERE id='$id' ";
    $sonuc = mysqli_query($baglanti,$sorgu);
    mysqli_close($baglanti);
    return $sonuc;
}

function editCategory(int $id, string $category){
    include 'ayar.php';
    $query = "UPDATE kategoriler SET kategori_adi='$category' WHERE id='$id'";
    $sonuc = mysqli_query($baglanti,$query);

    mysqli_close($baglanti);
    return $sonuc;
}

function editCourse(int $id, string $baslik, string $altbaslik, string $resim,int $categoryId){
    include 'ayar.php';
    $query = "UPDATE courses SET baslik='$baslik', altbaslik='$altbaslik' , resim ='$resim', kategori_id='$categoryId' WHERE id='$id'";
    $sonuc = mysqli_query($baglanti,$query);

    mysqli_close($baglanti);
    return $sonuc;
}

function deleteCategory(int $id){
    include 'ayar.php';
    $sorgu = "DELETE FROM kategoriler WHERE id='$id'";
    $sonuc = mysqli_query($baglanti,$sorgu);
    mysqli_close($baglanti);
    return $sonuc;
}


function createCategory(string $category){
    include 'ayar.php';
    $sorgu = "INSERT INTO kategoriler(kategori_adi) VALUES (?)";
    $stmt = mysqli_prepare($baglanti,$sorgu);
    mysqli_stmt_bind_param($stmt,'s',$category);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $stmt;

}

function createCourse(string $courseName,string $altBaslik, string $resim,int $categoryId, int $yorumSayisi=5, int $begeniSayisi=5, int $onay=1){
    include 'ayar.php';
    $sorgu = "INSERT INTO courses(baslik,altbaslik,resim,yorumSayisi,begeniSayisi,onay,kategori_id) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($baglanti,$sorgu);
    mysqli_stmt_bind_param($stmt,'sssiiii',$courseName,$altBaslik,$resim,$yorumSayisi,$begeniSayisi,$onay,$categoryId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $stmt;

}

function uploadImg(array $file){
    if(isset($file)){
        $dest_path = "./img/";
        $fileName = $file["name"];
        $sourcePath= $file["tmp_name"];
        $FileDestPath = $dest_path.$fileName;

        move_uploaded_file($sourcePath,$FileDestPath);
    }
}



function getDb(){

    $myFile = fopen("db.json","r");
    $size = filesize("db.json");
    
    // str to array => decode
    $data = json_decode(fread($myFile,$size),true);
    fclose($myFile);
    return $data;
}

function safe_html($data){

    $data=trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

function kursEkle(string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $yorumSayisi=0, int $begeniSayisi=0,bool $onay=true ){
    
    $db = getDb(); 
    array_push($db["kurslar"], array(
        "baslik" => $baslik,
        "altbaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    ));   // Bu bilgiler bellekte tutulan bilgilerdir. Yani geçicidir. Kalıcı olması için json dosyasına yazdırmamız gerekiyor.
    
    $myFile = fopen("db.json","w");
    fwrite($myFile,json_encode($db,JSON_PRETTY_PRINT));
    fclose($myFile);

}




?>