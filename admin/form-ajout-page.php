<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire d'ajout Page</title>
		<meta charset="UTF-8"/>
	</head>
	

	<body>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter un Portfolio</h2>

	<form action="traitement-ajouter-page.php" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="titre">Titre de la page</label>
				<input type="text" name="titre"/>
			</div>
			
			<div>
				<label for="resume">Résumé de la page. ( Situé en haut de page )</label>
				<input type="text" name="resume" />
			</div>
			
			<div>
				<label for="nav_page_nom_1">Nom du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_nom_1" />
			</div>

			<div>
				<label for="nav_page_lien_1">Adresse du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_lien_1" />
			</div>
			<div>
				<label for="nav_page_nom_2">Nom du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_nom_2" />
			</div>

			<div>
				<label for="nav_page_lien_2">Adresse du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_lien_2" />
			</div>
			<div>
				<label for="nav_page_nom_3">Nom du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_nom_3" />
			</div>

			<div>
				<label for="nav_page_lien_3">Adresse du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_lien_3" />
			</div>
			<div>
				<label for="nav_page_nom_4">Nom du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_nom_4" />
			</div>

			<div>
				<label for="nav_page_lien_4">Adresse du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_lien_4" />
			</div>
			<div>
				<label for="nav_page_nom_5">Nom du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_nom_5" />
			</div>

			<div>
				<label for="nav_page_lien_5">Adresse du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_lien_5" />
			</div>
			<div>
				<label for="nav_page_nom_6">Nom du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_nom_6" />
			</div>

			<div>
				<label for="nav_page_lien_6">Adresse du lien de navigation interne à la page</label>
				<input type="text" name="nav_page_lien_6" />
			</div>
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	
	</body>
</html>