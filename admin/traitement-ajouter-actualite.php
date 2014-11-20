<?php include("header-admin.php"); ?>	
	<h1>Administration #TIM Matane</h1>	
	<h2>Actualitée Ajoutée</h2>

	<?php 

		include('connectionbdd.php');
		include('test_upload.php');

		uploadImage($_FILES["fileToUpload"]);
		$titre = $_POST['titre'];
		$auteur = $_POST['auteur'];
		$date = $_POST['date'];
		$contenu = $_POST['contenu'];
		$image = "/upload/".$_FILES["fileToUpload"]["name"];

		$sql = "INSERT INTO actualite(titre, auteur,date,image,contenu) VALUES('$titre','$auteur','$date','$image','$contenu')";
		
		$pdo->exec($sql);
		
	?>
	<a href="gestion-actualite.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>