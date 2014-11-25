<?php
	include_once "header-admin.php";
?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter un menu Principal</h2>
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
			<a href="#" onclick="javascript:ajoutSM('menu')" >Ajouter un sous-menu</a>
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	</section>
	</div>

	</body>
</html>