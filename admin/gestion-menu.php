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

<h1>Menu</h2>
<?php
	include_once "connectionbdd.php";
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM menu";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
		}
?>

<!-- Cocher, ajouter et supprimer -->
<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
<label>Tout cocher/décocher</label>
<a href="form-ajout-menu.php">Ajouter</a>
<a href="#">Supprimer</a>

<!-- Liste des Menu -->
<form>
	<?php
		$sql = "SELECT * FROM menu";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div>");
			echo("<input type='checkbox' id='$nbEntre' />");
			echo($donnees["nom"]);
			echo("<a href='modifier-menu.php?menu_id=".$donnees['menu_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
	
</form>
</section>
	</div>

</body>
</html>
