<?php
	include_once "header-admin.php";
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM portfolio";
	$resultat = $pdo->query($sql);
	$nbEntre = 0;
	while($donnees = $resultat->fetch()){
		$nbEntre++;
	}
?>
<h1>Portfolio</h1>
<!-- Cocher, ajouter et supprimer -->
<div id="gestion-list">
	<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
	<label>Tout cocher/décocher</label>
	<a href="form-ajout-portfolio.php">Ajouter</a>
	<a href="#" onclick="javascript:suppression(<?php echo ($nbEntre); ?>, 'portfolio')">Supprimer</a>
</div>
<!-- Liste des Portfolios -->
<form>
<div id="liste-elements">
	<?php
		$sql = "SELECT * FROM portfolio";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div>");
			echo("<input type='checkbox' id='$nbEntre' name='".$donnees['portfolio_id']."' />");
			echo($donnees["etudiant"]);
			echo("<a href='form-modifier-portfolio.php?portfolio_id=".$donnees['portfolio_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
<div>
</form>
<?php
	include_once "footer-admin.php";
?>
