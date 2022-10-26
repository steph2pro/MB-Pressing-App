<?php
session_start();

require_once '../config.php';

$id_gerant=$_POST['id_gerant'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$situation=$_POST['situation'];
$age=$_POST['age'];
$pass=$_POST['pass'];


$sql='update gerant set nom=?, prenom=?, telephone=?,email=?,situation=?, age=?, mot_de_pass=? where id_gerant=?';
$params= array ($nom,$prenom,$telephone,$email,$situation,$age,$pass,$id_gerant);
request($sql,$params);
    $_SESSION['error']=array(
        'type'=>'success',
        'message'=>'gerant modifier avec succes!');

header("location:liste_gerant.php");
?>