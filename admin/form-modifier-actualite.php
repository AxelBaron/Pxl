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
				$actu_id = $_GET["actu_id"];
				$sql="SELECT * FROM actualite WHERE actu_id= $actu_id";
				$liste = $pdo->query($sql);
				$data = $liste->fetch();
			 ?>
			
			<h1>#TIM Matane Administration</h1>	
			<h2>Modifier l'Actualité: <?php echo $data['titre']; ?> </h2>
			 
			 <form action="traitement-modifier-actualite.php?actu_id=<?php echo $data['actu_id']?>" method="POST" enctype="multipart/form-data" >
	
		<fieldset>
			<legend>Formulaire de Modification :</legend>
			
			<div>
				<label for="titre">Titre</label>
				<input class="form" type="text" name="titre" value="<?php echo $data['titre']; ?>"/>
			</div>

			<div>
				<label for="Auteur">Auteur</label>
				<input class="form" type="text" name="auteur" value="<?php echo $data['auteur']; ?>"/>
			</div>

			<div>
				<label for="Date">Date</label>
				<input class="form" type="date" name="date" value="<?php echo $data['date']; ?>"/>
			</div>

			<div>
				<label for="image-preview">Image de preview</label><br/>
				<p> Attention ! Veuillez télécharger une image de 680 pixels x 200 pixels</p>
    			<input type="file" name="fileToUpload" id="fileToUpload">
			</div>

			<div>
				<label for="Contenu">Contenu</label>
				<textarea name="contenu"><?php echo $data['contenu']; ?> </textarea>
			</div>
			
			
		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />
	</form>
		</section>
	</div>

</body>
</html>
