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
	include("connectionbdd.php");
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
<a href="form-ajout-portfolio.php">Ajouter</a>
<a href="#">Supprimer</a>

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
			echo("<a href='modifier-portfolio.php?portfolio_id=".$donnees['portfolio_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
	
</form>
</section>
	</div>
</body>
</html>
