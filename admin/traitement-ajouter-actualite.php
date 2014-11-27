<?php include("header-admin.php"); ?>	
	<h1>Administration #TIM Matane</h1>	
	<h2>Actualitée Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$titre = $_POST['titre'];
		$auteur = $_POST['auteur'];
		$date = $_POST['date'];
		$contenu = $_POST['contenu'];
		$image = "";
		if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"] != "" && $_FILES["fileToUpload"] != null && $_FILES["fileToUpload"]["size"] != 0){
			include('test_upload.php');
			echo("fgfgvdhgvfdgh");
			uploadImage($_FILES["fileToUpload"]);
			$image = "/upload/".$_FILES["fileToUpload"]["name"];
		}
		$sql = "INSERT INTO actualite(titre, auteur,date,image,contenu) VALUES('$titre','$auteur','$date','$image','$contenu')";
		
		$pdo->exec($sql);
		
	?>
	<a href="gestion-actualite.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>
