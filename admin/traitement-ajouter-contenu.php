<?php include("header-admin.php"); ?>	
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Contenu Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$titre = $_POST['titre'];
		$contenu = $_POST['contenu'];
		$idpage = $_POST['id_page_'];


		$sql = "INSERT INTO contenu(titre,contenu,id_page_) VALUES('$titre','$contenu','$idpage')";
		$pdo->exec($sql);
	?>
	<a href="gestion-admin.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>