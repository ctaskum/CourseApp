<h1 class="lead fs-4 mb-3 fw-semibold"> <?php echo count(getDb()["kategoriler"])?> kategoride toplam
                <?php
                    $kursSayisi=0;
                        foreach (getDb()["kurslar"] as $kurs)
                        {                         
                                if($kurs["onay"]){
                                    $kursSayisi += 1;
                                }                           
                        }
                        echo $kursSayisi;
                 ?> kurs listelenmiştir.
            </h1>