<?php 
 
    require 'libs/functions.php';
    require 'libs/variables.php';

    if(!isAdmin()){
        header('Location:unauthorize.php');
    }
?>


<?php 
    include 'partials/header.php';
    include 'partials/_navbar.php';    
    include 'partials/_message.php';  
?>

<div class="container my-2">

    <div class="row ">
        <div class="col-12">
            <div class="border p-2 mb-2">
                <a href="create-course.php" class="btn btn-primary">Kurs Ekle</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style = "width: 50px">ID</th>
                        <th style="width:120px">Resim</th>
                        <th >Kurs Başlığı</th>
                        <th style = "width: 100px">Kategori </th>
                        <th style = "width: 50px;">Onay</th>
                        <th style = "width: 130px;" ></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sonuc = getCourses(); while($row = mysqli_fetch_assoc($sonuc)): ?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><img src="img/<?php echo $row["resim"];?>" class="img-fluid"></td>
                        <td><?php echo $row["baslik"];?></td>
                        <td><?php echo $row["kategori_adi"];?></td>
                        <td>
                            <?php if($row["onay"]==1):?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                                </svg>
                            <?php else :?>                             
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                    </svg>
                            <?php endif; ?>
                        </td>
                        
                        
                        
                        <td>
                            <a href="edit-course.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete-course.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>

<?php include 'partials/_footer.php'; ?>
