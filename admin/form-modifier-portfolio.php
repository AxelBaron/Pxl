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
			 
			 <form action="traitement-modification-admin.php?num=<?php echo $data['portfolio_id']?>" method="POST">
	
		<fieldset>
			<legend>Formulaire de Modification :</legend>
			
			<div>
				<label for="Etudiant">Etudiant</label>
				<input type="text" name="etudiant" value="<?php echo $data['etudiant']; ?>"/>
			</div>

			<div>
				<label for="Lien">Lien</label>
				<input type="text" name="lien" value="<?php echo $data['lien']; ?>"/>
			</div>

			<div>
				<label for="image">Image</label>
				<input type="text" name="image" value="<?php echo $data['image']; ?>"/>
			</div>

			<div>
				<label for="annees">Année optiention diplome</label>
				<input type="text" name="annees" value="<?php echo $data['annees']; ?>"/>
			</div>
						
		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />
	</form>

		</section>
	</div>

</body>
</html>
