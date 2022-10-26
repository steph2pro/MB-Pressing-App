<?php
session_start();

require_once '../config.php';

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$codecl=$_POST['codeclt'];
$statut=$_POST['statut'];


$sql='insert into clients set nom=?, prenom=?, statut=? ,telephone=?, code_client=? ';
$params= array ($nom,$prenom,$statut,$telephone,$codecl);
request($sql,$params);
    $_SESSION['error']=array(
        'type'=>'success',
        'message'=>'client enregistrées avec succes!');

header("location:liste_client.php");
?>