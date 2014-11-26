<?php include("header-admin.php");?>
<h1>#TIM Matane Administration</h1>	
<h2>Les positions des menus ont été modifiées</h2>

<?php 
	
	$position1 = $_POST['position1'];
	$position2 = $_POST['position2'];
	$position3 = $_POST['position3'];
	$position4 = $_POST['position4'];
	$position5 = $_POST['position5'];
	$position6 = $_POST['position6'];
	$position7 = $_POST['position7'];


	if ($position1 == $position2 || $position1 == $position3 || $position1 == $position4 || $position1 == $position5 || $position1 == $position6 || $position1 == $position7) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif($position2 == $position1 || $position2 == $position3 || $position2 == $position4 || $position2 == $position5 || $position2 == $position6 || $position2 == $position7) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";	
	}elseif ($position3 == $position1 || $position3 == $position2 || $position3 == $position4 || $position3 == $position5 || $position3 == $position6 || $position3 == $position7) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif ($position4 == $position1 || $position4 == $position2 || $position4 == $position3 || $position4 == $position5 || $position4 == $position6 || $position4 == $position7) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif ($position5 == $position1 || $position5 == $position2 || $position5 == $position3 || $position5 == $position4 || $position5 == $position6 || $position5 == $position7) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif ($position6 == $position1 || $position6 == $position2 || $position6 == $position3 || $position6 == $position4 || $position6 == $position5 || $position6 == $position7) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}elseif ($position7 == $position1 || $position7 == $position2 || $position7 == $position3 || $position7== $position4 || $position7 == $position5 || $position7 == $position6) {
		echo "<p> Désolé, la modification n'as pas été prise en compte car plusieurs menus avait le même indice!";
	}else{
		echo "Tout est ok";
		// for ($i=1; $i < 8; $i++) { 
		// 	$sql ="UPDATE menu SET position = position".$i."WHERE" ;
		// 	echo $sql;
		// }
		
	}
 ?>