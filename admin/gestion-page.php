<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<h1>Page</h2>
<?php
	include_once "connectionbdd.php";
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM page";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
		}
?>

<!-- Cocher, ajouter et supprimer -->
<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
<label>Tout cocher/décocher</label>
<a href="form-ajout-page.php">Ajouter</a>
<a href="#">Supprimer</a>

<!-- Liste des Page -->
<form>
	<?php
		$sql = "SELECT * FROM page";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div>");
			echo("<input type='checkbox' id='$nbEntre' />");
			echo($donnees["titre"]);
			echo("<a href='modifier-page.php?page_id=".$donnees['page_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
	
</form>
</body>
</html>
