<?php
	include_once "header-admin.php";
?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter un menu Principal</h2>
<script>
function ajoutSM(){
	//Sinon boucle pour savoir combien il y en a
	for(i = 0; i < 9; i++){
		if(document.getElementById('sm_nom_'+i)){
			var nbPresentSM = i;
		}
	}
	
	//S'il n'y a pas de sous-menu
	if(!nbPresentSM){
		var nbPresentSM = 0;
	}
	if(nbPresentSM < 8){
		$.ajax({
			data: 'fonction=ajoutSM&nbPresentSM='+nbPresentSM,
			url: 'fonctions.php',
			method: 'POST', // or GET
			success: function(elements) {
				//Ajoute le nouveau
				$('#liste-elements').append(elements);
			}
		});
	}
}
</script>
	<form action="traitement-ajouter-menu.php" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			<div id="liste-elements">
				<div>
					<label for="nom">Intitulé du menu principal</label>
					<input type="text" name="nom" id="nom"/>
				</div>
				
				<div>
					<label for="nom_lien">Lien du menu principal</label>
					<input type="text" id="test" name="nom_lien" />
				</div>
			</div>
			<a href="#" onclick="ajoutSM()" >Ajouter un sous-menu</a>
			<!--
			<div>
				<label for="sm_nom_1">Nom du premier sous menu. Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_nom_1" />
			</div>
			
			<div>
				<label for="sm_lien_1">Lien de la page vers lequel le sous-menu va pointé si on clic dessus.
				Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_lien_1" />
			</div>

			<div>
				<label for="sm_nom_2">Nom du premier sous menu. Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_nom_2" />
			</div>
			
			<div>
				<label for="sm_lien_2">Lien de la page vers lequel le sous-menu va pointé si on clic dessus.
				Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_lien_2" />
			</div>

			<div>
				<label for="sm_nom_3">Nom du premier sous menu. Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_nom_3" />
			</div>
			
			<div>
				<label for="sm_lien_3">Lien de la page vers lequel le sous-menu va pointé si on clic dessus.
				Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_lien_3" />
			</div>

						<div>
				<label for="sm_nom_4">Nom du premier sous menu. Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_nom_4" />
			</div>
			
			<div>
				<label for="sm_lien_4">Lien de la page vers lequel le sous-menu va pointé si on clic dessus.
				Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_lien_4" />
			</div>
			
			<div>
				<label for="sm_nom_5">Nom du premier sous menu. Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_nom_5" />
			</div>
			
			<div>
				<label for="sm_lien_5">Lien de la page vers lequel le sous-menu va pointé si on clic dessus.
				Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_lien_5" />
			</div>

			<div>
				<label for="sm_nom_6">Nom du premier sous menu. Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_nom_6" />
			</div>
			
			<div>
				<label for="sm_lien_6">Lien de la page vers lequel le sous-menu va pointé si on clic dessus.
				Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_lien_6" />
			</div>

			<div>
				<label for="sm_nom_7">Nom du premier sous menu. Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_nom_7" />
			</div>
			
			<div>
				<label for="sm_lien_7">Lien de la page vers lequel le sous-menu va pointé si on clic dessus.
				Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_lien_7" />
			</div>

			<div>
				<label for="sm_nom_8">Nom du premier sous menu. Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_nom_8" />
			</div>
			
			<div>
				<label for="sm_lien_8">Lien de la page vers lequel le sous-menu va pointé si on clic dessus.
				Laissez ce champs vide le menu principal ne contient pas de sous menu ou si ce sous menu n'est pas nécessaire</label>
				<input type="text" name="sm_lien_8" />
			</div>
			-->

			
			

		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	</section>
	</div>

	</body>
</html>