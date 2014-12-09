<?php include("morceaux/header.php");?>

<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- Slider -->
    <?php include('morceaux/slider.php') ?>
    <!-- main content -->
    <div id="homepage">
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
            Merci de remplir <span class="important">tous</span> les champs afin de valider et d'envoyer votre formulaire.
          </p>
            <form action="" method="post" class="formstage">
              <div class="box">
                <fieldset>
                <legend>Coordonnées de l'organisation</legend>
                  <label>
                    <p>Nom</p>
                    <input id="nomorga" type="text" name="telorga" placeholder="Nom de l'organisation">
                  </label>
                  <label>
                    <p>Adresse</p>
                    <input id="adressorga" type="text" name="adressorga" placeholder="Adresse">
                  </label>
                  <label>
                    <p>Ville </p>
                    <input id="villorga" type="text" name="villorga" placeholder="Ville">
                  </label>
                  <label>
                    <p>CP</p>
                    <input id="codepostalorga" type="text" name="codepostalorga" placeholder="Code postal">
                  </label>
                  <label>
                    <p>Téléphone </p>
                    <input id="telorga" type="text" name="telorga" placeholder="Téléphone">
                  </label>
                  <label>
                    <p>Courriel </p>
                    <input id="courrielorga" type="text" name="courrielorga" placeholder="Courriel">
                  </label>
                   <label>
                    <p>Site web </p>
                    <input id="siteweborga" type="text" name="siteweborga" placeholder="Site web">
                  </label>
                  <label>
                    <p>Télécopieur </p>
                    <input id="telecopieurorga" type="text" name="telecopieurorga" placeholder="Télécopieur">
                  </label>
                </fieldset>

                <fieldset>
                  <legend>Lieu de stage</legend>
                  <label>
                    <p>&nbsp</p>
                    <input type="checkbox" id="checkbox">Même adresse que ci-dessus</input>
                  </label>
                  <label>
                    <p>Adresse </p>
                    <input id="adressorga" type="text" name="adressorga" placeholder="Adresse">
                  </label>
                  <label>
                    <p>Ville </p>
                    <input id="villorga" type="text" name="villorga" placeholder="Ville">
                  </label>
                  <label>
                    <p>CP</p>
                    <input id="codepostalorga" type="text" name="codepostalorga" placeholder="Code postal">
                  </label>
                </fieldset>

                <fieldset>
                  <legend>Répondant en milieu de stage</legend>
                  <label>
                    <p>Nom </p>
                    <input id="nomrepondant" type="text" name="nomrepondant" placeholder="Nom du répondant">
                  </label>
                  <label>
                    <p>Titre </p>
                    <input id="titrerepondant" type="text" name="titrerepondant" placeholder="Titre du répondant">
                  </label>
                </fieldset>

                <fieldset>
                  <legend>Superviseur en milieu de stage</legend>
                  <label>
                    <p>&nbsp</p>
                    <input type="checkbox" id="checkbox" name="memepersonne">Même personne que ci-dessus</input>
                  </label>
                  <label>
                    <p>Nom </p>
                    <input id="nomsuperviseur" type="text" name="nomsuperviseur" placeholder="Nom"> 
                  </label>
                  <label>
                    <p>Titre </p>
                    <input id="titresuperviseur" type="text" name="titresuperviseur" placeholder="Titre">
                  </label>
                </fieldset>

                <fieldset>
                  <legend>Directeur des ressources humaines ou directeur de l'organisation</legend>
                  <label>
                    <p>Nom </p>
                    <input id="nomdirect" type="text" name="nomdirect" placeholder="Nom"> 
                  </label>
                  <label>
                    <p>Titre </p>
                    <input id="titredirect" type="text" name="titredirect" placeholder="Titre"> 
                  </label>
                </fieldset>

                <fieldset>
                  <legend>Description de l'organisation</legend>
                  <label>  
                    <p>Description </p>
                    <textarea class="message" name="descriptionorga" rows="4" cols="50" placeholder="Description de votre organisation"></textarea>
                  </label>  
                  <label>  
                    <p>Nombre d'employés </p>
                    <input class="number" type="number" min="0" />
                  </label>
                </fieldset>

                <fieldset>
                  <legend>Description du poste</legend>
                  <label>
                    <p>Poste offert </p>
                    <input id="posteoffert" type="text" name="posteoffert" placeholder="Poste offert"> 
                  </label>

                  <label>  
                    <p>Nature du poste </p>
                    <textarea class="message" name="natureposte" rows="4" cols="50" placeholder="Description du poste, nature de la tâche et de ses responsabilités..."></textarea>
                  </label>  
                  <label>  
                    <p>Compétences</p>
                    <textarea class="message" name="natureposte" rows="4" cols="50" placeholder="Connaissances et habiletés souhaitées..."></textarea>
                  </label>
                </fieldset>

                <fieldset>
                  <legend>Dates du stage</legend>
                  <label>  
                    <p>Stage 1</p>
                    <input type="checkbox" id="checkbox" name="stage1">Du 23 février 2015 au 2 avril 2015.<br /> Stage crédité (stage non rémunéré et non éligible pour le crédit d'impôt)</input>
                  </label>
                  <label>
                    <p>Nombre d'h/semaine</p>
                    <input id="nbheures1" type="text" name="nbheures" placeholder="Nombre d'heures"> 
                  </label>

                  <label>  
                    <p>Stage 2</p>
                    <input type="checkbox" id="checkbox" name="stage1">Du 23 février 2015 au 1e mai 2015.<br /> Stage crédité des étudiants français au Québec (non rémunéré et non éligible pour le crédit d'impôt)</input>
                  </label>
                  <label>
                    <p>Nombre d'h/semaine</p>
                    <input id="nbheures2" type="text" name="nbheures2" placeholder="Nombre d'heures"> 
                  </label>

                  <label>  
                    <p>Stage 3</p>
                    <input type="checkbox" id="checkbox" name="stage1">Du 7 avril 2015 au 29 mai 2015.<br /> Stage ATE (stage rémunéré et éligible pour le crédit d'impôt)</input>
                  </label>
                  <label>
                    <p>Nombre d'h/semaine</p>
                    <input id="nbheures3" type="text" name="nbheures3" placeholder="Nombre d'heures"> 
                  </label>
                  <label>
                    <p>Taux horaire</p>
                    <input id="txh" type="text" name="txh" placeholder="Taux horaire"> 
                  </label>
                </fieldset>

                <fieldset>
                <legend>Autres commentaires</legend>
                  <label>  
                    <p>Commentaire</p>
                    <textarea class="message" name="commentaire" rows="4" cols="50" placeholder="Autres commentaires..."></textarea>
                  </label>
                </fieldset>

                <label>
                  <p>&nbsp</p>
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
