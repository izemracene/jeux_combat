<?php include('controleur/controler.php');
      include('vue/vue.php')
 ?>


<?php
if (isset($message)) // On a un message à afficher ?
{
  echo '<p>', $message, '</p>'; // Si oui, on l'affiche.
}

if (isset($perso)) // Si on utilise un personnage (nouveau ou pas).
{
include('vue/jouer.php');
}
elseif(isset($message)){
include('vue/formulaire.php');
?>

<fieldset>
      <legend>listes des <?= $manager->count() ?> personnes enregistrer :</legend>
      <p>
<?php 
$persos = $manager->getAllList();
foreach ($persos as $unPerso)
  {
    echo '<span>', htmlspecialchars($unPerso->nom()), '</span> (dégâts : ', $unPerso->degats(), ')<br />';
  }
  ?>
   </p>
    </fieldset>
  <?php
}
else 
{
include('vue/formulaire.php');
}
?>
  
<?php
if (isset($perso)) // Si on a créé un personnage, on le stocke dans une variable session afin d'économiser une requête SQL.
{
  $_SESSION['perso'] = $perso;
}