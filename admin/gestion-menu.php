<?php
	include_once "header-admin.php";
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM menu";
	$resultat = $pdo->query($sql);
	$nbEntre = 0;
	while($donnees = $resultat->fetch()){
		$nbEntre++;
	}
?>
<h1>Menu</h1>
<!-- Cocher, ajouter et supprimer -->
<div id="gestion-list">
	<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
	<label>Tout cocher/décocher</label>
	<a href="form-ajout-menu.php">Ajouter</a>
	<a href="#" onclick="javascript:suppression(<?php echo ($nbEntre); ?>, 'menu')">Supprimer</a>
</div>
<!-- Liste des Menu -->
<form>
<div id="liste-elements">
	<?php
		$sql = "SELECT * FROM menu";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div>");
			echo("<input type='checkbox' id='$nbEntre' name='".$donnees['menu_id']."' />");
			echo($donnees["nom"]);
			echo("<a href='form-modifier-menu.php?menu_id=".$donnees['menu_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
<div>
</form>
<?php
	include_once "footer-admin.php";
?>
