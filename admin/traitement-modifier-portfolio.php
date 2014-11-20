<?php include("header-admin.php"); ?>

	<?php $portfolio_id = $_GET['portfolio_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Portfolio Modifié : <?php echo $_POST["etudiant"] ;?></h2>

	<?php 

		include('test_upload.php');
		uploadImage($_FILES["fileToUpload"]);
		
		$etudiant = $_POST['etudiant'];
		$lien = $_POST['lien'];
		$image = "/upload/".$_FILES["fileToUpload"]["name"];
		$annees = $_POST['annees'];
		
		$sql = "UPDATE portfolio 
		  SET etudiant ='$etudiant',lien='$lien',image='$image',annees='$annees'
		  WHERE portfolio_id=$portfolio_id";
		$pdo->exec($sql);
	?>
	<a href="gestion-portfolio.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>