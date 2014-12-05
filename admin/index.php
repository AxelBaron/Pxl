<?php
	include "connectionbdd.php";
	if(isset($_POST['login'], $_POST['mdp'])){
		
		//Si le nom d'utulisateur et le mot de passe n'est pas vide
		if(!empty($_POST['login']) && !empty($_POST['mdp'])){
			
			//Stock le nom d'utilisateur et le mot de passe dans des variables
			$login = $_POST['login'];
			$mdp = $_POST['mdp'];
			
			//Prépare et éxécute la connexion à la base de données avec les informations reçues
			$login_q = $pdo->prepare("SELECT * FROM admin WHERE usager = :login AND mdp = :mdp");
			$login_q->execute(array('login' => $login, 'mdp' => $mdp));
			
			//Stock les informations correspondants
			$user = $login_q->fetch(PDO::FETCH_OBJ);
			
			//Si les informations correspondes (Login + Mdp)
			if($user){
				//Encryptage du mot de page pour le token
				$token = md5($user->admin_id);
				
				//Création d'un token d'une durée de 1 heure
				setcookie('token', $token, time()+3600);
			
				$admin_id = $user->admin_id;
				
				//Mise à jour de la base de données pour ajouté le token et sa durée
				$setToken_q = $pdo->prepare("UPDATE admin SET jeton = :token, jeton_date = NOW() WHERE admin_id = :user_id");
				$setToken_q->execute(array('token' => $token, 'user_id' => $admin_id));
				
				$token = null;
				
				header('Location: gestionprincipal.php');
			
				exit();
				
				print_r($user);
			}else{
				echo("user existe pas");
			}
			
			
		}
	}else if(isset($_COOKIE['token']) && !empty($_COOKIE['token'])){
	//S'il existe déja un cookie token, redirige vers gestionprincipal.php
	header('Location: gestionprincipal.php'); # Redirection
 
	exit();
}
?>
<h1>Connection</h1>
<!-- Formulaires -->
<form method="post" action="index.php">
	<label for="login">Identifiant</label>
	<input id="login" name="login" type="text" required />
	<br/>
	<label for="mdp">Mot de passe</label>
	<input id="mdp" name="mdp" type="password" required />
	<input type="submit" value="Connexion" />
</form>
