<?php include('header-admin.php') ?>
			<?php 
				include("connectionbdd.php");
				$prof_id = $_GET["prof_id"];
				$sql="SELECT * FROM prof WHERE prof_id= $prof_id";
				$liste = $pdo->query($sql);
				$data = $liste->fetch();
			 ?>
			
			<h1>#TIM Matane Administration</h1>	
			<h2>Modifier le professeur : <?php echo $data['prenom']." ".$data['nom']; ?> </h2>
			 
			 <form action="traitement-modifier-prof.php?prof_id=<?php echo $data['prof_id']?>" method="POST" enctype="multipart/form-data">
	
		<fieldset>
			<legend>Formulaire de Modification :</legend>
			
			<div>
				<label for="Etudiant">Prenom</label>
				<input class="form"type="text" name="prenom" value="<?php echo $data['prenom']; ?>"/>
			</div>

			<div>
				<label for="Lien">Nom</label>
				<input class="form"type="text" name="nom" value="<?php echo $data['nom']; ?>"/>
			</div>

			<div>
				<label for="Lien">Rôle</label>
				<input class="form"type="text" name="role" value="<?php echo $data['role']; ?>"/>
			</div>

			<div>
				<label for="Lien">Teléphone de poste</label>
				<input class="form"type="number" name="tel_poste" value="<?php echo $data['tel_poste']; ?>"/>
			</div>

			<div>
				<label for="Lien">Bureau</label>
				<input class="form"type="text" name="bureau" value="<?php echo $data['bureau']; ?>"/>
			</div>

			<div>
				<label for="Lien">Site</label>
				<input class="form"type="text" name="site" value="<?php echo $data['site']; ?>"/>
			</div>

			<?php 
				include('connectionbdd.php');
				$sql ="SELECT * FROM prof WHERE prof_id = $prof_id";
				$liste=$pdo->query($sql);
				$data=$liste->fetch();

				if ($data['image']=="") {
					echo "<div>";
					echo "<label for='image-preview'>Image située en haut de page.</label><br/>";
					echo "<p> Attention ! Veuillez télécharger une image de 300 pixels x 312 pixels.</p>";
					echo "<input type='file' name='fileToUpload' id='fileToUpload'>";
					echo "</div>";
				}else{
					echo "<div>";
					echo "<label for='image-preview'>Image située en haut de page.</label><br/>";
					echo "<p class='rouge'> Attention ! Une image existe déjà, si vous en télécharger une nouvelle, l'ancienne sera ecrasée !</p>";
					echo "<input type='file' name='fileToUpload' id='fileToUpload'>";
					echo "</div>";
				}


			 ?>
						
		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />
	</form>

		</section>
	</div>

</body>
</html>
