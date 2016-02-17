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
    <title>Wild Circus private access for artits</title>
    <meta name="description" content="Identify specific information to view artists"/>    
    </head>
    
    <body>
        <div class="container">


<?php 
require("header.php")
?>    

        
            <section>
                <div class="cont_section">
                    <div class="cont_bandeau"><img src="images/bandeau_private0.jpg" alt="Artist private area to collect informations"></div>
                    <div class="texte_bandeau"><h1>Artists private acces</h1></div>
                </div>
                <div class="cont_contenu_mp"> 
                <div class="mot_passe">
        <p>In order to access the artists area, thank you to enter the password that was provided to you</p>
        
        <form action="private.php" method="post">
            <p>
            <label>Name :</label>    
            <input type="text" name="nom"><br/>   
            <label>Password :</label>
            <input type="password" name="password"><br/><br />
            <input type="submit" value="Submit" class="bouton_perso"> 
            </p>
        </form>   
                </div>
                </div>   
                
            </section>    
                
<?php
require("footer.php")
?>    


            </div>
    </body>    
</html>            