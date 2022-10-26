<?php
	//lorsquon creer une session elle se ferme lorsqu'on ferme le navigateur
	session_start();

	//inclusion de la page de connection
	require_once'../config.php';
	$id=$_GET['id'];
	$sql='delete from clients where id=?';
	$params=array($id);

	request($sql,$params);
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'client suprimer avec success');
	header('Location:liste_client.php');

?>