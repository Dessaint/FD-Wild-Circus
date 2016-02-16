<?php 
require("header.php")
?>    

        
            <section>
                <div id="private_access">
                    <div class="cont_bandeau"><img src="images/bandeau_private.jpg"></div>
                    <div class="texte_bandeau"><h1>Artists private acces</h1></div>
                    
                <?php
    if (isset($_POST['password']) AND $_POST['password'] ==  "wild") // Si le mot de passe est bon
    {
        echo 'Welcome ' .$_POST['nom']. ' in the artits private access.'
    // On affiche les codes
    ?>  
        <div class="cont_contenu">             
            <div class="cont_private">
            <p>Welcome <?php echo $_POST['nom']; ?>,</p>    
            <p>Here you will find many specific practical informations.</p>
            
            <p></p>
            </div>  
        </div>    
        <?php
    }

    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }

    ?>    
                </div>
            </section>    
                
<?php
require("footer.php")
?>    