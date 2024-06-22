<h1 class="lead fs-4 mb-3 fw-semibold"> <?php echo count($kategoriler)?> kategoride toplam
                <?php
                    $kursSayisi=0;
                        foreach ($kurslar as $key => $value)
                        {                         
                                if($kurslar[$key]["onay"]){
                                    $kursSayisi += 1;
                                }                           
                        }
                        echo $kursSayisi;
                 ?> kurs listelenmiştir.
            </h1>