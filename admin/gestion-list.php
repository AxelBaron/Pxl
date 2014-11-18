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
	
	switch($categorie){
		case "actualite":
			$newCategorie = '"actualite"';
		break;
		
		case "admin":
			$newCategorie = '"admin"';
		break;
		
		case "menu":
			$newCategorie = '"menu"';
		break;
		
		case "page":
			$newCategorie = '"page"';
		break;
		
		case "portfolio":
			$newCategorie = '"portfolio"';
		break;
	}
	
	echo("<input type='checkbox' id='checkbox-tout' onclick='javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)' />");
	echo("<label>Tout cocher/décocher</label>");
	echo("<a href='form-ajout-".$categorie.".php'>Ajouter</a>");
	echo("<a href='#' onclick='javascript:suppression($nbEntre, $newCategorie)'>Supprimer</a>");
?>
