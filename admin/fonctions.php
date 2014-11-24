<?php
	$fonction = $_POST['fonction'];
	switch($fonction){
		case "ajoutSM":
			ajoutSM();
		break;
		
		case "suppression":
			$idPost = $_POST['id'];
			$categoriePost = $_POST['categorie'];
			suppression($idPost, $categoriePost);
		break;
		
		case "listAffichage":
			$categoriePost = $_POST['categorie'];
			listAffichage($categoriePost);
		break;
		
		case "listGestion":
			$categoriePost = $_POST['categorie'];
			listGestion($categoriePost);
		break;
	}
			
	function ajoutSM() {
		$fnName = "'ajoutSM(id);'";
		$nbSM = ($_POST['nbPresentSM'] + 1);
		echo("<div>");
			echo("<label for='sm_nom_".$nbSM."'>Intitul� du sous-menu ".$nbSM."</label>");
			echo("<input type='text' name='sm_nom_".$nbSM."' id='sm_nom_".$nbSM."' />");
		echo("</div>");
		
		echo("<div>");
			echo("<label for='sm_lien_".$nbSM."'>Lien du sous-menu ".$nbSM."</label>");
			echo("<input type='text' name='sm_lien_".$nbSM."' />");
		echo("</div>");
	}
	
	function suppression($idPost, $categorie) {
		include "connectionbdd.php";
		
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
		$id .= $idPost;
		$sql = "DELETE FROM $categorie WHERE $id";
		$resultat = $pdo->query($sql);
	}
	
	function listAffichage($categorie) {
		include "connectionbdd.php";
		$pasElements = true;
		$sql = "SELECT * FROM $categorie";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		
		while($donnees = $resultat->fetch()){
			$pasElements = false;
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
			echo("<div class='list_gestion'>");
			echo("<input type='checkbox' id='$nbEntre' name='".$donnees[$id]."' />");
			echo($entre);
			echo("<a class='btn_modif' href='form-modifier-".$categorie.".php?".$id."=".$donnees[$id]."'>Modifier</a>");
			echo("</div>");
		}
		
		//Si il n'y a aucun entr�es
		if($pasElements == true){
			echo("Vous n'avez aucun �l�ments dans cette page.");
		}
	}
	
	function listGestion($categorie) {
		include "connectionbdd.php";
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
		echo("<label>Tout cocher/d�cocher</label>");
		echo("<a href='form-ajout-".$categorie.".php'><button>Ajouter</button></a>");
		echo("<a href='#' onclick='javascript:suppression($nbEntre, $newCategorie)'><button>Supprimer</button></a>");
	}
?>
