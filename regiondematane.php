<?php include("morceaux/header.php");?>

<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Slider -->
    <section id="slider"><a href="index.php"><img src="images/slider.jpg" alt="Slider1" width="960" height="230" /></a></section>
    <!-- main content -->
    <div id="homepage">

     <!-- #tim? Image -->

      <section id="services" class="clear"> 
          <img src="images/matane.png" alt="Matanie" title="Matanie" width="960" height="104">
      </section>
      <section>
        <article id="proweb">
            <img src="images/matane4.jpg" alt="Matanie" title="Matanie" width="312" height="300">
        </article>
        <article id="descriptionproweb">
              
                <h2>La Matanie</h2>
                <p>La Matanie est une municipalité régionale de comté (MRC) de la région administrative du Bas-Saint-Laurent, dans la province de Québec, au Canada. Créée le 1er janvier 1982 sous le nom de Matane, elle a été renommée La Matanie le 9 mars 20133,4. Elle est composée de douze municipalités et d'un territoire non organisé. Son chef-lieu et unique ville est Matane qui comprend 66 % de la population de la MRC. Son préfet actuel est Pierre Thibodeau5.</p>
                
                <h2 id="lienancre"><a href="#loisirs">Loisirs</a></h2>
                <h2 id="lienancre"><a href="#tourisme">Aspects touristiques 2</a></h2>
                
                
        </article>
      </section>

      
   <!-- #TIM? image -->
      
    </div>
    <!-- main content -->
    <div id="content">
      <div id="conteneurprincipal">
        <h1>Les avantages de la région</h1>
        <div class="conteneursecondaire">
          <h2 id="loisirs">Loisirs</h2>
          <p>
            Matane et sa région immédiate comptent des attraits et des loisirs recherchés et enviables :
            <ul>
              <li>Les salles de spectacle Lucien-Bellemare, Albert-B.-Lavoie et Le Barachois</li>
              <li>Le cinéma Gaieté et le cinéma de répertoire offert par CinémAlice</li>
              <li>Le Complexe culturel Joseph-Rouleau abritant la Galerie d'art de Matane, la galerie Espace F, la collection du peintre Claude Picher La Couleur de la Gaspésie, la salle Isabelle-Boulay/Smurfit-Stone et la bibliothèque municipale</li>
              <li>Une fête de la voile : Cap sur Matane, les Fêtes du Québec maritime et toutes ces soirées où les spectacles organisés par le diffuseur Kaméléart deviennent des prétextes à la fête.</li>
            </ul>
          </p>

          <h2 id="tourisme">Aspects touristiques</h2>
          <p>
            Des attraits touristiques locaux reconnus :
            <ul>
              <li>Un bord de mer propice à la ballade, au kayak de mer et à la voile, avec en prime des couchers de soleil inoubliables;</li>
              <li>L'une des plus belles rivières à saumon d'Amérique : la rivière Matane;</li>
              <li>La Promenade des capitaines et le parc des Îles pour ses activités familiales ou sa piste de patins à roues alignées;</li>
              <li>La réserve faunique de Matane recherchée par les amateurs de pêche à la truite et de chasse à l'orignal ou au cerf de Virginie;</li>
              <li>Des sentiers aménagés pour le vélo de montagne ou la randonnée pédestre comme le Sentier international des Appalaches;</li>
              <li>Des montagnes, les Chic-Chocs, et leurs paysages grandioses;</li>
              <li>Des falaises de glace à gravir;</li>
              <li>Le parc éolien Le Nordais, unique, splendide et à voir absolument à Saint-Ulric et Cap-Chat;</li>
              <li>Et à proximité des attraits touristiques régionaux majeurs, tel le parc de la Gaspésie et les Jardins de Métis.</li>
            </ul>
            <p class="imgalign">
              <img src="" alt="img quelconque" width="960" height="547">
            </p>

            Matane met aussi au service de sa population : une marina et un club de voile, une piscine, un aréna, un centre de ski, une piste de ski de fond, des courts de tennis, une piste de patins à roues alignées, un terrain de golf, des salons de quilles, des sentiers de motoneige, un centre d'activité physique, etc.


          </p>
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
