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

<h1>Portfolio</h2>
<?php
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM portfolio";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
		}
?>

<!-- Cocher, ajouter et supprimer -->
<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
<label>Tout cocher/décocher</label>
<input type='button' value='Ajouter' />
<input type='button' value='Supprimer' />

<!-- Liste des Actualités -->
<form>
	<?php
		$sql = "SELECT * FROM portfolio";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div>");
			echo("<input type='checkbox' id='$nbEntre' />");
			echo($donnees["etudiant"]);
			echo("<input type='button' value='Modifier' />");
			echo("</div>");
		}
	?>
	
</form>
</section>
	</div>
</body>
</html>
