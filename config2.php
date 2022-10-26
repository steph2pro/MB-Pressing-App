<?php
	//connexion a la base de donnees
	try
	{
		$bdd= new PDO('mysql: host= localhost; dbname=ges_p; charset=utf8', 'root', '');
			
		
		}
	catch(PDOException $e)
	{
		die('erreur :'. $e->getMessage());
	}
?>