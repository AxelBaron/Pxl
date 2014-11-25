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
		
		//Création de la page
		
		function writeHeader() {
			$header = "";
			$header = "<?php include('morceaux/header.php') ?>
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
									<article id='descriptionproweb'>
										
										  <h2>#TIM en vidéo </h2>
										  <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique elementum dolor, maximus vestibulum ante varius id. 
										  Integer non dapibus ligula. Morbi finibus tortor sit amet ex maximus, sed elementum sapien sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
										  Vivamus dapibus finibus ante, vitae tempus velit ali„quet sed. Morbi rhoncus lorem quis felis mattis, vitae tincidunt quam malesuada. 
										  Aenean tincidunt turpis non arcu elementum varius. In quis tortor sit amet nulla consectetur malesuada in id nulla. 
										  Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed a urna vulputate eros tempor consectetur. </p></li>
										  
										  
									</article>
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
		
		$thePage = fopen("../$titre.php", "w");
		$header = writeHeader();
		fwrite($thePage, $header);
		$footer = writeFooter();
		fwrite($thePage, $footer);
		fclose($thePage);


		$sql2= "INSERT INTO contenu(contenu)
				VALUES ('$contenu')";
		$pdo->exec($sql2);
	?>
	<a href="gestion-page.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>