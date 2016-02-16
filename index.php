
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
    <title>Wild Circus</title>
    <meta type="description">    
    </head>
    
    <body>
        <div class="container">

<?php 
require("header.php")
?>    

        
            <section>
                <div id="ancre_5"></div>
                <div class="cont_section">
                    <div class="cont_bandeau"><img src="images/bandeau_home.jpg"/></div></div>
                    <div class="texte_bandeau"><h1>Current performances program</h1> 
                </div>    
                <div class="cont_contenu">    
                    <div class="first_performance"><a href="first_performance.php#ancre_1"><img src="images/amazing_fire.jpg"/></a>
                    <div class="performance_text">~ Amazing Fire ~</div>
                    </div>
                    
                    <div class="astuce_clown"><a href="astuce_performance.php#ancre_4"><img src="images/clown_astuce.png"/></a></div> 
                    
                    <div class="second_performance"><a href="second_performance.php#ancre_2"><img src="images/poodle_trainer.jpg"/></a>
                    <div class="performance_text">~ The Poodle Trainer ~</div>
                    </div>
                    
                    <div class="astuce_clown"><a href="astuce_performance.php#ancre_4"><img src="images/clown_astuce_2.png"/></a></div> 
                    
                    <div class="third_performance"><a href="third_performance.php#ancre_3"><img src="images/freestyle_bike.jpg"/></a>
                    <div class="performance_text">~ Crazy Freestyle Bikes ~</div>    
                    </div>
                </div>
                <div class="cont_scroll">
                    <div class="scroll_img"></div>
                </div>
            </section>    
                
<?php
require("footer.php")
?>    

             </div>
    </body>    
</html>