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

<h1>Admin</h2>
<?php
	include_once "connectionbdd.php";
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM admin";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
		}
?>

<!-- Cocher, ajouter et supprimer -->
<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
<label>Tout cocher/décocher</label>
<a href="form-ajout-admin.php">Ajouter</a>
<a href="#">Supprimer</a>

<!-- Liste des Admin -->
<form>
	<?php
		$sql = "SELECT * FROM admin";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div>");
			echo("<input type='checkbox' id='$nbEntre' />");
			echo($donnees["usager"]);
			echo("<a href='modifier-admin.php?admin_id=".$donnees['admin_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
	
</form>
</section>
</div>
</body>
</html>
