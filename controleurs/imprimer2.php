<?php
//
session_start();
    require_once'../config.php';
$id=$_GET['id_facturation'];
$sql='select * from facturation where id_facturation=?';
$params=array($id);
$req=request($sql,$params);
//true parce quon veut recuperer une valeur
$facture=recover($req,true);
        

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>mabou pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
	<link rel="stylesheet" type="text/css" href="../assets/css/impression.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/retour.css">
</head>
<body>
	<b>
		<a href="liste_facture2.php">
			retour
		</a>
	</b>
	<div class="mb">
		MABOU BUSSINES de BAFOUSAM
		<p class="fact"> facture</p>
	</div>

	<div class="info_perso">
		<p>ADRESS: <b>bafoussam 2ème carrefour évéché</b> </p>
		<p>contact : <b>656429360</b> </p>
		<p>
			nom de l'editeure : <b><?= $facture -> nom_editeur ?></b>
		</p>
		<p>
			date d'edition : <b><?= $facture -> date_edition_facture ?></b>
		</p>
		<p>
			numero de la facture : <b><?= $facture -> id_facturation ?></b>
		</p>
	</div>
	<div class="logo">
		<img src="../assets/images/logo.jpg">
	</div>
	<div class="info_client">
		<p>nom du client : <b><?= $facture -> nom_client ?></b></p>
			<?php 
				$nom_client = $facture -> nom_client;
				$sql0='select * from clients where nom=?';
				$params0= array ($nom_client);
				$req0=request($sql0,$params0);
				//true parce quon veut recuperer une valeur
				$client=recover($req0,true);
				
			 ?>
		<p>prenom du client : <b> <?= $client-> prenom ?></b></p>
		<p>telephone : <b> <?= $client -> telephone ?></b> </p>
		<p>code du client : <b><?= $client -> code_client ?></b></p>
	</div>
	<table border="2" cellpadding="0" cellspacing="0">
		<tr>
			<th>
				article
			</th>
			<th>
				couleur
			</th>

			<th>
				prestation
			</th>
			<th>
				quantite
			</th>
			<th>
				prix unitaire
			</th>
			<th>
				prix total
			</th>
		</tr>
		<tr>
			<td>
				<?= $facture -> article ?>
			</td>
			<td>
				<?= $facture -> couleur ?>
			</td>
			<td>
				<?= $facture -> prestation ?>
			</td>
			<td>
				<?= $facture -> quantite ?>
			</td>
			<td>
				<?= $facture -> montant_unique ?>
			</td>
			<td style="font-weight: bold;color: dodgerblue;">
				<?= $facture -> montant_total ?>
			</td>
		</tr>
	</table>
	<button onclick="window.print()">imprimer</button>

</body>

</html>