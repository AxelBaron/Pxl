<?php include("header-admin.php"); ?>

	<?php $actu_id = $_GET['actu_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Actualité Modifiée : <?php echo $_POST["titre"] ;?></h2>

	<?php 

		include('connectionbdd.php');
		include('test_upload.php');


		$titre = $_POST['titre'];
		$auteur = $_POST['auteur'];
		$contenu = $_POST['contenu'];
		$date = $_POST['date'];
		if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"] != "" && $_FILES["fileToUpload"] != null && $_FILES["fileToUpload"]["size"] != 0){
			uploadImage($_FILES["fileToUpload"]);
			$image = "/upload/".$_FILES["fileToUpload"]["name"];
			$sql = "UPDATE actualite 
			SET titre ='$titre',auteur='$auteur',contenu='$contenu',date='$date',image='$image'
			WHERE actu_id=$actu_id";
		}else{
			$sql = "UPDATE actualite 
			SET titre ='$titre',auteur='$auteur',contenu='$contenu',date='$date'
			WHERE actu_id=$actu_id";
		}
		$pdo->exec($sql);
	?>
	<a href="gestion-actualite.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>
