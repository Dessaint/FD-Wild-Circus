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
    <title>Wild Circus artits news</title>
    <meta name="description" content="An information base on Wild Circus and the circus in general"/>    
    </head>
    
    <body>
        <div class="container">


<?php 
require("header.php")
?>    

        
    <section>
        <div clas="cont_section">
                    <div class="cont_bandeau"><img src="images/bandeau_news.jpg" alt="Wild Circus news presentation"/></div>
                    <div class="texte_bandeau_spec"><h1>News</h1></div>   
        </div>
        
            <div class="cont_contenu"> 
                <div class="cont_news">
                <?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u258268849_wild;charset=utf8', 'u258268849_root', '9r7ly9i36f');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On récupère les 5 derniers billets

$req = $bdd->query('SELECT id, sujet, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM wild_news ORDER BY date_creation DESC LIMIT 0, 10');

while ($donnees = $req->fetch())
{
?>
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['sujet']); ?> - <?php echo htmlspecialchars($donnees['titre']); ?> - <em>on <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>    

    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
</div>

<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>                
            </div> 
        </div>        
    </section>    
                
<?php
require("footer.php")
?>    

        </div>
    </body>    
</html>            