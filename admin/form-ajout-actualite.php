<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire d'ajout d'Actualités</title>
		<meta charset="UTF-8"/>
	</head>
	

	<body>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter une Actualité</h2>

	<form action="traitement-ajouter-actualité.php" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="titre">Titre</label>
				<input type="text" name="titre"/>
			</div>
			
			<div>
				<label for="auteur">Auteur</label>
				<input type="text" name="auteur" />
			</div>
			
			<div>
				<label for="date">Date</label>
				<input type="date" name="date" />
			</div>
			
			<div>
				<label for="image-preview">Image de preview</label>
				<input type="text" name="image-preview" />
			</div>
			
			<div>
				<label for="contenu">Contenu</label>
				<input type="text" name="contenu" />
			</div>
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	
	</body>
</html>