<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style_admin.css">
	<title>#TIM Matane - Administration principale</title>
</head>
<body>

	<?php include("menu-admin.php");?>

	<div class="right">

		<section>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter un Administrateur</h2>

	<form action="traitement-ajouter-admin.php" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="usager">Pseudo de connection usager / loggin</label>
				<input type="text" name="usager"/>
			</div>
			
			<div>
				<label for="mdp">Mot de Passe</label>
				<input type="text" name="mdp" />
			</div>
			
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" />
			</div>
			
			<div>
				<label for="prenom">Prénom</label>
				<input type="text" name="prenom" />
			</div>

			<div>
				<label for="courriel">Courriel</label>
				<input type="text" name="courriel" />
			</div>

		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	</section>
	</div>
	</body>
</html>