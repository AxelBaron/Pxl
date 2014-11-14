<?php include("header-admin.php"); ?>		
	<h1>Administration #TIM Matane</h1>	
	<h2>Menu Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$nom = $_POST['nom'];
		$nom_lien = $_POST['nom_lien'];
		$sm_nom_1 = $_POST['sm_nom_1'];
		$sm_lien_1 = $_POST['sm_lien_1'];
		$sm_nom_2 = $_POST['sm_nom_2'];
		$sm_lien_2 = $_POST['sm_lien_2'];
		$sm_nom_3 = $_POST['sm_nom_3'];
		$sm_lien_3 = $_POST['sm_lien_3'];
		$sm_nom_4 = $_POST['sm_nom_4'];
		$sm_lien_4 = $_POST['sm_lien_4'];
		$sm_nom_5 = $_POST['sm_nom_5'];
		$sm_lien_5 = $_POST['sm_lien_5'];
		$sm_nom_6 = $_POST['sm_nom_6'];
		$sm_lien_6 = $_POST['sm_lien_6'];
		$sm_nom_7 = $_POST['sm_nom_7'];
		$sm_lien_7 = $_POST['sm_lien_7'];
		$sm_nom_8 = $_POST['sm_nom_8'];
		$sm_lien_8 = $_POST['sm_lien_8'];
		
		$sql = "INSERT INTO menu(nom,nom_lien,sm_nom_1,sm_lien_1,sm_nom_2,sm_lien_2,sm_nom_3,sm_lien_3,sm_nom_4,sm_lien_4,sm_nom_5,sm_lien_5,sm_nom_6,sm_lien_6,sm_nom_7,sm_lien_7,sm_nom_8,sm_lien_8) VALUES('$nom','$nom_lien','$sm_nom_1','$sm_lien_1','$sm_nom_2','$sm_lien_2','$sm_nom_3','$sm_lien_3','$sm_nom_4','$sm_lien_4','$sm_nom_5','$sm_lien_5','$sm_nom_6','$sm_lien_6','$sm_nom_7','$sm_lien_7','$sm_nom_8','$sm_lien_8')";
		
		echo $sql;
		//$pdo->exec($sql);
	?>
<?php include("footer-admin.php"); ?>