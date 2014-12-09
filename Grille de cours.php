<?php include('morceaux/header.php');
							include('admin/connectionbdd.php')	?>
						<!-- content -->
						<div class='wrapper row2'>
						  <div id='container'>
							<!-- Slider -->
							<?php include('morceaux/slider.php') ?>
							<!-- main content -->
							<div id='homepage'>
								  <section>
								  <article id='proweb'><?php 
												$sql = "SELECT * FROM page WHERE page_id=94";
												$resultat = $pdo->query($sql);
												$contenu = $resultat->fetch();
												
												echo "<img src='admin/".$contenu['image']."' alt='Image de description' title='Image de description' width='312' height='300'>";
												echo "</article>";
												echo "<article id='descriptionproweb'>";
												
												echo "<h2>".$contenu['titre']."</h2>";
												if($contenu['resume'] != "" && isset($contenu['resume'])){
													echo "<li><p>".$contenu['resume']."</p></li>";
												}else{
													echo "<li><p>Il n'y a pas de résumé disponible pour cette page.</p></li>";
												}
												?><?php 
												$sql = "SELECT * FROM contenu WHERE id_page_=94";
												$resultat = $pdo->query($sql);
												while($donnees = $resultat->fetch()){
													echo ("<h2 id='lienancre'><a href='#".$donnees['titre']."'>".$donnees['titre']."</a></h2>");
												}
												?></article>
								  </section>
								  
								</div>
							</section>
							<!-- main content -->
							<div id='content'>

							  <div id='conteneurprincipal'><?php
						$sql = "SELECT * FROM contenu WHERE id_page_=94";
						$resultat = $pdo->query($sql);
						while($donnees = $resultat->fetch()){
							echo("<h1 id='".$donnees['titre']."'>".$donnees['titre']."</h1>");
							echo("<div class='conteneursecondaire'>");
							echo($donnees['contenu']);
							echo("</div>");
						} ?></div>
				<!-- content body -->
				</div>
			  <div class='clear'></div> 
			  <div id='citations'>
				<p class='cita'>"Une formation qui a de l'avenir..."</p>
			  </div><!-- FIN CITATIONS -->  
			  <?php include('morceaux/footer.php') ?>
			</div>
			</div>
			</body>
			</html>