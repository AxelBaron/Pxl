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
		
		<!-- MENU RESPONSIVE -->
		<div class="container demo-1">  
            <div id="dl-menu" class="dl-menuwrapper">
              <button class="dl-trigger">Open Menu</button>
              <ul class="dl-menu">
			  
			  <?php
				include "admin/connectionbdd.php";
				
				//Requete à la BD pour MENU
				$sql="SELECT * FROM menu ORDER BY position ASC";
				$req = $pdo->query($sql);
				
				//Affiche comme option: Les pages; Le value du POST = Id de la page
				while($data = $req->fetch()){
					echo("<li>");
					
						//Si il y a un lien pour la page du menu
						if($data["nom_lien"] != ""){
							//Requete à la BD pour PAGE
							$sql="SELECT * FROM page WHERE page_id=".$data["nom_lien"];
							$liste = $pdo->query($sql);
							$reponse = $liste->fetch();
						
							//Affiche l'élément dans le menu
							echo("<a href='".urlencode($reponse['titre']).".php'>".$data['nom']."</a>");
						}else{
							//Affiche l'élément dans le menu
							echo("<a href='".urlencode($reponse['titre']).".php'>".$data['nom']."</a>");
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
								//Requete à la BD pour PAGE
								$sql="SELECT * FROM page WHERE page_id=".$data["sm_lien_$i"];
								$liste = $pdo->query($sql);
								$reponse = $liste->fetch();
								
								echo("<li>");
								echo("<a href='".urlencode($reponse['titre']).".php'>".$data["sm_nom_$i"]."</a>");

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
				if($data["nom_lien"] != ""){
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page WHERE page_id=".$data["nom_lien"];
					$liste = $pdo->query($sql);
					$reponse = $liste->fetch();
				
					//Affiche l'élément dans le menu
					echo("<a href='".urlencode($reponse['titre']).".php'>".$data['nom']."</a>");
				}else{
					//Affiche l'élément dans le menu
					echo("<a href='".urlencode($reponse['titre']).".php'>".$data['nom']."</a>");
				}
				echo("<ul>");
				//Vérifie s'il y a des sous-menu
				for($i = 1; $i < 9; $i++){
				
					//S'il y a un sous-menu
					if($data["sm_nom_$i"] != ""){
						//Requete à la BD pour PAGE
						$sql="SELECT * FROM page WHERE page_id=".$data["sm_lien_$i"];
						$liste = $pdo->query($sql);
						$reponse = $liste->fetch();
						
						echo("<a href='".urlencode($reponse['titre']).".php'>");
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
