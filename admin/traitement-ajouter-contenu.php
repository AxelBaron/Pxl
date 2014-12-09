<?php include("header-admin.php"); ?>	
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Contenu Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		
		$liste_de_filtres = array(
		'titre' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'contenu' => FILTER_UNSAFE_RAW,
		'id_page_' => FILTER_SANITIZE_STRING ,	
		);
		
		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);
		
		$titre = $_POST['titre'];
		$contenu = $_POST['contenu'];
		$idpage = $_POST['id_page_'];


		$sql = "INSERT INTO contenu(titre,contenu,id_page_) VALUES(:titre,:contenu,:id_page_)";
		$requete = $pdo->prepare($sql);
		$requete->bindParam(':titre', $data_filtre['titre'], PDO::PARAM_STR);
		$requete->bindParam(':contenu', $data_filtre['contenu'], PDO::PARAM_STR);
		$requete->bindParam(':id_page_', $data_filtre['id_page_'], PDO::PARAM_STR);
		$requete->execute();
	?>
	<a href="gestion-contenu.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>
