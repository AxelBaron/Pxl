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
				
				$nom_lien = $data['nom_lien'];
				$sm_lien_1 = $data['sm_lien_1'];
				$sm_lien_2 = $data['sm_lien_2'];
				$sm_lien_3 = $data['sm_lien_3'];
				$sm_lien_4 = $data['sm_lien_4'];
				$sm_lien_5 = $data['sm_lien_5'];
				$sm_lien_6 = $data['sm_lien_6'];
				$sm_lien_7 = $data['sm_lien_7'];
				$sm_lien_8 = $data['sm_lien_8'];
				
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
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='nom_lien'>Lien du menu principal</label><select class='select' name='nom_lien'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						if($data['page_id'] != $nom_lien){
							//Affiche toute les pages
							echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
						}else{
							//Sélectionne la déjà associé s'il a lieu
							echo "<option selected value='".$data['page_id']."'>".$data['titre']."</option>";
						}
					}
					echo "</select> </p> ";
				?>
			</div>

			<div>
				<label for="Nom sous menu 1">Nom du premier sous menu:</label>
				<input class="form" type="text" name="sm_nom_1" value="<?php echo $data['sm_nom_1']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 1">Page vers lequel amene le premier sous menu :</label>
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='sm_lien_1'>Lien du menu principal</label><select class='select' name='sm_lien_1'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						if($data['page_id'] != $sm_lien_1){
							//Affiche toute les pages
							echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
						}else{
							//Sélectionne la déjà associé s'il a lieu
							echo "<option selected value='".$data['page_id']."'>".$data['titre']."</option>";
						}
					}
					echo "</select> </p> ";
				?>
			</div>

			<div>
				<label for="Nom sous menu 2">Nom du deuxieme sous menu:</label>
				<input class="form" type="text" name="sm_nom_2" value="<?php echo $data['sm_nom_2']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 2">Page vers lequel amene le deuxieme sous menu :</label>
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='sm_lien_2'>Lien du menu principal</label><select class='select' name='sm_lien_2'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						if($data['page_id'] != $sm_lien_2){
							//Affiche toute les pages
							echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
						}else{
							//Sélectionne la déjà associé s'il a lieu
							echo "<option selected value='".$data['page_id']."'>".$data['titre']."</option>";
						}
					}
					echo "</select> </p> ";
				?>
			</div>	

			<div>
				<label for="Nom sous menu 3">Nom du troisième sous menu:</label>
				<input class="form" type="text" name="sm_nom_3" value="<?php echo $data['sm_nom_3']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 3">Page vers lequel amene le troisième sous menu :</label>
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='sm_lien_3'>Lien du menu principal</label><select class='select' name='sm_lien_3'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						if($data['page_id'] != $sm_lien_3){
							//Affiche toute les pages
							echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
						}else{
							//Sélectionne la déjà associé s'il a lieu
							echo "<option selected value='".$data['page_id']."'>".$data['titre']."</option>";
						}
					}
					echo "</select> </p> ";
				?>
			</div>
			
			<div>
				<label for="Nom sous menu 4">Nom du quatrième sous menu:</label>
				<input class="form" type="text" name="sm_nom_4" value="<?php echo $data['sm_nom_4']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 4">Page vers lequel amene le quatrième sous menu :</label>
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='sm_lien_4'>Lien du menu principal</label><select class='select' name='sm_lien_4'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						if($data['page_id'] != $sm_lien_4){
							//Affiche toute les pages
							echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
						}else{
							//Sélectionne la déjà associé s'il a lieu
							echo "<option selected value='".$data['page_id']."'>".$data['titre']."</option>";
						}
					}
					echo "</select> </p> ";
				?>
			</div>

			<div>
				<label for="Nom sous menu 5">Nom du cinquième sous menu:</label>
				<input class="form" type="text" name="sm_nom_5" value="<?php echo $data['sm_nom_5']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 5">Page vers lequel amene le cinquième sous menu :</label>
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='sm_lien_5'>Lien du menu principal</label><select class='select' name='sm_lien_5'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						if($data['page_id'] != $sm_lien_5){
							//Affiche toute les pages
							echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
						}else{
							//Sélectionne la déjà associé s'il a lieu
							echo "<option selected value='".$data['page_id']."'>".$data['titre']."</option>";
						}
					}
					echo "</select> </p> ";
				?>
			</div>

			<div>
				<label for="Nom sous menu 6">Nom du sixième sous menu:</label>
				<input class="form" type="text" name="sm_nom_6" value="<?php echo $data['sm_nom_6']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 6">Page vers lequel amene le sixième sous menu :</label>
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='sm_lien_6'>Lien du menu principal</label><select class='select' name='sm_lien_6'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						if($data['page_id'] != $sm_lien_6){
							//Affiche toute les pages
							echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
						}else{
							//Sélectionne la déjà associé s'il a lieu
							echo "<option selected value='".$data['page_id']."'>".$data['titre']."</option>";
						}
					}
					echo "</select> </p> ";
				?>
			</div>

			<div>
				<label for="Nom sous menu 7">Nom du septième sous menu:</label>
				<input class="form" type="text" name="sm_nom_7" value="<?php echo $data['sm_nom_7']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 7">Page vers lequel amene le septième sous menu :</label>
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='sm_lien_7'>Lien du menu principal</label><select class='select' name='sm_lien_7'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						if($data['page_id'] != $sm_lien_7){
							//Affiche toute les pages
							echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
						}else{
							//Sélectionne la déjà associé s'il a lieu
							echo "<option selected value='".$data['page_id']."'>".$data['titre']."</option>";
						}
					}
					echo "</select> </p> ";
				?>
			</div>

			<div>
				<label for="Nom sous menu 8">Nom du huitième sous menu:</label>
				<input class="form" type="text" name="sm_nom_8" value="<?php echo $data['sm_nom_8']; ?>"/>
			</div>

			<div>
				<label for="Nom sous menu 8">Page vers lequel amene le huitième sous menu :</label>
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='sm_lien_8'>Lien du menu principal</label><select class='select' name='sm_lien_8'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						if($data['page_id'] != $sm_lien_8){
							//Affiche toute les pages
							echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
						}else{
							//Sélectionne la déjà associé s'il a lieu
							echo "<option selected value='".$data['page_id']."'>".$data['titre']."</option>";
						}
					}
					echo "</select> </p> ";
				?>
			</div>

			<div>
				
			</div>


		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />
	</form>

		</section>
	</div>

</body>
</html>
