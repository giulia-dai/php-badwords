<?php 
$testo= $_GET['testo'];
$censura=$_GET['censorship'];

$parola_nascosta = str_replace($censura,"***",$testo);
$lunghezza_censura= strlen($parola_nascosta);

?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
 </head>
 <body>

   <p> <?php echo $testo ?> </p>
   <h4><?php echo 'il testo è lungo' . ' ' . strlen($testo) . ' ' . 'caratteri.' ?></h4>

   <h3>Nuovo testo con censure</h3>
   <p><?php echo $parola_nascosta ?></p>
   <h4>il nuovo testo è lungo <?php echo $lunghezza_censura?> caratteri</h4>

 </body>
</html>