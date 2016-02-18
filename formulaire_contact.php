<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="middle_resolution.css" media="screen and (max-width: 1599px)"  >
    <link rel="stylesheet" href="small_resolution.css" media="screen and (max-width: 1079px)"  > 
    <link rel="stylesheet" href="extra_small_resolution.css" media="all and (max-width: 599px)"  >     
    <link rel="shortcut icon" href="images/logo_wc.ico">
    <link href='https://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Emilys+Candy' rel='stylesheet' type='text/css'>    
    <title>Wild Circus contact form</title>
    <meta name="description" content=""/>    
    </head>
    
    <body>
        <div class="container">


<?php
    /*
    	********************************************************************************************
    	CONFIGURATION
    	********************************************************************************************
    */
    // destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
    $destinataire = 'contact@wildcircus-fd.16mb.com ';
     
    // copie ? (envoie une copie au visiteur)
    $copie = 'oui'; // 'oui' ou 'non'
     
    // Messages de confirmation du mail
    $message_envoye = "Your message has been sent !";
    $message_non_envoye = "Sending email has failed, please try again.";
     
    // Messages d'erreur du formulaire
    $message_erreur_formulaire = "You must first submit the form.";
    $message_formulaire_invalide = "Ensure that all fields are filled and that the email is without error.";
     
    /*
    	********************************************************************************************
    	FIN DE LA CONFIGURATION
    	********************************************************************************************
    */
     
    // on teste si le formulaire a été soumis
    if (!isset($_POST['submit']))
    {
    	// formulaire non envoyé
    	echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
    }
    else
    {
    	/*
    	 * cette fonction sert à nettoyer et enregistrer un texte
    	 */
    	function Rec($text)
    	{
    		$text = htmlspecialchars(trim($text), ENT_QUOTES);
    		if (1 === get_magic_quotes_gpc())
    		{
    			$text = stripslashes($text);
    		}
     
    		$text = nl2br($text);
    		return $text;
    	};
     
    	/*
    	 * Cette fonction sert à vérifier la syntaxe d'un email
    	 */
    	function IsEmail($email)
    	{
    		$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
    		return (($value === 0) || ($value === false)) ? false : true;
    	}
     
    	// formulaire envoyé, on récupère tous les champs.
    	$nom     = (isset($_POST['surname']))     ? Rec($_POST['surname'])     : '';
        $prenom  = (isset($_POST['name']))     ? Rec($_POST['name'])     : '';
        $adresse = (isset($_POST['adress']))     ? Rec($_POST['adress'])     : '';
        $postal  = (isset($_POST['postal']))     ? Rec($_POST['postal'])     : '';
        $ville   = (isset($_POST['city']))     ? Rec($_POST['city'])     : '';
        $pays    = (isset($_POST['country']))     ? Rec($_POST['country'])     : '';
        $phone   = (isset($_POST['phone']))     ? Rec($_POST['phone'])     : '';
    	$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
        $purpose = (isset($_POST['purpose']))     ? Rec($_POST['purpose'])     : '';
        $request = (isset($_POST['request']))     ? Rec($_POST['request'])     : '';
        $when_contacted   = (isset($_POST['when_contacted']))   ? Rec($_POST['when_contacted'])   : '';
        $you_email= (isset($_POST['you_email'])) ? Rec($_POST['you_email']) : '';
        $you_telephone = (isset($_POST['you_telephone'])) ? Rec($_POST['you_telephone']) : '';
     
    	// On va vérifier les variables et l'email ...
    	$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
     
    	if (($nom != '') && ($prenom != '') && ($adresse != '') && ($postal != '') && ($ville != '') && ($pays != '') && ($phone != '') && ($email != '') && ($purpose != '') && ($request != '') && ($when_contacted != '')) //&& ($you_email != '') && ($you_telephone != ''))
    	{
    		// les 4 variables sont remplies, on génère puis envoie le mail
    		$headers  = 'MIME-Version: 1.0' . "\r\n";
    		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
    				'Reply-To:'.$email. "\r\n" .
    				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
    				'Content-Disposition: inline'. "\r\n" .
    				'Content-Transfer-Encoding: 7bit'." \r\n" .
    				'X-Mailer:PHP/'.phpversion();
    	
    		// envoyer une copie au visiteur ?
    		if ($copie == 'oui')
    		{
    			$cible = $destinataire.','.$email;
    		}
    		else
    		{
    			$cible = $destinataire;
    		};
     
    		// Remplacement de certains caractères spéciaux
    		$adresse = str_replace("&#039;","'",$adresse);
    		$adresse = str_replace("&#8217;","'",$adresse);
    		$adresse = str_replace("&quot;",'"',$adresse);
    		$adresse = str_replace('<br>','',$adresse);
    		$adresse = str_replace('<br />','',$adresse);
    		$adresse = str_replace("&lt;","<",$adresse);
    		$adresse = str_replace("&gt;",">",$adresse);
    		$adresse = str_replace("&amp;","&",$adresse);
     
    		// Envoi du mail
 //   		if (mail($cible, $nom, $prenom, $pays, $phone, $email, $purpose, $request, $headers))
            if (mail($cible, $nom, $email, $purpose, $headers))
    		{
    			echo '<p>'.$message_envoye.'</p>'."\n";
    		}
    		else
    		{
    			echo '<p>'.$message_non_envoye.'</p>'."\n";
    		};
    	}
    	else
    	{
    		// une des 3 variables (ou plus) est vide ...
    		echo '<p>'.$message_formulaire_invalide.' <a href="contact.php">Retour au formulaire</a></p>'."\n";
    	};
    }; // fin du if (!isset($_POST['envoi']))
    ?>
            
         </div>
    </body>    
</html>        