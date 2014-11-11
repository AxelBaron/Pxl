<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<h1>Admin</h2>
<?php
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
<input type='button' value='Ajouter' />
<input type='button' value='Supprimer' />

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
			echo("<input type='button' value='Modifier' />");
			echo("</div>");
		}
	?>
	
</form>
</body>
</html>
