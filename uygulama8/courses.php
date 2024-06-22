<?php 
    require 'libs/variables.php' ;
    require 'libs/functions.php';   
    session_start();
?>



<?php include "partials/header.php"; ?>
<?php include 'partials/_navbar.php'; ?>



<div class="container my-3">
    <div class="row mt-3 ">
        <div class="col-3 ">
           <?php include 'partials/_menu.php'?>
        </div>    

        <div class="col-9">
        
            <?php include 'partials/_courses.php'?>
                <?php if($sonuc["totalPages"]>1): ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for($i=1 ; $i<=$sonuc["totalPages"] ; $i++): ?>
                            <li class="page-item">
                                <a class="page-link" href="
                                    <?php
                                        $url = "?page=".$i;
                                        if(!empty($categoryId)){
                                            $url .="&categoryId=".$categoryId;
                                        }
                                        if(!empty($keyword)){
                                            $url .= "&q=".$keyword;
                                        }
                                        echo $url;
                                    ?>"><?php echo $i ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </div>  
</div>  


<?php include 'partials/_footer.php'?>