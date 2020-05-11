<?php
// on déclare notre fonction
function identity($lastName,$firstName,$age)
{
// on retourne le paramètre
  return $lastName . ' ' . $firstName . ' tu as' . $age;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 4 exo 4</title>
</head>
<body>
  <?php
// si on affiche le paramètre
// echo de la variable
  $text = identity('Dupont','Tom','14')?>
  <p>Bonjour <?php echo $text; ?> ans</p>
  </body>
</html>
