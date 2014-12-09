<?php include("morceaux/header.php");?>

<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Slider -->
    <?php include('morceaux/slider.php') ?>
    <!-- main content -->
    <div id="homepage">
     <!-- #tim? Image -->
    </div>
    <!-- main content -->
    <div id="content">

      <div id="conteneurmatieres">
      <h1>L'équipe enseignante</h1>
        <div id="matieres">

            <?php include('admin/connectionbdd.php'); 
            $sql ="SELECT * FROM prof ORDER BY prenom ASC";
            $liste = $pdo->query($sql);
            while ($data = $liste->fetch()) {
              echo "<div class='enseignants'>";
              echo "<img src='admin/".$data['image']."' alt='".$data['prenom']."' width='170' height='200'/>";
              echo "<h2>".$data['prenom']." ".$data['nom']."</h2>";
              echo "<ul>";
              echo "<li>".$data['role']."</li>";
              echo "<li><a href='mailto:".$data['courriel']."'>Courriel</a></li>";
              echo "<li> Poste :".$data['tel_poste']."</li>";
              echo "<li> Bureau :".$data['bureau']."</li>";
              echo "<li> Site Web : <br/ > <a href='".$data['site']."'target='_blank'>".$data['courriel']."</a></li>";
              echo "</ul>";
              echo "</div>";
            }
            ?>    
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
</body>
</html>
