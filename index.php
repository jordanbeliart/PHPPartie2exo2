<?php
$age = 13;
$gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie2 exo2</title>
  </head>
  <body>
    <?php
      if ($age < 18 && $gender == 'Homme') {
        echo 'Vous êtes un homme et vous êtes mineur';
      } elseif ($gender == 'Homme'){
        echo 'Vous êtes un homme et vous êtes majeur';
      } elseif ($age < 18) {
        echo 'Vous êtes une femme et vous êtes mineure';
      } else {
        echo 'Vous êtes une femme et vous êtes majeure';
      }
      ?>
  </body>
</html>
