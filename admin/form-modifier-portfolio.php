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
				<label for="annees">Année optiention diplome</label>
				<input class="form"type="text" name="annee" value="<?php echo $data['annees']; ?>"/>
			</div>

			<?php 
				include('connectionbdd.php');
				$sql ="SELECT * FROM portfolio WHERE portfolio_id = $portfolio_id";
				$liste=$pdo->query($sql);
				$data=$liste->fetch();

				if ($data['image']=="") {
					echo "<div>";
					echo "<label for='image-preview'>Image située en haut de page.</label><br/>";
					echo "<p> Attention ! Veuillez télécharger une image de 300 pixels x 312 pixels.</p>";
					echo "<input type='file' name='fileToUpload' id='fileToUpload'>";
					echo "</div>";
				}else{
					echo "<a href='#' onclick=''><button> Modifier l'image existante</button></a>";
				}

			 ?>
						
		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />
	</form>

		</section>
	</div>

</body>
</html>
