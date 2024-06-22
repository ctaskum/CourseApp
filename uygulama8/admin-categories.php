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
                <a href="create-category.php" class="btn btn-primary">Kategori Ekle</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style = "width: 50px;">ID</th>
                        <th >Kategori Adı</th>
                        <th style = "width: 130px;" ></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sonuc = getCategories(); while($row = mysqli_fetch_assoc($sonuc)): ?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["kategori_adi"];?></td>
                        <td>
                            <a href="edit-category.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete-category.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>











<?php include 'partials/_footer.php'; ?>
