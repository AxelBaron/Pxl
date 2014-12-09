<?php include("morceaux/header.php") ?>
<title>TIM Matane - Actualité choisie</title>
<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Silder -->
    <?php include('morceaux/slider.php') ?>
    <!-- main content -->
	    <div id="homepage">

	     <!-- #Index Image -->

	      <section id="services" class="clear"> 
	          <img src="images/Actu.png">
	      </section>

	   	</div>
    </section>
    <!-- main content -->
    <div id="content">

      <div id="conteneurprincipal">
        <div id="conteneurun">
  
          <article class="contenuprincip">
          <?php 
                include('admin/connectionbdd.php');
                $actu_id = $_GET['actu'];
                $sql="SELECT * FROM actualite WHERE actu_id = $actu_id";
                $liste = $pdo->query($sql);
                while ($data = $liste->fetch()) {
                  echo "<h2>".$data['titre']."</h2>";
                  echo "<p>".$data['date']."</p>";
                  echo "<p>".$data['contenu']."</p>";
                  echo "<p class='imgalign'><img src='admin".$data['image']."' alt='image actualité'' width='680' height='200'></p>";
                } 
          ?>

          <a href="" alt="plus d'articles" title="plus d'articles">
            <div id="plus">
              <p>+</p>
            </div>
          </a>
        </div>
        
        <div id="conteneurdeux">
          <h1>Archives</h1>
          <hr />
          
          <ul>
          	<li>
          		Novembre
          		<ul>
          			<li>Vendredi 21</li>
          			<li>Mercredi 6</li>
          		</ul>

          	</li>

          	<li>Octobre</li>
          	<li>Septembre</li>
          	<li>Août</li>
          	<li>Juillet</li>
          	<li>Juin</li>
          	<li>Mai</li>
          	<li>Avril</li>
          	<li>Mars</li>
          	<li>Février</li>
          	<li>Janvier</li>
          	<li>
          		2013
          		<ul>
          			<li>Décembre</li>
          			<li>Novembre</li>
		          	<li>Octobre</li>
		          	<li>Septembre</li>
		          	<li>Août</li>
		          	<li>Juillet</li>
		          	<li>Juin</li>
		          	<li>Mai</li>
		          	<li>Avril</li>
		          	<li>Mars</li>
		          	<li>Février</li>
		          	<li>Janvier</li>
		        </ul>
		    </li>
          </ul>

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


