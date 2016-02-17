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
    <title>Wild Circus contact form</title>
    <meta name="description" content="You have a question? You want to book! And even become partner"/>    
    </head>
    
    <body>
        <div class="container">

<?php 
require("header.php")
?>    

        
            <section>
                <div id="ancre_8"></div>
                <div class="cont_section">
                    <div class="cont_bandeau"><img src="images/bandeau_contact.jpg"/></div>    
                    <div class="texte_bandeau"><h1>Contact us</h1></div>   
                </div>
                <div class="cont_contenu">
                    <form action="mailto:franck.dessaint@gmail.com" method="post" name="contact">
                        <fieldset>   
                        <legend>Personal informations</legend>
                        <p>
                            <label>Surname<span class="red">*</span></label><input type="text" name="surname" autofocus required><br />
                            <label>Name<span class="red">*</span></label><input type="text" name="name" required><br />
                            <label>Adress</label><input type="text" name="adress"><br />
                            <label>Postal code</label><input type="text" name="postal"><br />
                            <label>City</label><input type="text" name="city"><br />
                            <label>Country<span class="red">*</span></label><input type="text" name="country" required><br />
                            <label>Phone number<span class="red">*</span></label><input type="tel" name="phone" required><br />
                            <label>Email<span class="red">*</span></label><input type="email" name="email" required><br />
                        </p>     
                        <p><span>Thank you to verify your email address before sending the form. If it is incorrect we can not answer you!</span></p>
                        </fieldset>
                        
                        <fieldset>
                        <legend>Your request</legend>
                            <p>
                            <label>What is the purpose of your request<span class="red">*</span></label>
                            <select name="purpose" id="request" required>
                                <option value="bug_report">Report a bug</option>
                                <option value="reservation">Booking show</option>
                                <option value="partner">Become partner</option>
                                <option value="question">A question</option>
                                <option value="other">Other</option>
                            </select>
                                <br />
                            <label>Your request<span class="red">*</span></label><textarea name="request" rows="5" cols="35" required></textarea><br />
                            </p>    
                        </fieldset>
                        
                        <fieldset>
                        <legend>Your preferences to be contacted</legend>
                            <p>
                                <label>When would you like to be contacted?</label><input type="text" name="when_contacted"><br />
                                <label>How do you prefer to be contacted ?</label><input type="radio" name="you_email" id="prefer"/>By email
                                <input type="radio" name="you_telephone" id="prefer1"/>By telephone<br />
                            </p>             
                        </fieldset><br />
                            <input type="submit" name="submit" value="Submit" class="bouton_perso">
                        <input type="reset" value="Reset" class="bouton_perso"><br />
                        <p><span class="red">*</span>Compulsory indication</p>
                    
                    </form>
                    
                    <aside>
                        <div class="cont_contact">
                            <div class="info_contact">
                            <p>Like you cant imagine, we are always on the road. So please, complete this form to take contact with us.</p>
                            </div>
                            <div class="img_contact"><img src="images/camion_cirque.png" alt="Team Wild Circus is perpetually on the road"/></div>   
                        </div>
                    </aside>
                </div>    
            </section>    
                
<?php
require("footer.php")
?>    

        </div>
    </body>    
</html>            