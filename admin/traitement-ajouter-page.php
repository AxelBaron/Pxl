<?php include("header-admin.php"); ?>	
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Page Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		
		for($i = 1; $i < 7; $i++){
		
			//Création des varaibles avec une valeur Vide par défaut
			$varContainer = "nav_page_nom_".$i;
			$$varContainer = "";
			$varContainer = "nav_page_lien_".$i;
			$$varContainer = "";
			
			if(isset($_POST["nav_page_nom_$i"])){
				//Met les bonne valeurs s'ils existent à leur variable respective: sm_nom_1, sm_nom_2....
				$varContainer = "nav_page_nom_".$i;
				$$varContainer = $_POST["nav_page_nom_$i"];
				$varContainer = "nav_page_lien_".$i;
				$$varContainer = $_POST["nav_page_lien_$i"];
			}
		}
		
		$titre = $_POST['titre'];
		$resume = $_POST['resume'];
		$contenu_titre = $_POST['contenu_titre'];
		$contenu = $_POST['contenu'];

		
		

		$sql = "INSERT INTO page(titre, resume,nav_page_nom_1, nav_page_lien_1,nav_page_nom_2,nav_page_lien_2,nav_page_nom_3, nav_page_lien_3,nav_page_nom_4, nav_page_lien_4,nav_page_nom_5, nav_page_lien_5,nav_page_nom_6, nav_page_lien_6) 
			VALUES('$titre', '$resume','$nav_page_nom_1','$nav_page_lien_1','$nav_page_nom_2','$nav_page_lien_2','$nav_page_nom_3','$nav_page_lien_3','$nav_page_nom_4','$nav_page_lien_4','$nav_page_nom_5','$nav_page_lien_5','$nav_page_nom_6','$nav_page_lien_6')";
		$pdo->exec($sql);
		


		$sql2= "INSERT INTO contenu(contenu)
				VALUES ('$contenu')";
		$pdo->exec($sql2);
	?>
	<a href="gestion-page.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>