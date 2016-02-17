<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="middle_resolution.css" media="screen and (max-width: 1599px)"  >
    <link rel="stylesheet" href="small_resolution.css" media="screen and (max-width: 1079px)"  > 
    <link rel="stylesheet" href="extra_small_resolution.css" media="screen and (max-width: 599px)"  >     
    <link rel="shortcut icon" href="images/logo_wc.ico">
    <link href='https://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Emilys+Candy' rel='stylesheet' type='text/css'>    
    <title>Wild Circus private access autorized</title>
    <meta name="description" content="The information store Wild Circus artists. Private access to the organization of tours"/>    
    </head>
    
    <body>
        <div class="container">


<?php 
require("header.php")
?>    

        
            <section>
                <div id="private_access">
                    <div class="cont_bandeau"><img src="images/bandeau_private.jpg" alt="Authorized access"></div>
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
            
        </div>
    </body>    
</html>             