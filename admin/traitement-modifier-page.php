<?php include("header-admin.php"); ?>

	<?php $page_id = $_GET['page_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Page Modifiée : <?php echo $_POST["titre"] ;?></h2>

	<?php 

		include('test_upload.php');
		$titre = $_POST['titre'];
		$resume = $_POST['resume'];
		$image = "/upload/".$_FILES["fileToUpload"]["name"];

		uploadImage($_FILES["fileToUpload"]);

		
		$sql = "UPDATE page 
		  		SET titre ='$titre', resume ='$resume', image ='$image'
		  		WHERE page_id =$page_id;";
		$pdo->exec($sql);
	?>
	<a href="gestion-page.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>