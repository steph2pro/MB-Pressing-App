<?php 
	require_once '../config.php';
	$code_depot=$_POST['code'];
	$nom_client=$_POST['nom_client'];
	$type_article=$_POST['type_article'];
	$dated=$_POST['dated'];
	$dater=$_POST['dater'];
	$article=$_POST['article'];
	$prestation=$_POST['prestation'];
	$couleur=$_POST['couleur'];
	$qte=$_POST['qte'];
	$mt_unique=$_POST['mt_unique'];
	$total=$_POST['total'];

	//ecriture de la requete d'insertion avec les marqueurs d'interogation
	$sql='insert into depots set code_depot=?,nom_client=?,type_article=?,article=?,prestation=?,couleur=?,date_depot=?,date_retrait=?,montant_unique=?,quantite=?,montant_total=?';
	//placement des valeur dans un tableau
	$params = array ($code_depot,$nom_client,$type_article,$article,$prestation,$couleur,$dated,$dater,$mt_unique,$qte,$total);

	request($sql,$params);
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'requete ajouter avec success');
	header('Location:liste_depot.php');

?>