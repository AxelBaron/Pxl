<?php include("header-admin.php"); ?>
			<?php 
				include("connectionbdd.php");
				$admin_id = $_GET["admin_id"];
				$sql="SELECT * FROM admin WHERE admin_id= $admin_id";
				$liste = $pdo->query($sql);
				$data = $liste->fetch();
			 ?>
			
			<h1>#TIM Matane Administration</h1>	
			<h2>Modifier l'Administrateur: <?php echo $data['usager']; ?> </h2>
			 
			 <form action="traitement-modification-admin.php?num=<?php echo $data['admin_id']?>" method="POST">
	
		<fieldset>
			<legend>Formulaire de Modification :</legend>
			
			<div>
				<label for="Usager">Usager / Loggin</label>
				<input type="text" name="usager" value="<?php echo $data['usager']; ?>"/>
			</div>

			<div>
				<label for="Mot de Passe">Mot de Passe</label>
				<input type="text" name="mdp" value="<?php echo $data['mdp']; ?>"/>
			</div>

			<div>
				<label for="Nom">Nom</label>
				<input type="text" name="nom" value="<?php echo $data['nom']; ?>"/>
			</div>

			<div>
				<label for="Prenom">Prénom</label>
				<input type="text" name="prenom" value="<?php echo $data['prenom']; ?>"/>
			</div>

			<div>
				<label for="Courriel">Courriel</label>
				<input type="text" name="courriel" value="<?php echo $data['courriel']; ?>"/>
			</div>
			
			
		</fieldset>
		
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />
	</form>
	</form>
<?php include("footer-admin.php"); ?>