<?php include("header-admin.php"); ?>


	<h1>Administration #TIM Matane</h1>	
	<h2>Contenu Modifiée : <?php echo $_POST["titre"] ;?></h2>

	<?php 

		include('connectionbdd.php');

		$id= $_GET['contenu_id'];
		$titre = $_POST['titre'];
		$contenu = $_POST['contenu'];
		$idpage = $_POST['id_page_'];
		
		$sql = "UPDATE contenu
				SET titre='$titre',contenu='$contenu',id_page_=$idpage
				WHERE contenu_id = $id";
		$pdo->exec($sql);
	?>
	<a href="gestion-contenu.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>