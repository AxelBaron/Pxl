<?php include("header-admin.php"); ?>

	<?php $portfolio_id = $_GET['portfolio_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Portfolio Modifié : <?php echo $_POST["etudiant"] ;?></h2>

	<?php 

		$etudiant = $_POST['etudiant'];
		$lien = $_POST['lien'];
		$image = $_POST['image'];
		$annees = $_POST['annees'];
		
		$sql = "UPDATE portfolio 
		  SET etudiant ='$etudiant',lien='$lien',image='$image',annees='$annees'
		  WHERE portfolio_id=$portfolio_id";
		$pdo->exec($sql);
	?>
<?php include("footer-admin.php"); ?>