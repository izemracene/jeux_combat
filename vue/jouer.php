<p><a href="?deconnexion=1">Déconnexion</a></p>
    
<fieldset>
    <legend>Mes informations</legend>
    <p>
      Nom : <?= htmlspecialchars($perso->nom()) ?><br />
      Dégâts : <?= $perso->degats() ?>
    </p>
</fieldset>
  
<fieldset>
    <legend>Qui frapper ?</legend>
    <p>
      <?php
      $persos = $manager->getList($perso->nom());

      if (empty($persos))
        {
          echo 'Personne à frapper !';
        }

      else
        {
        foreach ($persos as $unPerso)
    {
      echo '<a href="?frapper=', $unPerso->id(), '">', htmlspecialchars($unPerso->nom()), '</a> (dégâts : ', $unPerso->degats(), ')<br />';
    }
      }
      ?>
    </p>
</fieldset>
