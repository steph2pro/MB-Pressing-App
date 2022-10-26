<?php
	//lorsquon creer une session elle se ferme lorsqu'on ferme le navigateur
	session_start();

	//inclusion de la page de connection
	require_once'../config.php';
	$id_facturation=$_GET['id_facturation'];
	$sql='delete from facturation where id_facturation=?';
	$params=array($id_facturation);

	request($sql,$params);
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'facture suprimer avec success');
	header('Location:liste_facture.php');

?>