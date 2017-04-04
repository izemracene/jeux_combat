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