<?php
	 //definition des elements de la chainne de connection
	define("DSN","mysql:host=localhost;dbname=g ;port=3306;charset=utf8");
	define("USERNAME","root");
	define("PASSWORD","");
	//creation de la fonction de connection
	function chaineConnection(){
		//cretion d'une instance de pdo qui permet d'etablir la connection
		$pdo=new PDO(DSN,USERNAME,PASSWORD);
		//activation du raport d'erreur
		$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $pdo; 
	}
	//fonction de preparation des requet
	function request($sql,$params=null){
			$pdo=chaineConnection();
			$req= $pdo->prepare($sql);

		if ($params==null) {
			// code...
			$req->execute();
		} else {
			// code...
			$req->execute($params);
		}
		return $req;	
	}
	function recover($req,$one= true){
		$datas=null;
		//mode de recuperation des information
		$req->setFetchMode(PDO::FETCH_OBJ);
		if ($one==true) {
			// code...
			$datas=$req->fetch();
		} else {
			// code...
			$datas=$req -> fetchAll();
		}
		return $datas;
	}
?>
	
	

