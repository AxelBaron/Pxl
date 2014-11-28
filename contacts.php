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
          <img src="images/contact.png" alt="Contact" title="contact" width="960" height="104" />
      </section>
      
    </div>
    <!-- main content -->
    <div id="content">


      <div id="conteneurprincipal">
        <h1 id="timcestquoi">Contacter le département TIM</h1>
        <div class="conteneursecondaire">

          <div id="formulaire">
            <form action="" method="post" class="contacter">
              <h2>Contacter nos enseignants</h2>
              
                <a href="equipe.php" alt="l'équipe">
                  <div class="contactenseignants">
                    <p>Contacter les enseignants</p>
                  </div>
                </a>
              <div class="box">
                <h2>Formulaire de contact</h2>
                <p>Les champs précédés d'un <span class="important">*</span> sont à remplir obligatoirement.</p>
                <label>
                  <p>Prénom <span class="important">*</span></p>
                  <input id="Prenom" type="text" name="Prenom" placeholder="Prenom">
                </label>
                <label>
                  <p>Nom <span class="important">*</span></p>
                  <input id="Nom" type="text" name="Nom" placeholder="Nom"> <br>
                </label>
                <label>
                  <p>E-mail <span class="important">*</span></p>
                  <input id="Email" type="email" name="Email" placeholder="E-mail">
                </label>
                <label>
                  <p>Sujet</p>
                  <input id="Sujet" type="text" name="Sujet" placeholder="Sujet"> <br>
                </label>
                <label>  
                  <p>Message <span class="important">*</span></p>
                  <textarea class="message" rows="4" cols="50" placeholder="Message"></textarea>
                </label>  
                <label>
                  <input class="button" type="submit" value="Envoyer">
                </label>

              </div>
            </form> 
          </div>

          <div id="adresse">
            <h2>Coordonnées</h2>
            <p>
              Techniques d'intégration multimédia <br />
              Cégep de Matane <br />
              616, avenue Saint-Rédempteur <br />
              Matane, QC  G4W 1L1 <br />
              Canada <br />
            </p>
            
            <p>
              Courriel : <a href="mailto:information@cegep-matane.qc.ca">information@cegep-matane.qc.ca</a>
            </p>
            <p>
              Téléphone : 418 562-1240 <br />
              Télécopieur : 418 562-2115 <br />
            </p>
            
          </div>
          <div id="google">
            <h2>Nous localiser</h2>
            <p>
            <!-- double p pour un saut de ligne et un alignement de la localisation -->
              <p class="imgalign">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1391.6780339894933!2d-73.43249079401886!3d45.76405389804488!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc8e5f41e191f55%3A0xeec7723d6f570bfd!2s120+Rue+Valmont%2C+Repentigny%2C+QC+J5Y+1N9!5e0!3m2!1sen!2sca!4v1416509416170" width="400" height="300" frameborder="0" style="border:0"></iframe>
              </p>
            </p>
          </div>
          <div class="clear"></div>
        </div>

      </div><!-- FIN CONTENEURVS -->
      
      <div class="clear"></div>
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
