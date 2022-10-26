<?php
session_start();
require_once '../config2.php';

if (isset($_POST['nom']) && isset($_POST['mot_de_pass'])&& isset($_POST['statut'])) {
	//$prenom=htmlspecialchars($_POST['prenom']);
	//$nom=htmlspecialchars($_POST['nom']);
	$nom = htmlspecialchars($_POST['nom']);
	$pass = htmlspecialchars($_POST['mot_de_pass']);
	$statut = htmlspecialchars($_POST['statut']);
	


	if (!empty($nom) && !empty($pass)&& !empty($statut)) {
	
		
			if ($statut=="gerant") {/**/
				// code...
				$check = $bdd->prepare('SELECT * FROM gerant WHERE nom = ? AND mot_de_pass = ?');
				$check->execute(array($nom, $pass));
				$data = $check->fetch();
				$row = $check->rowCount();

				if ($row == 1) {
					file_put_contents('../assets/fichiers/gerant.txt',$nom);
					//$_SESSION['nom']=array('type'=>'success','message'=>$nom);
					header('Location: ..\vues\menu.php');
				} else header('Location: ../index.php?login_err=already');
			} else {
				$check = $bdd->prepare('SELECT * FROM administrateur WHERE nom = ? AND mot_de_pass = ?');
				$check->execute(array($nom, $pass));
				$data = $check->fetch();
				$row = $check->rowCount();

		if ($row == 1) {
					file_put_contents('../assets/fichiers/admin.txt',$nom);
			header('Location: ..\vues\menu-admin.php');/**/

			} else header('Location: ../index.php?login_err=already');
			}
		
	} else header('Location: ../index.php?login_err=empty');
} else header('Location: ../index.php');
?>