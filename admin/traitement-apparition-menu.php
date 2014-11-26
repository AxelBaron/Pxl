<?php include("header-admin.php");?>
<h1>#TIM Matane Administration</h1>	
<h2>Les positions des menus ont été modifiées</h2>

<?php 
	
	 for ($i=1; $i < 8 ; $i++) { 
		$varContainer = "position".$i."EtIDmenu";
		$$varContainer = explode("_",$_POST["position$i"]);
	 }
	 
	 
	if ($position1EtIDmenu[0] == $position2EtIDmenu[0] || $position1EtIDmenu[0] == $position3EtIDmenu[0] || $position1EtIDmenu[0] == $position4EtIDmenu[0] || $position1EtIDmenu[0] == $position5EtIDmenu[0] || $position1EtIDmenu[0] == $position6EtIDmenu[0] || $position1EtIDmenu[0] == $position7EtIDmenu[0]) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif($position2EtIDmenu[0] == $position1EtIDmenu[0] || $position2EtIDmenu[0] == $position3EtIDmenu[0] || $position2EtIDmenu[0] == $position4EtIDmenu[0] || $position2EtIDmenu[0] == $position5EtIDmenu[0] || $position2EtIDmenu[0] == $position6EtIDmenu[0] || $position2EtIDmenu[0] == $position7EtIDmenu[0]) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";	
	}elseif ($position3EtIDmenu[0] == $position1EtIDmenu[0] || $position3EtIDmenu[0] == $position2EtIDmenu[0] || $position3EtIDmenu[0] == $position4EtIDmenu[0] || $position3EtIDmenu[0] == $position5EtIDmenu[0] || $position3EtIDmenu[0] == $position6EtIDmenu[0] || $position3EtIDmenu[0] == $position7EtIDmenu[0]) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif ($position4EtIDmenu[0] == $position1EtIDmenu[0] || $position4EtIDmenu[0] == $position2EtIDmenu[0] || $position4EtIDmenu[0] == $position3EtIDmenu[0] || $position4EtIDmenu[0] == $position5EtIDmenu[0] || $position4EtIDmenu[0] == $position6EtIDmenu[0] || $position4EtIDmenu[0] == $position7EtIDmenu[0]) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif ($position5EtIDmenu[0] == $position1EtIDmenu[0] || $position5EtIDmenu[0] == $position2EtIDmenu[0] || $position5EtIDmenu[0] == $position3EtIDmenu[0] || $position5EtIDmenu[0] == $position4EtIDmenu[0] || $position5EtIDmenu[0] == $position6EtIDmenu[0] || $position5EtIDmenu[0] == $position7EtIDmenu[0]) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif ($position6EtIDmenu[0] == $position1EtIDmenu[0] || $position6EtIDmenu[0] == $position2EtIDmenu[0] || $position6EtIDmenu[0] == $position3EtIDmenu[0] || $position6EtIDmenu[0] == $position4EtIDmenu[0] || $position6EtIDmenu[0] == $position5EtIDmenu[0] || $position6EtIDmenu[0] == $position7EtIDmenu[0]) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif ($position7EtIDmenu[0] == $position1EtIDmenu[0] || $position7EtIDmenu[0] == $position2EtIDmenu[0] || $position7EtIDmenu[0] == $position3EtIDmenu[0] || $position7EtIDmenu[0]== $position4EtIDmenu[0] || $position7EtIDmenu[0] == $position5EtIDmenu[0] || $position7EtIDmenu[0] == $position6EtIDmenu[0]) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}else{
		echo "Tout est ok";
		 for ($i=1; $i < 8; $i++) { 
			$varContainer = "position".$i."EtIDmenu";
			$position = array_shift($$varContainer);
			$id = array_shift($$varContainer);
		  	$sql ="UPDATE menu SET position = $position WHERE menu_id = $id";
			$pdo->exec($sql);
		  	echo "<div>".$sql."</div>";
		}
	}
 ?>
