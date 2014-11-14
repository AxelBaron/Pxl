function checkAndUnCheckAll(nbEntre){
	//Regarde s'il doit mettre à true ou false (Selon le Check Tout)
	var checkOrUnCheck = document.getElementById('checkbox-tout').checked
	//Boucle dans tous pour cocher/décocher
	for(i = 1; i < nbEntre+1; i++){
		document.getElementById(i).checked = checkOrUnCheck;
	}
}

function suppression(nbEntre, categorie){
	//Variables
	var message;
	var unSeulMessage = 0;
	var elementsASupprimer = [];
	alert("NB d'entré "+nbEntre);
	
	//Détecte le nombe d'éléments cocher à supprimer
	for(i = 1; i < nbEntre+1; i++){
		if(document.getElementById(i).checked == true){
			elementsASupprimer.push(document.getElementById(i).name);
		}
	}
	//Message de confirmation qui apparait
	var supprimerAlert = confirm("Êtes-vous sûr de vouloir supprimer définitivement le ou les actualités sélectionnées?");
	if (supprimerAlert == true && elementsASupprimer.length > 0) {
		//Change le message selon le nombre de cases cocher
		if(elementsASupprimer.length == 1){
			message = "L'actualité sélectionnée a été supprimer!";
		}else{
			message = "Les actualités sélectionnées a été supprimer!";
		}
		
		//Boucle chaque éléments pour les supprimer
		for (var i = 0; i < elementsASupprimer.length; i++) {
			//Appel de fonction pour éffacer
			$.ajax({
				data: 'id='+elementsASupprimer[i]+'&categorie='+categorie,
				url: 'suppression.php',
				method: 'POST', // or GET
				success: function() {
					//Affiche le message une seul fois peut importe le nombre d'éléments sélectionnés
					if(unSeulMessage != 1){
						unSeulMessage = 1;	
					}else{
						alert(message);
					}
					
					//Appel de la fonction de MAJ de la liste
					listAffichage(categorie);
				}
			});
		}
	}
}

function listAffichage(categorie){
	//MAJ de la liste
	$.ajax({
		data: 'categorie='+categorie,
		url: 'list-affichage.php',
		method: 'POST', // or GET
		success: function(list) {
			//alert(list);
			$('#liste-elements').html(list);
			listGestion(categorie);
		}
	});
}

function listGestion(categorie){
	//MAJ du menu de gestion
	$.ajax({
		data: 'categorie='+categorie,
		url: 'gestion-list.php',
		method: 'POST', // or GET
		success: function(list) {
			$('#gestion-list').html(list);
		}
	});
}