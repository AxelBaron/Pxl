<?php
	include_once "header-admin.php";
?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter une Page</h2>

	<form action="traitement-ajouter-page.php" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			<div id="liste-elements">
				<div>
					<label for="titre">Titre de la page</label>
					<input class="form" type="text" name="titre" required/>
				</div>
				
				<div>
					<label for="resume">Résumé de la page. ( Situé en haut de page )</label>
					<input class="form" type="text" name="resume" />
				</div>
				
				<div>
					<label for="nav_page_nom_1">Nom du lien de navigation interne à la page</label>
					<input class="form" type="text" name="nav_page_nom_1" id="nav_page_nom_1" />
				</div>

				<div>
					<label for="nav_page_lien_1">Adresse du lien de navigation interne à la page</label>
					<input class="form" type="text" name="nav_page_lien_1" />
				</div>
			</div>
			
			<div>
				<label for="">Titre du Contenu</label>
				<input class="form" name="contenu_titre"/>
			</div>

			<div>
				<label for="">Contenu de la page</label>
				<textarea name="contenu" ></textarea>
			</div>

			<a href="#" onclick="javascript:ajoutSM('page')" >Ajouter un titre de contenu</a>
			
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	</section>
	</div>

	</body>
</html>