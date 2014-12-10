<?php include("morceaux/head.php") ?>
<title>TIM Matane - Enseignants de TIM</title>
<meta description="L'équipe enseignante de TIM se compose de plusieurs professeurs. Ceux-ci sont là pour vous aider dans votre apprentissage tout au long du cursus. Vous pouvez les contacter lorsque vous en avez besoin, il vous aideront." >
</head>
<?php include("morceaux/header.php");?>

<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Slider -->
    <?php include('morceaux/slider.php') ?>
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
              if ($data['image'] != null) {
                echo "<img src='admin/".$data['image']."'width='170' height='200' />";
              }else{
                echo "<img src='admin/upload/inconnu.jpg' width='170' height='200' />";
              }
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
