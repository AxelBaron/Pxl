<?php
	include_once "connectionbdd.php";
	$categorie = $_POST['categorie'];
	$sql = "SELECT * FROM $categorie";
	$resultat = $pdo->query($sql);
	$nbEntre = 0;
	
	while($donnees = $resultat->fetch()){
	
		switch($categorie){
			case "actualite":
				$id = "actu_id";
				$entre = $donnees["titre"];
			break;
			
			case "admin":
				$id = "admin_id";
				$entre = $donnees["usager"];
			break;
			
			case "menu":
				$id = "menu_id";
				$entre = $donnees["nom"];
			break;
			
			case "page":
				$id = "page_id";
				$entre = $donnees["titre"];
			break;
			
			case "portfolio":
				$id = "portfolio_id";
				$entre = $donnees["etudiant"];
			break;
		}
	
		$nbEntre++;
		echo("<div>");
		echo("<input type='checkbox' id='$nbEntre' name='".$donnees[$id]."' />");
		echo($entre);
		echo("<a href='form-modifier-".$categorie.".php?".$id."=".$donnees[$id]."'>Modifier</a>");
		echo("</div>");
	}
?>
