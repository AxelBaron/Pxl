<?php include("header-admin.php"); ?>

	<?php $page_id = $_GET['page_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Page Modifiée : <?php echo $_POST["titre"] ;?></h2>

	<?php 

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

		
		$sql = "UPDATE page 
		  		SET titre ='$titre', resume ='$resume',nav_page_nom_1 ='$nav_page_nom_1',nav_page_lien_1 ='$nav_page_lien_1',nav_page_nom_2 ='$nav_page_nom_2',nav_page_lien_2 ='$nav_page_lien_2',nav_page_nom_3 ='$nav_page_nom_3',nav_page_lien_3 ='$nav_page_lien_3',nav_page_nom_4 ='$nav_page_nom_4',nav_page_lien_4 ='$nav_page_lien_4', nav_page_nom_5 ='$nav_page_nom_5',nav_page_lien_5 ='$nav_page_lien_5', nav_page_lien_6 ='$nav_page_nom_6', nav_page_nom_6 ='$nav_page_lien_6'
		  		WHERE page_id =$page_id;";
		$pdo->exec($sql);
	?>
<?php include("footer-admin.php"); ?>