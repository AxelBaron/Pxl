<?php include("morceaux/header.php") ?>
<?php include("admin/connectionbdd.php"); ?>
<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Silder -->
    <section id="slider"><a href="index.php"><img src="images/slider.jpg" alt="Slider1" width="960" height="230" /></a></section>
    <!-- main content -->
    <div id="homepage">
     <!-- #Index Image -->

      <section id="services" class="clear"> 
          <img src="images/index.png">
      </section>

      <!-- #TIM Matane en Vidéo -->
      <section>
      <article id="tim_video">
          <img src="images/youtube.jpg" alt="Les pros du web" title="Les pros du web" width="411" height="315">
      </article>
        <article id="descriptionproweb">
            
              <h2>#TIM en vidéo </h2>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique elementum dolor, maximus vestibulum ante varius id. 
              Integer non dapibus ligula. Morbi finibus tortor sit amet ex maximus, sed elementum sapien sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Vivamus dapibus finibus ante, vitae tempus velit ali„quet sed. Morbi rhoncus lorem quis felis mattis, vitae tincidunt quam malesuada. 
              Aenean tincidunt turpis non arcu elementum varius. In quis tortor sit amet nulla consectetur malesuada in id nulla. 
              Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed a urna vulputate eros tempor consectetur. </p></li>
              <h2 id="lienancre"><a href="http://www.cegep-matane.qc.ca/medias/Depliant/multimedia1415.pdf" target="_blank" alt"Dépliant de la formation multimédia">Dépliant récapitulatif de la formation</a></h2>

              
              
        </article>
      </section>
    </div>
    <!-- main content -->
    <div id="content">
      <section>
        <?php include("morceaux/cinqpts.php") ?>
      </section>

      <div id="conteneurprincipal">
        <div id="conteneurun">

          <h1>Actualités</h1>
          <hr />
          <article class="contenuprincip">
          <?php  
            $sql="SELECT * FROM actualite ORDER BY date DESC";
            $liste = $pdo->query($sql);

            $nb_actu =0;
            while ($data = $liste->fetch()) {
              if ($nb_actu <2) {
                  $nb_actu ++;
                  echo "<h2>".$data['titre']."</h2>";
                  echo "<p class='actu-date'>".$data['date']."</p>";
                  if (strlen($data['contenu'])> 660){
                    $text= substr($data['contenu'],0,660);
                    echo "<p>".$text."<a href='actualite_selected.php?actu=".$data['actu_id']."'> ... Lire la suite.</a> </p>";
                  }else{
                    echo "<p>".$data['contenu']."</p>";
                  }
                  echo "<img src='admin/".$data['image']."'/>";
              }
             
            }
            
          ?>
          </article>
          

        </div>
        
        <div id="conteneurdeux">
          <h1>Portfolios</h1>
          <hr />
          
          <a href="stages.php#proposerunstage" title="Proposer un stage">
            <div id="proposerstage">
              <p>Proposer un stage</p>
            </div>
          </a>

          <?php $sql="SELECT * FROM portfolio ORDER BY RAND()";
                $liste = $pdo->query($sql);

                $nb_portfolio =0;
                while ($data = $liste->fetch()) {
                    if ($nb_portfolio < 3) {
                        $nb_portfolio ++;
                        echo '<ul class="ch-grid">';
                        echo '<li>';
                        echo '<div class="ch-item ch-img-1">';
                        echo '<div class="ch-info">';
                        echo '<a href="#">';
                        echo '<h3>Visitez ce portfolio </h3>';
                        echo'<h3> + </h3>';
                        echo '<h3>Par '.$data["etudiant"].'</h3>';
                        echo '</a>';
                        echo '</div>'; 
                        echo '</div>';
                        echo '</li>';
                        echo '</ul>';
                      }
                }
          ?>

        </div><!-- FIN CONTENEUR 2 -->
      </div>
    <!-- content body -->
    </div>
  <div class="clear"></div> 
  <div id="citations">
    <p class="cita">"Une formation qui a de l'avenir..."</p>
  </div><!-- FIN CITATIONS --> 
  <?php include("morceaux/footer.php") ?>
</div>
</body>
</html>


