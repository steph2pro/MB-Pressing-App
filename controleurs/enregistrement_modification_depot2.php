<?php
	//lorsquon creer une session elle se ferme lorsqu'on ferme le navigateur
	session_start();

	//inclusion de la page de connection

	require_once '../config.php';

	$iddepot=$_POST['id'];
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
	//ecriture de la requete de mise a jours de la requet avec les marqueurs d'interogation
	$sql='update depots set code_depot=?,nom_client=?,type_article=?,article=?,prestation=?,couleur=?,date_depot=?,date_retrait=?,montant_unique=?,quantite=?,montant_total=? where id_depot=?';
	//placement des valeur dans un tableau
	$params = array ($code_depot,$nom_client,$type_article,$article,$prestation,$couleur,$dated,$dater,$mt_unique,$qte,$total,$iddepot);
	//execution de la requet
	request($sql,$params);
	//preparation du message de reusite
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>' le depots a été modifier avec success');
	header('Location:liste_depot-admin.php');

?>