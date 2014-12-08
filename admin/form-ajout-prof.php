<?php include('header-admin.php') ?>
<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter un Profeseur</h2>

	<form action="traitement-ajouter-prof.php" method="POST" enctype="multipart/form-data">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="etudiant">Prénom</label>
				<input class="form" type="text" name="prenom"/>
			</div>
			
			<div>
				<label for="lien">Nom</label>
				<input class="form" type="text" name="nom" />
			</div>

			<div>
				<label for="annee">Rôle</label>
				<input class="form" type="text" name="role" />
			</div>

			<div>
				<label for="annee">Courriel</label>
				<input class="form" type="text" name="courriel" />
			</div>

			<div>
				<label for="annee">Téléphone de poste</label>
				<input class="form" type="number" name="tel_poste" />
			</div>

			<div>
				<label for="annee">Bureau</label>
				<input class="form" type="text" name="bureau" />
			</div>

			<div>
				<label for="annee">Site Web</label>
				<input class="form" type="text" name="site" />
			</div>

			<div>
				<label for="image-preview">Image de preview</label><br/>
				<p> Attention ! Veuillez télécharger une image carré de 250 pixels x 250 pixels</p>
    			<input type="file" name="fileToUpload" id="fileToUpload">
			</div>
			
			
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>