<?php
session_start();

require_once '../config.php';

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$situation=$_POST['situation'];
$age=$_POST['age'];
$pass=$_POST['pass'];


$sql='insert into gerant set nom=?, prenom=?, telephone=?,email=?,situation=?, age=?, mot_de_pass=? ';
$params= array ($nom,$prenom,$telephone,$email,$situation,$age,$pass);
request($sql,$params);
    $_SESSION['error']=array(
        'type'=>'success',
        'message'=>'gerant enregistrées avec succes!');

header("location:liste_gerant.php");
?>