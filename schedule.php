<?php 
require("header.php")
?>    

        
            <section>
                <div class="cont_section">
                    <div class="cont_bandeau"><img src="images/bandeau_schedule.jpg"/></div>
                    <div class="texte_bandeau_spec"><h1>Schedule of events 2016</h1></div>   
                </div>
                <div class="cont_contenu">
                    <div class="cont_schedule">
                    
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

$req = $bdd->query('SELECT id, lieu, pays, accroche, DATE_FORMAT(date_debut, \'%d/%m à %Hh%imin%ss\') AS date_debut_fr, DATE_FORMAT(date_fin, \'%d/%m at %Hh%imin%ss\') AS date_fin_fr FROM wild_schedule ORDER BY date_debut DESC LIMIT 0, 10');

while ($donnees = $req->fetch())
{
?>
<div class="schedule">
    <h3>
        <?php echo htmlspecialchars($donnees['lieu']); ?> - <?php echo htmlspecialchars($donnees['pays']); ?><br /><em>from <?php echo $donnees['date_debut_fr']; ?> to <?php echo $donnees['date_fin_fr']; ?></em>
    </h3>    

    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['accroche']));
    ?>
    <br />
    <em><a href="contact.php">Booking</a></em>
    </p>
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
            