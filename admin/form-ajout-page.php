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
					<textarea class="form" type="text" name="resume"> </textarea>
				</div>


				<p style="color:red;">Inserer un bouton si l'utilisateur veux ajouter un contenu </p>
				
				<div>
					<label for="resume">Quels contenus déjà existants voulez vous ajoutez à la page ?</label><br /><br />
					 <?php 
					 	$sql2="SELECT * FROM contenu";
					 	$pdo->query($sql2);
					 	$liste = $pdo->query($sql2);
					 	
					 	while ($contenu = $liste->fetch()) {
					 		echo "<input type='checkbox'/>".$contenu['titre']."<br />";  
					 	}
					 ?>
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