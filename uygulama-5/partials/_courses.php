
            
           
            <?php
            $key = array_keys($kurslar);
            for($i=0 ; $i < count($kurslar) ; $i++): ?>
            <?php if($kurslar[$key[$i]]["onay"]):?>
                <div class="card ">
                    <div class="row">
                        <div class="col-4">                   
                            <img src=<?php echo $kurslar[$key[$i]]["resim"]; ?> class="img-fluid rounded-start" alt="php">            
                        </div>   

                        <div class="col-8">
                            <div class="card-body">
                                <a class="card-title mt-3"><?php echo $kurslar[$key[$i]]["baslik"]  ?></a>

                                <?php if(strlen($kurslar[$key[$i]]["altbaslik"])>50): ?>
                                    <p class="card-text mt-3"><?php echo substr($kurslar[$key[$i]]["altbaslik"],0,50)."..." ?></p>
                                    <?php else: ?>
                                    <p class="card-text mt-3"><?php echo $kurslar[$key[$i]]["altbaslik"]; ?></p>
                                <?php endif ?>
                                

                                <?php if($kurslar[$key[$i]]["begeniSayisi"]>0): ?>
                                <span class="badge text-bg-danger mb-3">Beğeni: <?php echo $kurslar[$key[$i]]["begeniSayisi"];  ?> </span>
                                <?php endif ?>
                               
                                <?php if($kurslar[$key[$i]]["yorumSayisi"]>0): ?>
                                    <span class="badge text-bg-success mb-3">Yorum: <?php echo $kurslar[$key[$i]]["yorumSayisi"] ?> </span>
                                    <?php else: ?>
                                        <span class="badge text-bg-warning mb-3"> İlk yorumu sen yap! </span>
                                <?php endif ?>
                            </div>
                        </div> 
                    </div>  
                </div>
            <?php endif ?>
            <?php endfor ?>


      