<?php
	$fonction = $_POST['fonction'];
	
	//Regarde quel fonction est appelé par l'AJAX
	switch($fonction){
		case "ajoutSM":
			$categoriePost = $_POST['categorie'];
			ajoutSM($categoriePost);
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
		
		case "writeHeader":
			writeHeader();
		break;
	}
			
	function ajoutSM($categorie) {
		//Si c'est l'ajout d'un titre dans Ajout Page
		if($categorie == "page"){
		
		$fnName = "'ajoutSM(id);'";
			$nbSM = ($_POST['nbPresentSM'] + 1);
			echo("<div>");
				/*<label for="nav_page_nom_2">Nom du lien de navigation interne à la page</label>
				<input class="form" type="text" name="nav_page_nom_2" />*/
				echo("<label for='nav_page_nom_".$nbSM."'>Nom du lien de navigation interne à la page</label>");
				echo("<input type='text' class='form' name='nav_page_nom_".$nbSM."' id='nav_page_nom_".$nbSM."' />");
			echo("</div>");
			
			echo("<div>");
				echo("<label for='nav_page_lien_".$nbSM."'>Adresse du lien de navigation interne à la page</label>");
				echo("<input type='text' class='form' name='nav_page_lien_".$nbSM."' />");
			echo("</div>");
		
		//Si c'est l'ajout d'un sous-menu dans ajout menu
		}else if($categorie == "menu"){
		
			$fnName = "'ajoutSM(id);'";
			$nbSM = ($_POST['nbPresentSM'] + 1);
			echo("<div>");
				echo("<label for='sm_nom_".$nbSM."'>Intitulé du sous-menu ".$nbSM."</label>");
				echo("<input type='text' name='sm_nom_".$nbSM."' id='sm_nom_".$nbSM."' />");
			echo("</div>");
			
			echo("<div>");
				echo("<label for='sm_lien_".$nbSM."'>Lien du sous-menu ".$nbSM."</label>");
				echo("<input type='text' name='sm_lien_".$nbSM."' />");
			echo("</div>");
		}
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
			
			case "contenu":
				$id = "contenu_id=";
			break;
			
			case "prof":
				$id = "prof_id=";
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
				
				case "contenu":
					$id = "contenu_id";
					$entre = $donnees["titre"];
				break;
				
				case "prof":
					$id = "prof_id";
					$entre = $donnees['prenom']." ".$donnees['nom'];
				break;
			}
		
			$nbEntre++;
			echo("<div class='list_gestion'>");
			echo("<input type='checkbox' id='$nbEntre' name='".$donnees[$id]."' />");
			echo($entre);
			echo("<a class='btn_modif' href='form-modifier-".$categorie.".php?".$id."=".$donnees[$id]."'>Modifier</a>");
			echo("</div>");
		}
		
		//Si il n'y a aucun entrées
		if($pasElements == true){
			echo("Vous n'avez aucun éléments dans cette page.");
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
			
			case "contenu":
				$newCategorie = '"contenu"';
			break;
			
			case "prof":
				$newCategorie = '"prof"';
			break;
			
		}
		
		echo("<input type='checkbox' id='checkbox-tout' onclick='javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)' />");
		echo("<label>Tout cocher/décocher</label>");
		echo("<a href='form-ajout-".$categorie.".php'><button>Ajouter</button></a>");
		echo("<a href='#' onclick='javascript:suppression($nbEntre, $newCategorie)'><button>Supprimer</button></a>");
		if($newCategorie == '"menu"'){
			echo("<a href='apparition-menu.php'><button>Gérer l'ordre d\'apparition des menus</button></a>");
		}
	}
?>
