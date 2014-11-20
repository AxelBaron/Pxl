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
	<h2>Ajouter un Portfolio</h2>

	<form action="traitement-ajouter-portfolio.php" method="POST" enctype="multipart/form-data">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="etudiant">Etudiant</label>
				<input class="form" type="text" name="etudiant"/>
			</div>
			
			<div>
				<label for="lien">Lien du PortFolio</label>
				<input class="form" type="text" name="lien" />
			</div>
			
			<div>
				<label for="image-preview">Image de preview</label><br/>
				<p> Attention ! Veuillez télécharger une image carré de 250 pixels x 250 pixels</p>
    			<input type="file" name="fileToUpload" id="fileToUpload">
			</div>
			
			<div>
				<label for="annee">Etudiant diplomé en</label>
				<input class="form" type="text" name="annee" />
			</div>
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	</section>
	</div>
	
	</body>
</html>