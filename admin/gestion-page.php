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
<h1>Pages</h1>
<!-- Cocher, ajouter et supprimer -->
<div id="gestion-list">
	<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
	<label>Tout cocher/décocher</label>
	<a href="form-ajout-page.php"><button>Ajouter</button></a>
	<a href="#" onclick="javascript:suppression(<?php echo ($nbEntre); ?>, 'page')"><button>Supprimer</button></a>
</div>
<!-- Liste des Page -->
<form>
<div id="liste-elements">
	<?php
		$sql = "SELECT * FROM page";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div class='list_gestion'>");
			echo("<input type='checkbox' id='$nbEntre' name='".$donnees['page_id']."' />");
			echo($donnees["titre"]);
			echo("<a class='btn_modif' href='form-modifier-page.php?page_id=".$donnees['page_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
<div>
</form>
<?php
	include_once "footer-admin.php";
?>