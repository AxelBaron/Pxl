<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Site Web Techniques d'intégration Multimédia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="screen" href="style.css" type="text/css">
    <!-- <link rel="stylesheet" media="screen and (max-width : 959px) and (min-width : 841px)" href="stylegrandetablette.css" type="text/css">
     -->
     <!-- <link rel="stylesheet" media="screen and (max-width : 840px) and (min-width : 641px)" href="stylepetitetablette.css" type="text/css">
    <link rel="stylesheet" media="screen and (max-width : 640px)" href="stylesmartphone.css" type="text/css"> -->
    <script type="text/javascript">
    <!--
    sfHover = function() {
            var sfEls = document.getElementById("header").getElementsByTagName("LI");
            for (var i=0; i<sfEls.length; i++) {
                    sfEls[i].onmouseover=function() {
                            this.className+=" sfhover";
                    }
                    sfEls[i].onmouseout=function() {
                            this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                    }
            }
    }
    if (window.attachEvent) window.attachEvent("onload", sfHover);
    -->
    </script>
    <link rel="shortcut icon" href="../favicon.ico"> 
    <script src="js/modernizr.custom.js"></script>

  </head>
  <body>
  <div>
    <header id="header">
      
      <!-- Retrait de la div logo de la liste pour un placement plus facile -->
      <div id="logo">
           <a href="index.php"><img src="images/timorange.png" alt="Logo TIM" width="240" height="88"></a>
      </div>

          <div class="container demo-1">  
            <div id="dl-menu" class="dl-menuwrapper">
              <button class="dl-trigger">Open Menu</button>
              <ul class="dl-menu">
                <li><a href="actualites.php">Actualités</a></li>
                <li>
                  <a href="#">Programme</a>
                  <ul class="dl-submenu">
                    <li><a href="timcestquoi.php">TIM c'est quoi?</a></li>
                    <li><a href="grillecours.php">Grille des cours</a></li>
                    <li><a href="aprestim.php">Après TIM?</a></li>
                    <li><a href="enseignants.php">Enseignants</a></li>
                  </ul>
                </li>
                <li>
                  <a href="portfolios.php">Portfolios</a>
                </li>
                <li>
                  <a href="#">Cégep</a>
                  <ul class="dl-submenu">
                    <li><a href="materiel_locaux.php">Matériels & locaux</a></li>
                    <li><a href="clubs.php">Clubs</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Étudier à Matane</a>
                  <ul class="dl-submenu">
                    <li><a href="modalites.php">Modalités</a></li>
                    <li><a href="international.php">International</a></li>
                    <li><a href="cdrin.php">CDRIN</a></li>
                    <li><a href="regiondematane.php">Région de Matane</a></li>
                  </ul>
                </li>
                <li><a href="stages.php">Stages</a></li>
                <li><a href="contacts.php">Contact</a></li>
              </ul>
            </div><!-- /dl-menuwrapper -->
          </div>

      

      <nav>
        <ul>
          <li>
            <a href="actualites.php">Actualités</a>
          </li>
          <li>
            <a href="">Programme</a>
            <ul>
              <a href="timcestquoi.php">
                <li>Tim c'est quoi?</li>
              </a>
              <a href="grillecours.php">
                <li>Grille de cours</li>
              </a>
              <a href="aprestim.php">
                <li>Après TIM?</li>
              </a>
              <a href="enseignants.php">
                <li>Enseignants</li>
              </a>
            </ul>
          </li>
          <li>
            <a href="portfolios.php">Porfolios</a>
          </li>
          <li>
            <a href="#">Cégep</a>
            <ul>
              <a href="materiel_locaux.php"><li>Matériel & Locaux</li></a>
              <a href="clubs.php"><li>Clubs</li></a>
            </ul>
          </li>
          <li>
            <a href="#">Étudier à Matane</a>
            <ul>
              <!-- <a href="passerelledep.php"><li>Passerelle DEP</li></a> -->
              <a href="modalites.php"><li>Modalités</li></a>
              <a href="international.php"><li>International</li></a>
              <a href="cdrin.php"><li>CDRIN</li></a>
              <a href="regiondematane.php"><li>Région de Matane</li></a>
            </ul>
          </li>
          <li>
            <a href="stages.php">Stages</a>
          </li>
          <li>
            <a href="contacts.php">Contact</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>