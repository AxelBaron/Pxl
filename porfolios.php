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
          <img src="images/porfolio.png" alt="Portfolios" title="Portfolios" width="960" height="104">
      </section>

      
   <!-- #TIM? image -->
      
    </div>
    <!-- main content -->
    <div id="content">
      <div id="conteneurprincipal">
        <h1>Porfolios de nos étudiants de 3e année</h1>
        <div class="conteneursecondaire">
          <ul id="da-thumbs" class="da-thumbs">
            <li>
              <a href="http://www.olivierapaya.com/" target="_blank">
                <img src="images/portfolio.jpg" width="240" height="240" />
                <div><span>Olivier Apaysas</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://samuelbertrand.com/portfolio/" target="_blank">
                <img src="images/portfolio2.jpg" width="240" height="240" />
                <div><span>Samuel Bertrand</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/bohemierl/Portfolio/" target="_blank">
                <img src="images/portfolio3.jpg" width="240" height="240" />
                <div><span>Lauriane Bohémier</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://www.jonathanpouliot.com/" target="_blank">
                <img src="images/portfolio.jpg" width="240" height="240" />
                <div><span>Johnatan Bouthat-Pouliot</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>  
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/dumontk/" target="_blank">
                <img src="images/portfolio2.jpg" width="240" height="240" />
                <div><span>Kévin Dumont</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/gauthiers/portfolio/" target="_blank">
                <img src="images/portfolio3.jpg" width="240" height="240" />
                <div><span>Stéphanie Gauthier</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/lefrancoisv/portfolio/" target="_blank">
                <img src="images/portfolio.jpg" width="240" height="240" />
                <div><span>Valérie Lefrançois</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/mastanem/portfolio/" target="_blank">
                <img src="images/portfolio2.jpg" width="240" height="240" />
                <div><span>Malo Mastane</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/messierm/portfolio/" target="_blank">
                <img src="images/portfolio3.jpg" width="240" height="240" />
                <div><span>Mathieu Messier</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/333-101/2012-13/michaud_s/wordpress/" target="_blank">
                <img src="images/portfolio.jpg" width="240" height="240" />
                <div><span>Steeve Michaud</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/moreaua/portfolio/" target="_blank">
                <img src="images/portfolio2.jpg" width="240" height="240" />
                <div><span>Adrien Moreau</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://www.samuelnadeau.ca/" target="_blank">
                <img src="images/portfolio3.jpg" width="240" height="240" />
                <div><span>Samuel Nadeau</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/perreaultj/portfolio/#all" target="_blank">
                <img src="images/portfolio.jpg" width="240" height="240" />
                <div><span>Jonathan Perreault</span><span class="plus">+</span></div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/perrona/portfolio/" target="_blank">
                <img src="images/portfolio2.jpg" width="240" height="240" />
                <div>
                  <span>Antoine Perron</span>
                  <span class="plus">+</span>
                </div>
              </a>
            </li>
            <li>
              <a href="http://tim.cgmatane.qc.ca/etudiants/2012/ruelv/portfolio/" target="_blank">
                <img src="images/portfolio3.jpg" width="240" height="240" />
                <div><span>Vincent Ruel</span><span class="plus">+</span></div>
              </a>
            </li>
            

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

    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>  
    
    <script type="text/javascript">
      $(function() {
      
        $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

      });
</script>

</body>
</html>
