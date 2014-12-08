<?php include("header-admin.php"); ?>
	
	<?php $portfolio_id = $_GET['prof_id']; ?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Professeurs Ajoutée</h2>

	<?php 

		include('connectionbdd.php');
		
		$liste_de_filtres = array(
		'prenom' => FILTER_SANITIZE_SRING,
		'nom' => FILTER_SANITIZE_SRING,
		'role' => FILTER_SANITIZE_SRING,
		'courriel' => FILTER_SANITIZE_EMAIL,
		'tel_poste' => FILTER_SANITIZE_NUMBER_INT,
		'bureau' => FILTER_SANITIZE_SRING,
		'site' => FILTER_SANITIZE_URL
		);
		
		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);
		
		$image = "";
		if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"] != "" && $_FILES["fileToUpload"] != null && $_FILES["fileToUpload"]["size"] != 0){
			include('test_upload.php');
			uploadImage($_FILES["fileToUpload"]);
			$image = "/upload/".$_FILES["fileToUpload"]["name"];
			echo "poil";
		}
		
		$sql = "UPDATE prof SET prenom=:prenom, nom=:nom, role=:role, courriel=:courriel, tel_poste=:tel_poste ,bureau=:bureau,site=:site,image=:image
				WHERE prof_id=$portfolio_id";
		echo $sql;
		$requete =$pdo->prepare($sql);
		$requete->bindParam(':prenom', $data_filtre['prenom'], PDO::PARAM_STR);
		$requete->bindParam(':nom', $data_filtre['nom'], PDO::PARAM_STR);
		$requete->bindParam(':role', $data_filtre['role'],PDO::PARAM_STR);
		$requete->bindParam(':courriel', $data_filtre['courriel'],PDO::PARAM_STR);
		$requete->bindParam(':tel_poste', $data_filtre['tel_poste'],PDO::PARAM_INT);
		$requete->bindParam(':bureau', $data_filtre['bureau'],PDO::PARAM_STR);
		$requete->bindParam(':site', $data_filtre['site'],PDO::PARAM_STR);
		$requete->bindParam(':image', $image, PDO::PARAM_STR);
		$requete->execute();
	?>
	<a href="gestion-prof.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>