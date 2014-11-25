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

	<?php 
		include("connectionbdd.php");
	?>

		<section>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter un Contenu</h2>

	<form action="traitement-ajouter-contenu.php?" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="titre">Titre du contenu</label>
				<input class="form" type="text" name="titre"/>
			</div>
			
			<div>
				<label for="contenu">Contenu</label>
				<textarea class="form" name="contenu"></textarea>
			</div>

			<div>
				<label for="id_page_">A quelle page voulez vous affecter ce contenu ?</label>
				<select name="id_page_">
					<?php  
						
							$sql="SELECT * FROM page";
							$req = $pdo->query($sql);
		
							while ( $data = $req->fetch()) {
								echo "<option value=".$data['page_id'].">".$data["titre"]."</option>";
							 }
						
					
					?>
				</select>
			</div>

		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	</section>
	</div>

	</body>
</html>