<?php include("header-admin.php"); ?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Professeurs Ajoutée</h2>

	<?php 

		include('connectionbdd.php');
		include('test_upload.php');

		uploadImage($_FILES["fileToUpload"]);

		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$role = $_POST['role'];
		$courriel = $_POST['courriel'];
		$tel_poste = $_POST['tel_poste'];
		$bureau = $_POST['bureau'];
		$site = $_POST['site'];
		$image = "/upload/".$_FILES["fileToUpload"]["name"];
		

		$sql = "INSERT INTO prof(prenom,nom,role,courriel,tel_poste,bureau,site,image) VALUES('$prenom','$nom','$role','$courriel','$tel_poste','$bureau','$site','$image')";
		$pdo->exec($sql);
	?>
	<a href="gestion-prof.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>