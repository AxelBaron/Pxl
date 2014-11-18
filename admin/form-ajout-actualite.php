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
	<h2>Ajouter une Actualité</h2>

	<form action="traitement-ajouter-actualite.php" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="titre">Titre</label><br/>
				<input class="form" type="text" name="titre"/>
			</div>
			
			<div>
				<label for="auteur">Auteur</label><br/>
				<input class="form" type="text" name="auteur" />
			</div>
			
			<div>
				<label for="date">Date</label><br/>
				<input class="form" type="date" name="date" />
			</div>
			
			<div>
				<label for="image-preview">Image de preview</label><br/>
				<input class="form" type="text" name="image-preview" />
			</div>
			
			<div>
				<label for="contenu">Contenu</label><br/>
				<textarea class="form" name="contenu"></textarea>
			</div>
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	
	</body>
	</section>
	</div>
</html>
