<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <?php
    //echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';         Il faut traduire ça
    $gender = 'Homme';

    if ($gender != 'Homme') {
      echo 'C\'est une développeuse !';
    }
    else {
      echo 'C\'est un développeur !';
    }
    ?>
  </body>
</html>
