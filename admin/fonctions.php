<?php
	$fonction = $_POST['fonction'];
	switch($fonction){
		case "ajoutSM":
			ajoutSM();
		break;
	}
			
	function ajoutSM() {
		$fnName = "'ajoutSM(id);'";
		$nbSM = ($_POST['nbPresentSM'] + 1);
		echo("<div>");
			echo("<label for='sm_nom_".$nbSM."'>Intitul� du sous-menu ".$nbSM."</label>");
			echo("<input type='text' name='sm_nom_".$nbSM."' id='sm_nom_".$nbSM."' />");
		echo("</div>");
		
		echo("<div>");
			echo("<label for='sm_lien_".$nbSM."'>Lien du sous-menu ".$nbSM."</label>");
			echo("<input type='text' name='sm_lien_".$nbSM."' />");
		echo("</div>");
	}
?>
