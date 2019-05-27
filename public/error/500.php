<?php
require_once '../../inc/config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo ''. $sitename. ' | Error 500';?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

  </head>
  <body>

            <section id="error">
                <h2>ERROR 500</h2>
                <h3>Upsss, stalo sa niečo neočakávané, stránka nebola nájdená!</h3>
                <h3>Pokracuj prosím kliknutím na tlačítko!</h3>
                <p>&nbsp</p>
                 <a href="../../index.php"><button  type="button" class="btn btn-primary btn-md">Pokračovať na <?php echo $sitename ;?></button></a>
            </section>