<?php
	//ouverture de la session
	session_start();
	//inclusion de la page de connection et de preparation des requets
	require_once'../config.php';
	//if (isset($_SESSION['nom'])) {
		// code...
	//	$nom=$_SESSION['nom'];
		//fermeture de la session
		//unset($_SESSION['error']);
	//} 
	$gerant=file_get_contents('../assets/fichiers/gerant.txt');
	$cli_fav=file_get_contents('../assets/fichiers/nb-cli-fav.txt');
	$cli=file_get_contents('../assets/fichiers/nb-cli.txt');
	$depot=file_get_contents('../assets/fichiers/nb-depot.txt'); 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gestion de pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class="cardre">
		<header>
			<nav>
				<h3>
				Accueil
				</h3>
				<div class="gauche">
					<h3 style="text-transform: uppercase;" id="nom"> <?php echo $gerant ?></h3>
					<div class="pro">
						<img src="../assets/images/uilisateur.png" id="imsp">
					<a href="../index.php" onclick="alert('voulez-vous vraiment vous deconnecter ?');">
						<img src="../assets/images/1.png" id="deconection">
					</a>
					</div>
					
				</div>
		

			</nav>
		</header>
		<section>
			<div class="images">
				<div>
					<div id="img1">
					<a href="../controleurs/client2.php">
						<img src="../assets/images/ad.png"  width="90px" id="im">
					</a>
					</div>
					<div class="mot">
						<a href="../controleurs/client2.php">
						ajout client
						</a>
					</div>
					<div class="img">
						<a href="../controleurs/sup_client2.php">
							<img src="../assets/images/supclient.png"  width="50px" id="im1">
						</a>
					</div>
					<div class="mot1">
					<a href="../controleurs/sup_client2.php">
						suprimer
						</a>
					</div>
					<div class="img1">
						<a href="../controleurs/mod_client2.php">
							<img src="../assets/images/mod.png"  width="80px" id="im2">
						</a>
					</div>
					<div class="mot2">
						<a href="../controleurs/mod_client2.php">
						modifier
						</a>
					</div>
				</div>
				<div>
					<a href="../controleurs/liste_facture2.php">
					<img src="../assets/images/fact.png" id="img2">
					</a>
					<div class="img3">
					<a href="../facturation2.php">
						<img src="../assets/images/to.png" width="140px" height="80px" id="im3">
					</a>
					</div>
					
				</div>
				<div class="img4">
					<a href="../controleurs/client_fav2.php">
						<img src="../assets/images/client fav.png" id="im4">
					</a>
				</div>
				<a href="" onclick="alert('seul l\'administrateur peut effectuer des mises a jours!!');">
				<div class="img5">
					<img src="../assets/images/mise_a_jour.png" id="im7">
				</div>
				</a>
				<div class="images1">
					
					<a href="../controleurs/liste_depot.php">
						<img src="../assets/images/hab.png" id="im6">
					</a>
					<a href="../controleurs/liste_client2.php">
						<img src="../assets/images/clients.png" id="im5">
					</a>
				
				</div>
				
				<div class="img6">
					<a href="../depot.php">
						<img src="../assets/images/habit.png" id="im9">
					</a>
					<a href="../depot.php">
						<img src="../assets/images/plus.png" id="im8">
					</a>
					
				</div>
				
			</div>
			<div id="mots">
				<b id="mot1">
					<a href="../controleurs/client_fav2.php">
						client favorie
					</a>
				</b>
				<b id="mot2">
					<a href="../facturation2.php">
						editer 
					</a>
				</b>
				<b id="mot3">
					<a href="../controleurs/liste_depot.php">
						vertements
					</a>
				</b>
				<b id="mot4">
				<a href="" onclick="alert('seul l\'administrateur peut effectuer des mises a jours!!');">
					mise a jour
				</a>
				</b>
				<b id="mot5">

					<a href="../controleurs/liste_client2.php">
					clients
					</a>
				</b>
				
					<b id="mot6">
						<a href="../depot.php">
						depot
						</a>
					</b>
				

				

			</div>
			<u>
				infos important
			</u>
			<div class="bass">
				<div class="bas1">
					
					clients enregistrer
					<input type="text" name="" value="<?php echo $cli; ?>">
				</div>
				<div class="bas2">
					
					client favorie
					<input type="text" name="" value="<?php echo $cli_fav; ?>">
				</div>
				<div class="bas3">
					
					nombre de depot
					<input type="text" name="" value="<?php echo $depot; ?>">
				</div>
			</div>
			<div style="text-align: center; font-size: 1.3vw;">
				<b>pour plus d'information ou en cas de probleme contacter le web master au &nbsp; <i style="text-transform: uppercase;">671506217</i></b>
			</div>


		
		</section>
	</div>
</body>
</html>