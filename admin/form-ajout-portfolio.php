<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire d'ajout de Portfolio</title>
		<meta charset="UTF-8"/>
	</head>
	

	<body>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter un Portfolio</h2>

	<form action="traitement-ajouter-portfolio.php" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="etudiant">Etudiant</label>
				<input type="text" name="etudiant"/>
			</div>
			
			<div>
				<label for="lien">Lien du PortFolio</label>
				<input type="text" name="lien" />
			</div>
			
			<div>
				<label for="image">Image de preview</label>
				<input type="text" name="image" />
			</div>
			
			<div>
				<label for="annee">Etudiant diplomé en</label>
				<input type="text" name="annee" />
			</div>
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	
	</body>
</html>