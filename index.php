<?php
$badWord = $_GET['censura'];
$paragrafo = str_replace($badWord, '***', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BadWords</title>
  </head>
  <body>
    <h1>parola da sostituire: <?php echo $badWord?></h1>
    <p><?php echo $paragrafo; ?></p>
    <h2>Lunghezza:<?php echo strlen($paragrafo); ?></h2>
  </body>
</html>
