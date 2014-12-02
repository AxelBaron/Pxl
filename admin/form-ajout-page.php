<?php
	include_once "header-admin.php";
?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter une Page</h2>

	<form action="traitement-ajouter-page.php" method="POST" enctype="multipart/form-data">
	
		<fieldset>
			<legend>Formulaire</legend>
			<div id="liste-elements">
				<div>
					<label for="titre">Titre de la page</label>
					<input class="form" type="text" name="titre" required/>
				</div>
				
				<div>
					<label for="resume">Résumé de la page. ( Situé en haut de page )</label>
					<textarea class="form" type="text" name="resume"></textarea>
				</div>

				<div>
					<label for="image-preview">Image situé en haut de page</label><br/>
					<p> Attention ! Veuillez télécharger une image carré de 300 pixels x 312 pixels</p>
	    			<input type="file" name="fileToUpload" id="fileToUpload">
				</div>
				
			</div>
			<!-- <a href="#" onclick="javascript:ajoutSM('page')" >Ajouter un titre de contenu</a> -->
			
		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	</section>
	</div>

	</body>
</html>
