<?php include('header-admin.php'); ?>

<h1>#TIM Matane Administration</h1>	
<h2>Modifier l'ordre d'apparition des menu existants sur le site.</h2>
<p> Vous pouvez modifier içi l'ordre d'apparition des menus sur le site. Selectionner l'indice coincident au menu choisi. L'indice 1 fera apparaitre le menu le plus à gauche sur votre site. <span>Il ne peut avoir que 7 menus</span>, à vous de les organiser et de choisir dans quel ordre les faire apparaitre !</p>
<p>Voir cette image d'exemple :</p>
<img src="menu.jpg" alt="exemple du menu"/> <br /><br /> <br />
<div class="liste-deroulante">



<form action="traitement-apparition-menu.php" method="POST">
	
		<fieldset>
			<legend>Gerez les indices :</legend>
			<?php 
				$sql="SELECT * FROM menu";
				$req = $pdo->query($sql);
				$position =0;

				$nb_menu =0;
				while($data = $req->fetch()){
					$nb_menu ++;
				}

				$sql="SELECT * FROM menu";
				$req = $pdo->query($sql);

				while($data = $req->fetch()){
					$position++;
					echo "<p class='border-deroulant'>".$data['nom']."  <select class='select' name='position".$position."'>";
					for($i=1; $i < $nb_menu+1; $i++) { 
						echo "<option value='$i'> $i </option>";
					}
					echo "</select> </p> ";
				}
			?>
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
 </div>


