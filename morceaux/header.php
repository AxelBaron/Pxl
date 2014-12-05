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
</head>
<body>
<div>
  <header id="header">
    
    <!-- Retrait de la div logo de la liste pour un placement plus facile -->
    <div id="logo">
         <a href="index.php"><img src="images/timorange.png" alt="Logo TIM" width="240" height="88"></a>
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
            <a href="equipe.php">
              <li>Enseignants</li>
            </a>
          </ul>
        </li>
        <li>
          <a href="porfolios.php">Porfolios</a>
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