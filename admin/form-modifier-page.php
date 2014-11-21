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
				print_r($data);


			 ?>
			
			<h1>#TIM Matane Administration</h1>	
			<h2>Modifier la page: <?php echo $data['page_id']; ?> </h2>
			 
			 <form action="traitement-modifier-page.php?page_id=<?php echo $data['page_id']?>" method="POST">
	
		<fieldset>
			<legend>Formulaire de Modification :</legend>
			
			<div>
				<label for="Titre">Titre de la page</label>
				<input class="form" type="text" name="titre" value="<?php echo $data['titre']; ?>"/>
			</div>

			<div>
				<label for="Resumé">Resumé en haut de page</label>
				<input class="form" type="text" name="resume" value="<?php echo $data['resume']; ?>"/>
			</div>

			<div>
				<label for="Nom Nav inter page 1">Nom du premier lien vers la page</label>
				<input class="form" type="text" name="nav_page_nom_1" value="<?php echo $data['nav_page_nom_1']; ?>"/>
			</div>

			<div>
				<label for="Lien du premier lien vers la page">Lien du premier lien vers la page</label>
				<input class="form" type="text" name="nav_page_lien_1" value="<?php echo $data['nav_page_lien_1']; ?>"/>
			</div>

			<div>
				<label for="Nom Nav inter page 2">Nom du deuxième lien vers la page</label>
				<input class="form" type="text" name="nav_page_nom_2" value="<?php echo $data['nav_page_nom_2']; ?>"/>
			</div>

			<div>
				<label for="Lien du deuxieme lien vers la page">Lien du deuxieme lien vers la page</label>
				<input class="form" type="text" name="nav_page_lien_2" value="<?php echo $data['nav_page_lien_2']; ?>"/>
			</div>

			<div>
				<label for="Nom Nav inter page 3">Nom du troisième lien vers la page</label>
				<input class="form" type="text" name="nav_page_nom_3" value="<?php echo $data['nav_page_nom_3']; ?>"/>
			</div>

			<div>
				<label for="Lien du troisième lien vers la page">Lien du troisième lien vers la page</label>
				<input class="form" type="text" name="nav_page_lien_3" value="<?php echo $data['nav_page_lien_3']; ?>"/>
			</div>

			<div>
				<label for="Nom Nav inter page 4">Nom du quatrième lien vers la page</label>
				<input class="form" type="text" name="nav_page_nom_4" value="<?php echo $data['nav_page_nom_4']; ?>"/>
			</div>

			<div>
				<label for="Lien du quatrième lien vers la page">Lien du quatrième lien vers la page</label>
				<input class="form" type="text" name="nav_page_lien_4" value="<?php echo $data['nav_page_lien_4']; ?>"/>
			</div>

			<div>
				<label for="Nom Nav inter page 5">Nom du cinquième lien vers la page</label>
				<input class="form" type="text" name="nav_page_nom_5" value="<?php echo $data['nav_page_nom_5']; ?>"/>
			</div>

			<div>
				<label for="Lien du cinquième lien vers la page">Lien du cinquième lien vers la page</label>
				<input class="form" type="text" name="nav_page_lien_5" value="<?php echo $data['nav_page_lien_5']; ?>"/>
			</div>

			<div>
				<label for="Nom Nav inter page 6">Nom du sixième lien vers la page</label>
				<input class="form" type="text" name="nav_page_nom_6" value="<?php echo $data['nav_page_nom_6']; ?>"/>
			</div>


			<div>
				<label for="Lien du sixième lien vers la page">Lien du sixième lien vers la page</label>
				<input class="form" type="text" name="nav_page_lien_6" value="<?php echo $data['nav_page_lien_6']; ?>"/>
			</div>

			<div>
				<label for="">Contenu de la page</label>
				<textarea name="contenu" ><?php echo $data['nav_page_lien_6'] ?></textarea>
			</div>



			
			
		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />

		</section>
	</div>

</body>
</html>