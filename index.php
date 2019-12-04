<?php
$age = 23;
$gender = 'Homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP Partie2 exo2</title>
</head>
<body>
  <p>
    <?php
    /* penser à créer les conditions idéales pour une meilleure utilisation client
    avec les bons messages d'erreur pour éguiller l'utilisateur, ici deux
    conditions d'erreur, si l'age n'est pas bon ou si le genre n'est pas bon */
    if($age > 0 && $age < 100){
      if($age < 18 && $gender == 'Homme'){
        ?>
        Vous êtes un homme mineur
      <?php } elseif($age >= 18 && $gender == 'Homme'){ ?>
        Vous êtes un homme majeur
      <?php } elseif($age < 18 && $gender == 'Femme'){ ?>
        Vous êtes une femme mineure
      <?php } elseif($age >= 18 && $gender == 'Femme'){ ?>
        Vous êtes une femme majeure
      <?php } else { ?>
        Genre non valide
      <?php }
    } else{
      ?>
      Age non valide
    <?php } ?>
  </p>
</body>
</html>
