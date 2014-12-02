	<?php include_once "header-admin.php"; ?>
	<h1>Administration #TIM Matane</h1>	
	<h2>Ajouter un Contenu</h2>

	<form action="traitement-ajouter-contenu.php?" method="POST">
	
		<fieldset>
			<legend>Formulaire</legend>
			
			<div>
				<label for="titre">Titre du contenu</label>
				<input class="form" type="text" name="titre"/>
			</div>
			
			<div>
				<!--WYSIWYG-->
				<textarea id="tinyeditor" style="width: 400px; height: 200px"></textarea>
				<script>
				var editor = new TINY.editor.edit('editor', {
					id: 'tinyeditor',
					width: 600,
					height: 175,
					cssclass: 'tinyeditor',
					controlclass: 'tinyeditor-control',
					rowclass: 'tinyeditor-header',
					dividerclass: 'tinyeditor-divider',
					controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
						'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
						'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
						'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
					footer: true,
					fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
					xhtml: true,
					bodyid: 'editor',
					footerclass: 'tinyeditor-footer',
					toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
					resize: {cssclass: 'resize'}
				});
				</script>
				<!--FIN WYSIWYG-->
				<input type="hidden" id="contenu" name="contenu" value="" />
			</div>

			<div>
				<label for="id_page_">A quelle page voulez vous affecter ce contenu ?</label>
				<select name="id_page_">
					<?php  
							$sql="SELECT * FROM page";
							$req = $pdo->query($sql);
		
							while ( $data = $req->fetch()) {
								echo "<option value=".$data['page_id'].">".$data["titre"]."</option>";
							 }
					?>
				</select>
			</div>

		</fieldset>
		
	
		<input type="submit" name="enregistrer" id="enregistrer" onclick="document.getElementById('contenu').value = editor.e.body.innerHTML" value="Enregistrer"/>
	</form>
	</section>
	</div>

	</body>
</html>
