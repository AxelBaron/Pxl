<?php
	include_once "connectionbdd.php";
	$categorie = $_POST['categorie'];
	$sql = "SELECT * FROM $categorie";
	$resultat = $pdo->query($sql);
	$nbEntre = 0;
	while($donnees = $resultat->fetch()){
		$nbEntre++;
		echo("<div>");
		echo("<input type='checkbox' id='$nbEntre' name='".$donnees['actu_id']."' />");
		echo($donnees["titre"]);
		echo("<a href='modifier-actualite.php?actu_id=".$donnees['actu_id']."'>Modifier</a>");
		echo("</div>");
	}
?>
