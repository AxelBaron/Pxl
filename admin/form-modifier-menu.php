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
				$menu_id = $_GET["menu_id"];
				$sql="SELECT * FROM menu WHERE menu_id= $menu_id";
				$liste = $pdo->query($sql);
				$data = $liste->fetch();
			 ?>
			
			<h1>#TIM Matane Administration</h1>	
			<h2>Modifier le Menu: <?php echo $data['nom']; ?> </h2>
			 
			 <form action="traitement-modifier-menu.php?menu_id=<?php echo $data['menu_id']?>" method="POST">
	
		<fieldset>
			<legend>Formulaire de Modification :</legend>
			
			<div>
				<label for="Nom">Nom :</label>
				<input class="form" type="text" name="nom" value="<?php echo $data['nom']; ?>"/>
			</div>

			<div>
				<label for="Nom lien">Page vers lequel amene le menu :</label>
				<input class="form" type="text" name="nom_lien" value="<?php echo $data['nom_lien']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 1">Nom du premier sous menu:</label>
				<input class="form" type="text" name="sm_nom_1" value="<?php echo $data['sm_nom_1']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 1">Page vers lequel amene le premier sous menu :</label>
				<input class="form" type="text" name="sm_lien_1" value="<?php echo $data['sm_lien_1']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 2">Nom du deuxieme sous menu:</label>
				<input class="form" type="text" name="sm_nom_2" value="<?php echo $data['sm_nom_2']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 2">Page vers lequel amene le deuxieme sous menu :</label>
				<input class="form" type="text" name="sm_lien_2" value="<?php echo $data['sm_lien_2']; ?>"/>
			</div>	

			<div>
				<label for="Nom sous menu 3">Nom du troiième sous menu:</label>
				<input class="form" type="text" name="sm_nom_3" value="<?php echo $data['sm_nom_3']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 3">Page vers lequel amene le troisième sous menu :</label>
				<input class="form" type="text" name="sm_lien_3" value="<?php echo $data['sm_lien_3']; ?>"/>
			</div>
			
			<div>
				<label for="Nom sous menu 4">Nom du quatrième sous menu:</label>
				<input class="form" type="text" name="sm_nom_4" value="<?php echo $data['sm_nom_4']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 4">Page vers lequel amene le quatrième sous menu :</label>
				<input class="form" type="text" name="sm_lien_4" value="<?php echo $data['sm_lien_4']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 5">Nom du cinquième sous menu:</label>
				<input class="form" type="text" name="sm_nom_5" value="<?php echo $data['sm_nom_5']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 5">Page vers lequel amene le cinquième sous menu :</label>
				<input class="form" type="text" name="sm_lien_5" value="<?php echo $data['sm_lien_5']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 6">Nom du sixième sous menu:</label>
				<input class="form" type="text" name="sm_nom_6" value="<?php echo $data['sm_nom_6']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 6">Page vers lequel amene le sixième sous menu :</label>
				<input class="form" type="text" name="sm_lien_6" value="<?php echo $data['sm_lien_6']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 7">Nom du septième sous menu:</label>
				<input class="form" type="text" name="sm_nom_7" value="<?php echo $data['sm_nom_7']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 7">Page vers lequel amene le septième sous menu :</label>
				<input class="form" type="text" name="sm_lien_7" value="<?php echo $data['sm_lien_7']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 8">Nom du huitième sous menu:</label>
				<input class="form" type="text" name="sm_nom_8" value="<?php echo $data['sm_nom_8']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 8">Page vers lequel amene le huitième sous menu :</label>
				<input class="form" type="text" name="sm_lien_8" value="<?php echo $data['sm_lien_8']; ?>"/>
			</div>


		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />
	</form>

		</section>
	</div>

</body>
</html>