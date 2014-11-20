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
			<?php 
				include("connectionbdd.php");
				$portfolio_id = $_GET["portfolio_id"];
				$sql="SELECT * FROM portfolio WHERE portfolio_id= $portfolio_id";
				$liste = $pdo->query($sql);
				$data = $liste->fetch();
			 ?>
			
			<h1>#TIM Matane Administration</h1>	
			<h2>Modifier le portfolio de: <?php echo $data['etudiant']; ?> </h2>
			 
			 <form action="traitement-modifier-portfolio.php?portfolio_id=<?php echo $data['portfolio_id']?>" method="POST" enctype="multipart/form-data">
	
		<fieldset>
			<legend>Formulaire de Modification :</legend>
			
			<div>
				<label for="Etudiant">Etudiant</label>
				<input class="form"type="text" name="etudiant" value="<?php echo $data['etudiant']; ?>"/>
			</div>

			<div>
				<label for="Lien">Lien</label>
				<input class="form"type="text" name="lien" value="<?php echo $data['lien']; ?>"/>
			</div>

			<div>
				<label for="image-preview">Image de preview</label><br/>
				<p> Attention ! Veuillez télécharger une image carré de 250 pixels x 250 pixels</p>
    			<input type="file" name="fileToUpload" id="fileToUpload">
			</div>

			<div>
				<label for="annees">Année optiention diplome</label>
				<input class="form"type="text" name="annees" value="<?php echo $data['annees']; ?>"/>
			</div>
						
		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />
	</form>

		</section>
	</div>

</body>
</html>
