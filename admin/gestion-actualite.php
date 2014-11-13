<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style_admin.css">
	<title>#TIM Matane - Administration Actualités</title>
</head>
<body>
<?php include("menu-admin.php");?>
<div class="right">
<section>

<h1>Actualités</h2>
<?php
	include_once "connectionbdd.php";
	//Boucle pour calculer le nombre pour la case tout cocher
	$sql = "SELECT * FROM actualite";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
		}
?>

<script>
	function suppression(nbEntre){

		//Détecte le d'actualité cocher
		for(i = 1; i < nbEntre+1; i++){
			if(document.getElementById(i).checked == true){
				alert(document.getElementById(i).name);
			}
		}
		//Utilisation de ajax pour appeler un script PHP pour supprimer l'actualité
		
		var message;
		var supprimerAlert = confirm("Êtes-vous sûr de vouloir supprimer définitivement le ou les actualités sélectionnées?");
		if (supprimerAlert == true) {
			message = "Votre actualité a été supprimer!";
			alert(message);
		}
	}
</script>

<!-- Cocher, ajouter et supprimer -->
<input type='checkbox' id="checkbox-tout" onclick="javascript:checkAndUnCheckAll(<?php echo ($nbEntre); ?>)" />
<label>Tout cocher/décocher</label>
<a href="form-ajout-actualite.php">Ajouter</a>
<a href="#" onclick="suppression(<?php echo ($nbEntre); ?>)">Supprimer</a>

<!-- Liste des Actualités -->
<form>
	<?php
		$sql = "SELECT * FROM actualite";
		$resultat = $pdo->query($sql);
		$nbEntre = 0;
		while($donnees = $resultat->fetch()){
			$nbEntre++;
			echo("<div>");
			echo("<input type='checkbox' id='$nbEntre' name='".$donnees['actu_id']."' />");
			echo($donnees["titre"]);
			echo("<a href='modifier-actualite.php?actu_id=".$donnees['actu_id']."'>Modifier</a>");
			echo("</div>");
		}
	?>
	
</form>
</section>
</div>
</body>
</html>
