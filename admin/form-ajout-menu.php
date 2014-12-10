<?php
	include_once "header-admin.php";
?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter un menu principal</h2>
	<form action="traitement-ajouter-menu.php" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			<div id="liste-elements">
				<div>
					<label for="nom">Intitulé du menu principal : </label>
					<input type="text" name="nom" id="nom"/>
				</div>
				
				<div>
				<?php
					//Requete à la BD pour PAGE
					$sql="SELECT * FROM page";
					$req = $pdo->query($sql);
					
					//Fait apparaître le select
					echo "<p class='border-deroulant'><label for='nom_lien'>Lien du menu principal : </label><select class='select' name='nom_lien'>";
					
					//Choix vide
					echo "<option value=''></option>";
					
					//Affiche comme option: Les pages; Le value du POST = Id de la page
					while($data = $req->fetch()){
						echo "<option value='".$data['page_id']."'>".$data['titre']."</option>";
					}
					
					echo "</select> </p> ";
				?>
				</div>
			</div>
			
			<!-- Boutton permettant d'appeler une fonction AJAX dans script.js -->
			<!-- Permet l'ajout de sous-menu -->
			<a href="#" onclick="javascript:ajoutSM('menu')" >Ajouter un sous-menu : </a>
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	</section>
	</div>

	</body>
</html>
