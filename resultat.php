<?php include("morceaux/header.php");?>

<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Slider -->
    <?php include('morceaux/slider.php') ?>
    <!-- main content -->
    <div id="homepage">
      <section>
    		<article id="proweb">
    				<img src="images/prosduweb.jpg" alt="Les pros du web" title="Les pros du web" width="312" height="300" />
    		</article>
        <article id="descriptionproweb">
              
                <h2>#TIM C'est quoi? </h2>
                <li><p>TIM, ou techniques d'intégration multimédia est une formation en 3 ans proposée par le Cégep de Matane. Celle-ci a dans un premier temps pour but de familiariser avec le domaine du multimédia. Dans un but plus abouti, cette formation permet à leurs étudiants de devenir des professionnels aptes à réaliser différentes tâches telles que la création de sites web, de contenu multimédia, etc... </p></li>
                
                <h2 id="lienancre"><a href="#timcestquoi">TIM c'est quoi?</a></h2>
                <h2 id="lienancre"><a href="#essai">TIM VS Les autres départements</a></h2>
        </article>
      </section>

    </div>
    <!-- main content -->
    <div id="content">
      <section>
        <?php include("morceaux/cinqpts.php") ?>
      </section>

      <div id="conteneurprincipal">
        <h1 id="timcestquoi">Résultat</h1>
        <div class="conteneursecondaire">
		  
		  <?php
			//S'il y a eu une recherche
			if($_GET != null){
				include "admin/connectionbdd.php";
				$recherche = filter_var($_GET["recherche"],FILTER_SANITIZE_STRING);
				
				//Recherche d'étudiant
				$liste = "";
				$sql="SELECT * FROM portfolio WHERE etudiant LIKE '%$recherche%'";
				$liste = $pdo->query($sql);
				if($liste->fetch()){
					$liste = $pdo->query($sql);
					echo("<h2>Dans les étudiant: </h2>");
					while($donnees = $liste->fetch()){
						echo("<div><h3>".$donnees['etudiant']."</h3></div><ul>");
						echo("<div><li>Année: ".$donnees['annees']."</li></div>");
						echo("<div><li>Portfolio: <a href='".$donnees['lien']."'>".$donnees['lien']."</a></li></div></ul>");
					}
				}
				
				//Recherche de prof
				$liste = "";
				$sql="SELECT * FROM prof WHERE prenom LIKE '%$recherche%' OR nom LIKE '%$recherche%'";
				$liste = $pdo->query($sql);
				if($liste->fetch()){
					$liste = $pdo->query($sql);
					echo("<h2>Dans les professeurs: </h2>");
					while($donnees = $liste->fetch()){
						echo("<div><h3>".$donnees['prenom']." ".$donnees['nom']."</h3></div><ul>");
						echo("<div><li>Role: ".$donnees['role']."</li></div>");
						echo("<div><li>Courriel: ".$donnees['courriel']."</li></div>");
						echo("<div><li>Poste téléphonique: ".$donnees['tel_poste']."</li></div>");
						echo("<div><li>Site: <a href='".$donnees['site']."'>".$donnees['site']."</a></li></div></ul>");
					}
				}
				
				//Recherche de pages
				$liste = "";
				$sql="SELECT * FROM page WHERE titre LIKE '%$recherche%' OR resume LIKE '%$recherche%'";
				$liste = $pdo->query($sql);
				if($liste->fetch()){
					$liste = $pdo->query($sql);
					echo("<h2>Dans les pages: </h2>");
					while($donnees = $liste->fetch()){
						echo("<div><h3>".$donnees['titre']."</h3></div><ul>");
						echo("<div><li><a href='#'>Lien vers la page</a></li></div>");
						echo("<div><li>Résumé de la page: ".$donnees['resume']."</li></div></ul>");
					}
				}
				
				//Recherche d'actualité
				$liste = "";
				$sql="SELECT * FROM actualite WHERE titre LIKE '%$recherche%' OR contenu LIKE '%$recherche%'";
				$liste = $pdo->query($sql);
				if($liste->fetch()){
					$liste = $pdo->query($sql);
					echo("<h2>Dans les actualités: </h2>");
					while($donnees = $liste->fetch()){
						echo("<div><h3>".$donnees['titre']."</h3></div><ul>");
						echo("<div><li>Auteur: ".$donnees['auteur']."</li></div>");
						echo("<div><li>Date: ".$donnees['date']."</li></div>");
						echo("<div><li>Contenu de l'actualité: ".$donnees['contenu']."</li></div></ul>");
					}
				}
			}
		  ?>
		  
		  <div>
			  <form action="resultat.php" method="GET">
			  <input type="text" name="recherche" size="50" />
			  <input type="submit" value="Search">
			  </form>
		  </div>
        </div>
      </div><!-- FIN CONTENEURVS -->

      <div id="citations">
        <p class="cita">"Une formation qui a de l'avenir..."</p>
      </div><!-- FIN CITATIONS -->
        
      
    </div><!--FIN content -->
  
    <div class="clear"></div>

    <?php include("morceaux/footer.php") ?>

  </div>
</div>
</body>
</html>
