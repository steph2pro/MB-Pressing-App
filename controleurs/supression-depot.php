<?php
	//lorsquon creer une session elle se ferme lorsqu'on ferme le navigateur
	session_start();

	//inclusion de la page de connection
	require_once'../config.php';
	$iddepot=$_GET['id_depot'];
	$sql='delete from depots where id_depot=?';
	$params=array($iddepot);

	request($sql,$params);
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'depot suprimer avec success');
	header('Location:liste_depot-admin.php');

?>