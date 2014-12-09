<?php include("morceaux/header.php");?>

<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Slider -->
    <?php include('morceaux/slider.php') ?>
    <!-- main content -->
    <div id="homepage">

     <!-- #tim? Image -->

      <section id="services" class="clear"> 
          <img src="images/porfolio.png" alt="Portfolios" title="Portfolios" width="960" height="104">
      </section>

      
   <!-- #TIM? image -->
      
    </div>
    <!-- main content -->
    <div id="content">
      <div id="conteneurprincipal">
        <h1>Porfolios de nos étudiants de 3e année</h1>
        <div class="conteneursecondaire">
          <ul id='da-thumbs' class='da-thumbs'>

          <?php 
                include('admin/connectionbdd.php');
                $sql="SELECT * FROM portfolio ORDER BY RAND()";
                $liste = $pdo->query($sql);
                while ($data = $liste->fetch()) {
                  echo "<ul id='da-thumbs' class='da-thumbs'>\n";
                  echo "<li>";
                  echo "<a href='".$data['lien']."' target='_blank'>";
                  if ($data['image'] != null) {
                     echo "<img src='admin/".$data['image']."'width='240' height='240' />";
                  }else{
                     echo "<img src='admin/upload/inconnu.jpg' width='240' height='240' />";
                  }
                  echo "<div><span>".$data['etudiant']."</span><span class='plus'>+</span></div>";
                  echo "</a>";
                  echo "</li>";
                }
          ?>
          </ul>
        </div>
      </div>
      
      <div class="clear"></div>
      <div id="citations">
        <p class="cita">"Une formation qui a de l'avenir..."</p>
      </div><!-- FIN CITATIONS -->
        
      
    </div><!--FIN content -->
  
    <div class="clear">

    <?php include("morceaux/footer.php") ?>
</div>

<!-- appel du script qui servira au hover -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>  
    
    <script type="text/javascript">
      $(function() {
      
        $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

      });
</script>
<script src="js/modernizr.custom.97074.js"></script>

</body>
</html>
