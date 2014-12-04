<?php include("header-admin.php"); ?>		
	<h1>Administration #TIM Matane</h1>	
	<h2>Menu Ajoutée</h2>

	<?php 

		include('connectionbdd.php');
		for($i = 1; $i < 9; $i++){
		
			//Création des varaibles avec une valeur Vide par défaut
			$varContainer = "sm_nom_".$i;
			$$varContainer = "";
			$varContainer = "sm_lien_".$i;
			$$varContainer = "";
			
			if(isset($_POST["sm_nom_$i"])){
				//Met les bonne valeurs s'ils existent à leur variable respective: sm_nom_1, sm_nom_2....
				$varContainer = "sm_nom_".$i;
				$$varContainer = $_POST["sm_nom_$i"];
				$varContainer = "sm_lien_".$i;
				$$varContainer = $_POST["sm_lien_$i"];
			}
		}
		
		
		$liste_de_filtres = array(
		'nom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'nom_lien'=> FILTER_SANITIZE_URL,

		'sm_nom_1' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'sm_lien_1'=> FILTER_SANITIZE_URL,

		'sm_nom_2' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'sm_lien_2'=> FILTER_SANITIZE_URL,

		'sm_nom_3' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'sm_lien_3'=> FILTER_SANITIZE_URL,

		'sm_nom_4' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'sm_lien_4'=> FILTER_SANITIZE_URL,

		'sm_nom_5' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'sm_lien_5'=> FILTER_SANITIZE_URL,

		'sm_nom_6' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'sm_lien_6'=> FILTER_SANITIZE_URL,

		'sm_nom_7' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'nom-sm_lien_7'=> FILTER_SANITIZE_URL,

		'sm_nom_8' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'sm_lien_8'=> FILTER_SANITIZE_URL	
		);

		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);
		print_r($data_filtre);

		$sql = "INSERT INTO menu(nom,nom_lien,sm_nom_1,sm_lien_1,sm_nom_2,sm_lien_2,sm_nom_3,sm_lien_3,sm_nom_4,sm_lien_4,sm_nom_5,sm_lien_5,sm_nom_6,sm_lien_6,sm_nom_7,sm_lien_7,sm_nom_8,sm_lien_8) VALUES(:nom,:nom_lien,:sm_nom_1,:sm_lien_1,:sm_nom_2,:sm_lien_2,:sm_nom_3,:sm_lien_3,:sm_nom_4,:sm_lien_4,:sm_nom_5,:sm_lien_5,:sm_nom_6,:sm_lien_6,:sm_nom_7,:sm_lien_7,:sm_nom_8,:sm_lien_8)";
		$requete =$pdo->prepare($sql);
		$requete->bindParam(':nom', $data_filtre['nom'], PDO::PARAM_STR);
		$requete->bindParam(':nom_lien', $data_filtre['nom_lien'], PDO::PARAM_STR);

		$requete->bindParam(':sm_nom_1', $data_filtre['sm_nom_1'], PDO::PARAM_STR);
		$requete->bindParam(':sm_lien_1', $data_filtre['sm_lien_1'], PDO::PARAM_STR);

		$requete->bindParam(':sm_nom_2', $data_filtre['sm_nom_2'], PDO::PARAM_STR);
		$requete->bindParam(':sm_lien_2', $data_filtre['sm_lien_2'], PDO::PARAM_STR);

		$requete->bindParam(':sm_nom_3', $data_filtre['sm_nom_3'], PDO::PARAM_STR);
		$requete->bindParam(':sm_lien_3', $data_filtre['sm_lien_3'], PDO::PARAM_STR);

		$requete->bindParam(':sm_nom_4', $data_filtre['sm_nom_4'], PDO::PARAM_STR);
		$requete->bindParam(':sm_lien_4', $data_filtre['sm_lien_4'], PDO::PARAM_STR);

		$requete->bindParam(':sm_nom_5', $data_filtre['sm_nom_5'], PDO::PARAM_STR);
		$requete->bindParam(':sm_lien_5', $data_filtre['sm_lien_5'], PDO::PARAM_STR);

		$requete->bindParam(':sm_nom_6', $data_filtre['sm_nom_6'], PDO::PARAM_STR);
		$requete->bindParam(':sm_lien_6', $data_filtre['sm_lien_6'], PDO::PARAM_STR);

		$requete->bindParam(':sm_nom_7', $data_filtre['sm_nom_7'], PDO::PARAM_STR);
		$requete->bindParam(':sm_lien_7', $data_filtre['sm_lien_7'], PDO::PARAM_STR);

		$requete->bindParam(':sm_nom_8', $data_filtre['sm_nom_8'], PDO::PARAM_STR);
		$requete->bindParam(':sm_lien_8', $data_filtre['sm_lien_8'], PDO::PARAM_STR);
		
		echo $sql;
		$requete->execute();
	?>
	<a href="gestion-menu.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>