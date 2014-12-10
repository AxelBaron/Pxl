<?php include("morceaux/head.php") ?>
<title>TIM Matane - Résultat de votre recherche</title>
<meta description="Voici la résultat de votre recherche sur le site du département TIM du Cégep de Matane." >
</head>
<?php include("morceaux/header.php");?>

<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Slider -->
    <?php include('morceaux/slider.php') ?>
    <!-- main content -->
    <div id="homepage">

    </div>
    <!-- main content -->
    <div id="content">

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
						echo("<div><li><a href='".nomDuFichier($donnees['titre']).".php'>Lien vers la page</a></li></div>");
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
