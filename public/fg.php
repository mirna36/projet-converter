<div class="erreur">
        <?php
        
            if(!empty($celsius) && ! is_numeric($celsius)){
                    
                echo 
                 
                 "Attention à votre saisie, un nombre est attendu";
                 
                 
                }
             ?>
</div>
<div class="resultat">
        <?php                

            if(!empty($fahreinheit)){
                    echo 
                    
                    "{$celsius} °C = {$fahreinheit} °F";
                    
                    
                }


            ?>
</div>            