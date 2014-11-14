<?php include("header-admin.php"); ?>	
	<h1>Administration #TIM Matane</h1>	
	<h2>Actualitée Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$titre = $_POST['titre'];
		$auteur = $_POST['auteur'];
		$date = $_POST['date'];
		$imagepreview = $_POST['image-preview'];
		$contenu = $_POST['contenu'];

		$sql = "INSERT INTO actualite(titre, auteur,date, image, contenu) VALUES('$titre','$auteur','$date','$imagepreview','$contenu')";
		
		$pdo->exec($sql);
	?>
<?php include("footer-admin.php"); ?>