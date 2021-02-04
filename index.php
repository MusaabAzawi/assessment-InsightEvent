<?php
include 'database.php';

//ini_set('display_errors', 1);
$contactform = getData();

?>

<!-- <html>
    <body>
            
    <?php foreach ($contactform as $form) {?>
    <h2><?=$form->voornaam ?></h2>
    <p><?=$form->achternaam ?></p>
    <h2><?=$form->voorletters ?></h2>
    <p><?=$form->postcode ?></p>
    <h2><?=$form->huisnummer ?></h2>
    <p><?=$form->email ?></p>

    <?php }  ?>
 
    </body>
</html> -->