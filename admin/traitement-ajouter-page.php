<?php include("header-admin.php"); ?>	
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Page Ajoutée</h2>

	<?php 
		include('test_upload.php');
		
		$titre = $_POST['titre'];
		$resume = $_POST['resume'];
		$image = "/upload/".$_FILES["fileToUpload"]["name"];

		uploadImage($_FILES["fileToUpload"]);
		
		$sql = "INSERT INTO page(titre,resume,image) 
			VALUES('$titre','$resume','$image')";
		$pdo->exec($sql);
		
		//Création de la page
		
		function writeHeader($titre, $resume) {
			include("connectionbdd.php");
			
			//INUTILE
			//Requete pour avoir l'ID de la page
			$sql = "SELECT * FROM page ORDER BY page_id DESC";
			$liste = $pdo->query($sql);
			$contenu = $liste->fetch();
			$id = $contenu['page_id'];
			
			
			//Requete pour trouver les contenus associés à la page
			$sql = "SELECT * FROM contenu WHERE id_page_=".$id;
			$resultat = $pdo->query($sql);
			while($donnees = $resultat->fetch()){
				
			}
			//FIN INUTILE
			
			$header = "";
			$header = "<?php include('morceaux/header.php');
							include('admin/connectionbdd.php')	?>
						<!-- content -->
						<div class='wrapper row2'>
						  <div id='container'>
							<!-- Silder -->
							<section id='slider'><a href='#'><img src='images/slider.jpg' alt='Slider1'></a></section>
							<!-- main content -->
								<div id='homepage'>

								 <!-- #Index Image -->

								  <section id='services' class='clear'> 
									  <img src='images/Actu.png'>
								  </section>

								  <!-- Image de description -->
								  <section>
								  <article id='tim_video'>
									  <img src='' alt='Les pros du web' title='Les pros du web' width='420' height='315'>
								  </article>
									<article id='descriptionproweb'>";
									
									//Insère le résumé et le titre
									$header .= '<?php 
												$sql = "SELECT * FROM page WHERE page_id='.$id.'";
												$resultat = $pdo->query($sql);
												$contenu = $resultat->fetch();
												echo "<h2>".$contenu[\'titre\']."</h2>";
												if($contenu[\'resume\'] != "" && isset($contenu[\'resume\'])){
													echo "<li><p>".$contenu[\'resume\']."</p></li>";
												}else{
													echo "<li><p>Il n\'y a pas de résumé disponible pour cette page.</p></li>";
												}
												?>';	
								
									//Insère les titres de Contenues
									$header .= '<?php 
												$sql = "SELECT * FROM contenu WHERE id_page_='.$id.'";
												$resultat = $pdo->query($sql);
												while($donnees = $resultat->fetch()){
													echo ("<h2 id=\'lienancre\'><a href=\'#\'>".$donnees[\'titre\']."</a></h2>");
												}
												?>';								
									
						$header .= "</article>
								  </section>
								  
								</div>
							</section>
							<!-- main content -->
							<div id='content'>

							  <div id='conteneurprincipal'>
								<div id='conteneurun'>";
			return $header;
		}
		
		function writeFooter(){
		$footer = "";
		$footer = "</div>
				  </div>
				<!-- content body -->
				</div>
			  <div class='clear'></div> 
			  <div id='citations'>
				<p class='cita'>\"Une formation qui a de l'avenir...\"</p>
			  </div><!-- FIN CITATIONS -->  
			  <?php include('morceaux/footer.php') ?>
			</div>
			</body>
			</html>";
		return $footer;
		}
		
	/*	$thePage = fopen("../$titre.php", "w");
		$header = writeHeader($titre, $resume);
		fwrite($thePage, $header);
		$footer = writeFooter();
		fwrite($thePage, $footer);
		fclose($thePage);*/

	?>
	<a href="gestion-page.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>
