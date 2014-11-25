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
				$page_id = $_GET["page_id"];
				$sql="SELECT * FROM page 
					  WHERE page_id= $page_id";
				$liste = $pdo->query($sql);
				$data = $liste->fetch();


			 ?>
			
			<h1>#TIM Matane Administration</h1>	
			<h2>Modifier la page: <?php echo $data['titre']; ?> </h2>
			 
			 <form action="traitement-modifier-page.php?page_id=<?php echo $data['page_id']?>" method="POST">
	
		<fieldset>
			<legend>Formulaire de Modification :</legend>
			
			<div>
				<label for="Titre">Titre de la page</label>
				<input class="form" type="text" name="titre" value="<?php echo $data['titre']; ?>"/>
			</div>

			<div>
				<label for="Resumé">Resumé en haut de page</label>
				<textarea class="form" type="text" name="resume"><?php echo $data['resume']; ?></textarea>
			</div>

			<p style="color:red;">Inserer un bouton si l'utilisateur veux modifier l'ordre un contenu </p>

			<div>
				<label for="resume">Choisisez dans quelle ordre s'afficherons les contenus dans votre page. (1 = haut de page)</label><br /><br />
					<?php 
					 	$sql2="SELECT * FROM contenu";
					 	$pdo->query($sql2);
					 	$liste = $pdo->query($sql2);

					 	while ($contenu = $liste->fetch()) {
					 		echo $contenu['titre']." <select> <option value='position'>1</option> <br />";  
					 	}
					?>
			</div>
		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />

		</section>
	</div>

</body>
</html>