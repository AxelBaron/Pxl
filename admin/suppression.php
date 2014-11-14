<?php
	include_once "connectionbdd.php";
	$categorie = $_POST['categorie'];
	
	switch($categorie){
		case "actualite":
			$id = "actu_id=";
		break;
	}
	$id .= $_POST['id'];
	$sql = "DELETE FROM $categorie WHERE $id";
	$resultat = $pdo->query($sql);
?>
