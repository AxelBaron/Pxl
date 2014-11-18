<?php
	include_once "header-admin.php";
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM admin";
	$resultat = $pdo->query($sql);
	$nbEntre = 0;
	while($donnees = $resultat->fetch()){
		$nbEntre++;
	}
?>
<h1>Admin</h1>
<!-- Cocher, ajouter et supprimer -->
<div id="gestion-list">
	<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
	<label>Tout cocher/décocher</label>
	<a href="form-ajout-admin.php">Ajouter</a>
	<a href="#" onclick="javascript:suppression(<?php echo ($nbEntre); ?>, 'admin')">Supprimer</a>
</div>
<!-- Liste des Admin -->
<form>
<div id="liste-elements">
	<?php
		$sql = "SELECT * FROM admin";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div>");
			echo("<input type='checkbox' id='$nbEntre' name='".$donnees['admin_id']."' />");
			echo($donnees["usager"]);
			echo("<a href='form-modifier-admin.php?admin_id=".$donnees['admin_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
<div>
</form>
<?php
	include_once "footer-admin.php";
?>