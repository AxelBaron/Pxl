<?php include("header-admin.php"); ?>	
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Contenu Ajouté</h2>

	<?php 

		include('connectionbdd.php');

		
		$liste_de_filtres = array(
		'titre' => FILTER_SANITIZE_STRING,
		'contenu' => FILTER_UNSAFE_RAW,
		'id_page_' => FILTER_SANITIZE_STRING ,	
		);
		
		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);
		
		$idpagesauvgarde = $_POST['id_page_'];


		$sql = "INSERT INTO contenu(titre,contenu,id_page_) VALUES(:titre,:contenu,:id_page_)";
		$requete = $pdo->prepare($sql);
		$requete->bindParam(':titre', $data_filtre['titre'], PDO::PARAM_STR);
		$requete->bindParam(':contenu', $data_filtre['contenu'], PDO::PARAM_STR);
		$requete->bindParam(':id_page_', $data_filtre['id_page_'], PDO::PARAM_STR);
		$requete->execute();
	?>
		<a href="form-modifier-page.php?page_id=<?php echo $idpagesauvgarde; ?>"><button>Gérer la position du contenu crée dans la page en question</button></a>
<?php include("footer-admin.php"); ?>
