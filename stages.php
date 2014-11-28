<?php include("morceaux/header.php");?>

<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Slider -->
    <section id="slider"><a href="#"><img src="images/slider.jpg" alt="Slider1" width="960" height="auto"></a></section>
    <!-- main content -->
    <div id="homepage">

     <!-- #tim? Image -->

      <section id="services" class="clear"> 
          <img src="images/stages.png" alt="Stages" title="Stages" width="960" height="104">
      </section>
      <section>
        <article id="proweb">
            <img src="images/stagiaire.jpg" alt="Stage" title="Stage" width="312" height="300">
        </article>
        <article id="descriptionproweb">
              
                <h2>Stages</h2>
                <li>
                  <p>
                    Dans le souci de dispenser une formation de qualité et un programme adapté aux besoins des entreprises, nous offrons la possibilité à nos étudiants de réaliser des stages rémunérés selon la formule Alternance travail-études (ATE).
                    À l'hiver 2015, nos étudiants finissants auront l'opportunité d'effectuer un stage en entreprise selon la formule Alternance travail-études (ATE) ou selon la formule de stage non rémunéré.
                  </p>
                </li>
                
                <h2 id="lienancre"><a href="#infos">Informations et dates</a></h2>
                <h2 id="lienancre"><a href="#proposerunstage">Proposer un stage</a></h2>
                <h2 id="lienancre"><a href="#temoignagesdemployeurs">Témoignages d'employeurs</a></h2>
                
        </article>
      </section>

      
   <!-- #TIM? image -->
      
    </div>
    <!-- main content -->
    <div id="content">
      <div id="conteneurprincipal">
        <h1 id="infos">Informations et dates</h1>
        <div class="conteneursecondaire">

          <table class="tableau" border="1">
            <tr class="formation">
              <td>Stage</td>
              <td>Étudiants visés</td>
              <td>Durée</td>
              <td>Dates</td>
            </tr>
            <tr>
              <td>Stage 1 - Été - ATE</td>
              <td>2e année</td>
              <td>8 à 11 semaines</td>
              <td>25 mai au 7 août 2015</td>
            </tr>
            <tr>
              <td>Stage 2 - Stage crédité<sup>1</sup></td>
              <td>3e année (finissants)</td>
              <td>6 semaines<sup>2</sup></td>
              <td>23 février au 2 avril 2015</td>
            </tr>
            <tr>
              <td>Stage 2 - Hiver - ATE3</td>
              <td>3e année (finissants)</td>
              <td>8 semaines</td>
              <td>7 avril au 29 mai 2015</td>
            </tr>
            <tr>
              <td>Stage - Hiver 3e année (finissants)<br /> (étudiants français)</td>
              <td>10 semaines<sup>4</sup></td>
              <td>11 semaines<sup>5</sup></td>
              <td>23 février au 1re mai 2015<br /> 23 février au 8 mai 2015</td>
            </tr>
            </tr>
              <td colspan="4">
                <sup>1</sup> Tous les étudiants doivent obligatoirement réaliser un stage crédité (non rémunéré). <br /> 
                <sup>2</sup> Le nombre d'heures minimales obligatoires pour le stage crédité est de 210 heures. <br />
                <sup>3</sup> Ceux qui ont réalisé un stage crédité (non rémunéré) et qui par la suite réalisent un stage (rémunéré) selon la formule ATE de 8 semaines, doivent réaliser leur stage ATE de préférence en continuité dans la même entreprise. <br />
                <sup>4</sup> Stage étudiants français : 10 semaines (Chambéry, Cherbourg, Laval, Montbéliard, St-Dié). <br />
                <sup>5</sup> Stage étudiants français : 11 semaines (Troyes).
              </td>
            </tr>
          </table>

          <p>
            Par ailleurs, mentionnons également que l'entreprise qui embauche un étudiant peut, à certaines conditions, bénéficier d'une aide financière pour le salaire du stagiaire et du superviseur par l'entremise d'un crédit d'impôt. Vous pouvez obtenir de l'information sur cette mesure d'aide à <a href="www.inforoutefpt.org/creditimpot/">www.inforoutefpt.org/creditimpot/</a>.
          </p>
          
          
        </div>

        <h1 id="proposerunstage">Proposer un stage à nos étudiants</h1>
        <div class="conteneursecondaire">
          <p>
            Si vous êtes intéressé à obtenir des informations sur les stages ou encore à accueillir un stagiaire dans votre entreprise, communiquez avec nous dans les plus brefs délais à l'aide du formulaire ci-dessous. Il nous fera plaisir de vous informer des modalités de stage et par la même occasion de vous suggérer des étudiants pour réaliser vos projets Web ou sur support.
          </p>
          <p>
            Les champs précédés d'un <span class="important">*</span> sont à remplir obligatoirement.
          </p>
            <form action="" method="post" class="formstage">
              <div class="box">
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
                  <p>Sujet <span class="important">*</span></p>
                  <select id="Sujet" name="sujet" >
                    <option selected value="selectionner" disabled>Votre sujet...</option>
                    <option value="proposer">Proposer un stage</option>
                    <option value="info">Demande d'informations</option>
                  </select>
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

            <div class="clear"></div>
        
        </div>

        <h1 id="temoignagesdemployeurs">Témoignages d'employeurs</h1>
        <div class="conteneursecondaire">
          <div class="temoignages">
            <h2>KNGFU INC., Montréal</h2>
            <p class="imgalign">
                <img src="images/kngfu.jpg" alt="Kunk fu numerik inc" width="240" height="120" />
              </p>
            <p>
              Ce qui nous a le plus séduit avec les étudiants du Cégep de Matane ce sont leurs qualités humaines, la recherche du surpassement de soi et leur passion du travail bien fait. C’est avec grand plaisir que nous les accueillons d’année en année. Soyez en fier. <br />
              <span class="nomtemoignage">Karl-André St-Victor, producteur</span>
            </p>
          </div>

          <div class="temoignages">
            <h2>LES INDUSTRIES JACK, Matane</h2>
            <p class="imgalign">
                <img src="images/jack.jpg" alt="Les industries Jack" width="240" height="120" />
            </p>
            <p>
              Les Industries Jack ont apprécié les stagiaires du programme « Techniques d’intégration multimédia » depuis plusieurs années et ont toujours été très satisfait du travail accompli dans le cadre de ces stages. Les étudiants de ce programme sont versatiles dans la réalisation des tâches à accomplir. C’est à dire qu’ils sont aussi bien aptes à filmer et faire le montage de vidéo qu’à réaliser un court métrage de A à Z. Ils peuvent concevoir la mise en page d’un site Web et faire les suivis nécessaires en tant que webmestre. Ils sont très compétents pour tout ce qui touche aux graphiques publicitaires et certains d’entre eux ont aussi une vision globale de l’entreprise (ce qui est un atout). Le sens de la responsabilité et des délais à remplir sont quelques-unes des qualités que j’ai appréciées au cours des différents stages que j’ai eu à superviser. En souhaitant une longue vie au programme. <br />
              <span class="nomtemoignage">Ginette Laflamme pour les Industries Jack</span>
            </p>
          </div>

          <div class="temoignages">
            <h2>PRAXEM, Rimouski</h2>
            <p class="imgalign">
                <img src="images/praxem.jpg" alt="PRAXEM" width="240" height="120" />
              </p>
            <p>
              Nous collaborons depuis plusieurs années avec le Cégep de Matane pour offrir des stages au sein de notre entreprise. Les étudiants peuvent ainsi démontrer leur talent créatif dans la production de jeux pédagogiques en ligne qui sont commercialisés dans tout le Canada. Ce fut un plaisir de travailler avec des étudiants compétents et motivés. Ils nous ont fait profiter à la fois de leurs talents, de leur expertise et de leur sens du travail en équipe. Nous gardons un bon souvenir de chacun d'entre eux et nous tentons de rester en contact par Internet. En terminant, un gros merci aux professeurs du Cégep de Matane qui savent si bien comprendre nos besoins et trouver des stagiaires susceptibles d'y répondre. Un bon appariement entre l'étudiant et l'entreprise demeure le meilleur gage d'un stage profitable.  <br />
              <span class="nomtemoignage">Luc Desaulniers, président de Praxem.</span>
            </p>
          </div>



          
        
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
