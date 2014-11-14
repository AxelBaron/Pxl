<?php
	include_once "connectionbdd.php";
	$categorie = $_POST['categorie'];
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM $categorie";
	$resultat = $pdo->query($sql);
	$nbEntre = 0;
	while($donnees = $resultat->fetch()){
		$nbEntre++;
	}
	$actualite = '"actualite"';
	echo("<input type='checkbox' id='checkbox-tout' onclick='javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)' />");
	echo("<label>Tout cocher/décocher</label>");
	echo("<a href='form-ajout-actualite.php'>Ajouter</a>");
	echo("<a href='#' onclick='javascript:suppression($nbEntre, $actualite)'>Supprimer</a>");
?>
