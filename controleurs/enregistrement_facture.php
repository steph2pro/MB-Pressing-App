<?php 
	require_once '../config.php';
	$code_facture=$_POST['code'];
	$nom_client=$_POST['nom_client'];
	$nom_editeur=$_POST['nom_editeur'];
	$type_article=$_POST['type_article'];
	$article=$_POST['article'];
	$date_edition=$_POST['date_edition'];
	$prestation=$_POST['prestation'];
	$couleur=$_POST['couleur'];
	$qte=$_POST['qte'];
	$mt_unique=$_POST['mt_unique'];
	$total=$_POST['total'];
	$sql='insert into facturation set code_facture=?,nom_client=?,nom_editeur=?,type_article=?,article=?,date_edition_facture=?,prestation=?,couleur=?,montant_unique=?,quantite=?,montant_total=?';
	$params=array($code_facture,$nom_client,$nom_editeur,$type_article,$article,$date_edition,$prestation,$couleur,$mt_unique,$qte,$total);
	request($sql,$params);



	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'facture memoriser avec success');
	header('Location:liste_facture.php');

?>