<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<h1>Actualités</h2>
<?php
	include_once "connectionbdd.php";
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM actualite";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
		}
?>

<script>
/*var txt;
var supprimerAlert = confirm("Êtes-vous sûr de vouloir supprimer définitivement le ou les actualités sélectionnées?");
if (r == true) {
    txt = "Votre !";
} else {
    txt = "You pressed Cancel!";
}*
alert(txt);*/
</script>

<!-- Cocher, ajouter et supprimer -->
<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
<label>Tout cocher/décocher</label>
<a href="form-ajout-actualite.php">Ajouter</a>
<a href="#">Supprimer</a>

<!-- Liste des Actualités -->
<form>
	<?php
		$sql = "SELECT * FROM actualite";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div>");
			echo("<input type='checkbox' id='$nbEntre' />");
			echo($donnees["titre"]);
			echo("<a href='modifier-actualite.php?actu_id=".$donnees['actu_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
	
</form>
</body>
</html>
