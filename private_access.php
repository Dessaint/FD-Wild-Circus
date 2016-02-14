<?php 
require("header.php")
?>    

        
            <section>
                <div class="cont_section">
                    <div class="cont_bandeau"><img src="images/bandeau_private0.jpg"></div>
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
            