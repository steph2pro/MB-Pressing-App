<?php
session_start();
require_once '../config.php';
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$codecl=$_POST['codeclt'];
$statut=$_POST['statut'];

	$sql='update clients set nom=?,prenom=?,statut=?,telephone=?,code_client=? where id=?';
	$params=array ($nom,$prenom,$statut,$telephone,$codecl,$id);
	request($sql,$params);

	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>' le client a été modifier avec success');
	header('Location:liste_client2.php');

?>