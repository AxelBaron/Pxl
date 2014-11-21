<?php include("header-admin.php"); ?>	
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Page Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$titre = $_POST['titre'];
		$resume = $_POST['resume'];
		$nav_page_nom_1 = $_POST['nav_page_nom_1'];
		$nav_page_lien_1 = $_POST['nav_page_lien_1'];
		$nav_page_nom_2 = $_POST['nav_page_nom_2'];
		$nav_page_lien_2 = $_POST['nav_page_lien_2'];
		$nav_page_nom_3 = $_POST['nav_page_nom_3'];
		$nav_page_lien_3 = $_POST['nav_page_lien_3'];
		$nav_page_nom_4 = $_POST['nav_page_nom_4'];
		$nav_page_lien_4 = $_POST['nav_page_lien_4'];
		$nav_page_nom_5 = $_POST['nav_page_nom_5'];
		$nav_page_lien_5 = $_POST['nav_page_lien_5'];
		$nav_page_nom_6 = $_POST['nav_page_nom_6'];
		$nav_page_lien_6 = $_POST['nav_page_lien_6'];
		$contenu_titre = $_POST['contenu_titre'];
		$contenu = $_POST['contenu'];

		
		

		$sql = "INSERT INTO page(titre, resume,nav_page_nom_1, nav_page_lien_1,nav_page_nom_2,nav_page_lien_2,nav_page_nom_3, nav_page_lien_3,nav_page_nom_4, nav_page_lien_4,nav_page_nom_5, nav_page_lien_5,nav_page_nom_6, nav_page_lien_6) 
			VALUES('$titre', '$resume','$nav_page_nom_1','$nav_page_lien_1','$nav_page_nom_2','$nav_page_lien_2','$nav_page_nom_3','$nav_page_lien_3','$nav_page_nom_4','$nav_page_lien_4','$nav_page_nom_5','$nav_page_lien_5','$nav_page_nom_6','$nav_page_lien_6')";
		$pdo->exec($sql);
		

		$sql2= "INSERT INTO contenu(contenu_id, titre, contenu)
				VALUES ('test', '$contenu_titre', '$contenu')";
		$pdo->exec($sql2);
	?>
	<a href="gestion-page.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>