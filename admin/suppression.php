<?php
	include_once "connectionbdd.php";
	$categorie = $_POST['categorie'];
	
	switch($categorie){
		case "actualite":
			$id = "actu_id=";
		break;
		
		case "admin":
			$id = "admin_id=";
		break;
		
		case "menu":
			$id = "menu_id=";
		break;
		
		case "page":
			$id = "page_id=";
		break;
		
		case "portfolio":
			$id = "portfolio_id=";
		break;
	}
	$id .= $_POST['id'];
	$sql = "DELETE FROM $categorie WHERE $id";
	$resultat = $pdo->query($sql);
?>
