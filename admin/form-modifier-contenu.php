<?php include("header-admin.php"); ?>	

<?php 
				include("connectionbdd.php");
				$contenu_id = $_GET["contenu_id"];
				$sql="SELECT * FROM contenu
					  WHERE contenu_id = $contenu_id";
				$liste = $pdo->query($sql);
				$data = $liste->fetch();
				$id_page_ = $data['id_page_'];
			 ?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Modifier le contenu: <?php echo $data['titre']; ?> </h2>

	<form action="traitement-modifier-contenu.php?contenu_id=<?php echo $data['contenu_id']?>" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="titre">Titre du contenu</label>
				<input class="form" type="text" name="titre" value="<?php echo $data['titre']; ?>"/>
			</div>
			
			<div>
				<label for="contenu">Contenu</label>
				<textarea class="form" name="contenu"><?php echo $data['contenu']; ?></textarea>
			</div>

			<div>
				<label for="id_page_">A quelle page voulez vous affecter ce contenu ?</label>
				<select name="id_page_" value="<?php echo $data['id_page_']; ?>">
					<?php  
						
							$sql="SELECT * FROM page";
							$req = $pdo->query($sql);
		
							while ( $data = $req->fetch()) {
								if ($data['page_id'] == $id_page_) {
									echo "<option selected value=".$data['page_id'].">".$data["titre"]."</option>";
								}else{
									echo "<option value=".$data['page_id'].">".$data["titre"]."</option>";
								}
								
							 }	
					?>
				</select>
			</div>

		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
	</form>
	</section>
	</div>

	</body>
</html>