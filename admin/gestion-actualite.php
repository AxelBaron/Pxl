<?php
	include_once "header-admin.php";
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM actualite";
	$resultat = $pdo->query($sql);
	$nbEntre = 0;
	while($donnees = $resultat->fetch()){
		$nbEntre++;
	}
?>
<h1>Actualités</h1>
<!-- Cocher, ajouter et supprimer -->
<div id="gestion-list">
	<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
	<label>Tout cocher/décocher</label>
	<a href="form-ajout-actualite.php"><button>Ajouter</button></a>
	<a href="#" onclick="javascript:suppression(<?php echo ($nbEntre); ?>, 'actualite')"><button>Supprimer</button></a>
</div>
<!-- Liste des Actualités -->
<form>
<div id="liste-elements">
	<?php
		$pasElements = true;
		$sql = "SELECT * FROM actualite";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$pasElements = false;
			$nbEntre++;
			echo("<div class='list_gestion'>");
			echo("<input type='checkbox' id='$nbEntre' name='".$donnees['actu_id']."' />");
			echo($donnees["titre"]);
			echo("<a class='btn_modif' href='form-modifier-actualite.php?actu_id=".$donnees['actu_id']."'>Modifier</a>");
			echo("</div>");
		}
		
	//Si il n'y a aucun entrées
	if($pasElements == true){
		echo("Vous n'avez aucun éléments dans cette page.");
	}
	?>
<div>
</form>
<?php
	include_once "footer-admin.php";
?>
