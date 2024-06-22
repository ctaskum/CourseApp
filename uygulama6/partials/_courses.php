
            
           
            <?php
            $key = array_keys($kurslar);
            foreach( getDb()["kurslar"] as $kurs  ) : ?>
            <?php if($kurs["onay"]):?>
                <div class="card ">
                    <div class="row">
                        <div class="col-4">                   
                            <img src=<?php echo $kurs["resim"]; ?> class="img-fluid rounded-start" alt="php">            
                        </div>   

                        <div class="col-8">
                            <div class="card-body">
                                <a class="card-title mt-3"><?php echo $kurs["baslik"]  ?></a>

                                <?php if(strlen($kurs["altbaslik"])>50): ?>
                                    <p class="card-text mt-3"><?php echo substr($kurs["altbaslik"],0,50)."..." ?></p>
                                    <?php else: ?>
                                    <p class="card-text mt-3"><?php echo $kurs["altbaslik"]; ?></p>
                                <?php endif ?>
                                

                                <?php if($kurs["begeniSayisi"]>0): ?>
                                <span class="badge text-bg-danger mb-3">Beğeni: <?php echo $kurs["begeniSayisi"];  ?> </span>
                                <?php endif ?>
                               
                                <?php if($kurs["yorumSayisi"]>0): ?>
                                    <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurs["yorumSayisi"] ?> </span>
                                    <?php else: ?>
                                        <span class="badge text-bg-warning mb-3"> İlk yorumu sen yap! </span>
                                <?php endif ?>
                            </div>
                        </div> 
                    </div>  
                </div>
            <?php endif ?>
            <?php endforeach; ?>


      