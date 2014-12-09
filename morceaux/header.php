<!DOCTYPE html>
<html>
  <head>
    <title>Site Web Techniques d'intégration Multimédia</title>
    <meta charset="utf-8">

    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /><![endif]-->
    <link rel="stylesheet" media="screen" href="style.css" type="text/css">
<<<<<<< HEAD
    
=======
>>>>>>> FETCH_HEAD
    <script type="text/javascript">
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
    </script>
    <link rel="shortcut icon" href="../favicon.ico"> 
    <script src="js/modernizr.custom.js"></script>
  </head>
  <body>
  <div>
    <header id="header">
      
      <!-- Retrait de la div logo de la liste pour un placement plus facile -->
      <div id="logo">
           <a href="index.php"><img src="images/timorange.png" alt="Logo TIM" width="240" height="88" /></a>
      </div>
    
    <!-- MENU RESPONSIVE -->
    <div class="container demo-1">  
            <div id="dl-menu" class="dl-menuwrapper">
              <button class="dl-trigger">Open Menu</button>
              <ul class="dl-menu">
        
        <?php
        include ("admin/connectionbdd.php");
        
        //Requete à la BD pour MENU
        $sql="SELECT * FROM menu ORDER BY position ASC";
        $req = $pdo->query($sql);
        
        //Affiche comme option: Les pages; Le value du POST = Id de la page
        while($data = $req->fetch()){
          echo("<li>");
          
            //Si il y a un lien pour la page du menu
            if($data["nom"] != ""){
       
           if($data["nom_lien"] != ""){
            //Requete à la BD pour PAGE
            $sql="SELECT * FROM page WHERE page_id=".$data["nom_lien"];
            $liste = $pdo->query($sql);
            $reponse = $liste->fetch();
            //Affiche l'élément dans le menu
            print_r($data);
            print_r($reponse);
            echo("<a href='".urlencode($reponse['titre']).".php'>".$data['nom']."</a>");
            //S'il n'y a pas de lien de menu
          }else{
            echo("<a href='#'>".$data['nom']."</a>");
          }

            }else{
              //Affiche l'élément dans le menu
               echo("<a href='#'>".$data['nom']."</a>");
            }
            $auMoinsUnSM = false;
            //Vérifie s'il y a des sous-menu
            for($i = 1; $i < 9; $i++){
              //S'il y a un sous-menu
              if($data["sm_nom_$i"] != ""){
                
                if($auMoinsUnSM == false){
                  echo("<ul class='dl-submenu'>");
                  $auMoinsUnSM = true;
                }
              
                echo("<li>");
                if($data["sm_lien_$i"] != ""){
                  //Requete à la BD pour PAGE
                $sql="SELECT * FROM page WHERE page_id=".$data["sm_lien_$i"];
                $liste = $pdo->query($sql);
                $reponse = $liste->fetch();
                  echo("<a href='".urlencode($reponse['titre']).".php'>".$data["sm_nom_$i"]."</a>");
                }else{
                  echo("<a href='#'>".$data["sm_nom_$i"]."</a>");
                }

              }
              if($auMoinsUnSM == true && $i == 8){
                echo("</ul>");
              }
            
            }
            
          echo("</li>");
        }
        ?>
              </ul>
            </div>
          </div>

      
  <!-- MENU NORMAL -->
      <nav>
        <ul>
    <?php
    
    //Requete à la BD pour MENU
    $sql="SELECT * FROM menu ORDER BY position ASC";
    $req = $pdo->query($sql);
    
    //Affiche comme option: Les pages; Le value du POST = Id de la page
    while($data = $req->fetch()){
      echo("<li>");
      
        //Si il y a un lien pour la page du menu
       if($data["nom"] != ""){
       
    
       if($data["nom_lien"] != ""){
        //Requete à la BD pour PAGE
       $sql="SELECT * FROM page WHERE page_id=".$data["nom_lien"];
       $liste = $pdo->query($sql);
       $reponse = $liste->fetch();
        //Affiche l'élément dans le menu
        echo("<a href='".urlencode($reponse['titre']).".php'>".$data['nom']."</a>");
      }else{
        echo("<a href='#'>".$data['nom']."</a>");
      }

        }else{
          //Affiche l'élément dans le menu
          echo("<a href='#'>".$data['nom']."</a>");
        }
        echo("<ul>");
        //Vérifie s'il y a des sous-menu
        for($i = 1; $i < 9; $i++){
        
          //S'il y a un sous-menu
          if($data["sm_nom_$i"] != ""){
            
            if($data["sm_lien_$i"] != ""){
               //Requete à la BD pour PAGE
            $sql="SELECT * FROM page WHERE page_id=".$data["sm_lien_$i"];
            $liste = $pdo->query($sql);
            $reponse = $liste->fetch();
              echo("<a href='".urlencode($reponse['titre']).".php'>");
            }else{
              echo("<a href='#'>");
            }

            echo("<li>".$data["sm_nom_$i"]."</li>");
            echo("</a>");
          }
        }
        echo("</ul>");
      echo("</li>");
    }
    ?>
        </ul>
      </nav>
    </header>
  </div>
