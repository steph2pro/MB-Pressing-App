<?php
//
session_start();
	require_once'../config.php';

if(isset($_SESSION['error']) == true) {
	$error= $_SESSION['error'];

	echo '<script type="text/javascript">';
	echo 'alert("'.$error['message'].'")';
	echo '</script>';

	unset($_SESSION['error']);
}
$iddepot=$_GET['id_depot'];
$sql='select * from depots where id_depot=?';
$params=array($iddepot);
$req=request($sql,$params);
//true parce quon veut recuperer une valeur
$requete=recover($req,true);
		

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>mabou pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
	<link rel="stylesheet" type="text/css" href="../assets/css/style_depot_vet.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/retour.css">
</head>
<body>  
	<div class="depot" style="height: 6vw;">
		<b class="retour" style="position: absolute; margin: 2vw 3vw;">
			<a href="liste_depot.php">
				liste des depots
			</a>
			
		</b>
		<h1 style="text-align:center;">
			modifier un depot
		</h1>
		
		
			
		
	</div>
	<div class="grand">
		<form action="enregistrement_modification_depot.php" method="POST">
			
		
		<div class="champ">

			<input type="hidden" name="id" id="id" value="<?= $requete -> id_depot ?>" required>
			<label for="code">
				code Depot:
			</label>
			<input type="text" name="code" id="code" value="<?= $requete -> code_depot ?>" required>
			clients
			<select name="nom_client">
				<option selected value="<?= $requete-> nom_client ?>" class="hide">
								<?= $requete-> nom_client ?>
				</option>
						<?php

							$sql='select * from clients order by id asc';
							$req=request($sql);
							//true parce quon veut recuperer une valeur
							$requets=recover($req,false);
							$espace="  ";	
							foreach ($requets as $requet) :					
						?>
							<option value="<?= $requet -> nom ; ?>">
								<?= $requet -> nom ?>
								<?=  $espace ?>
								<?= $requet -> prenom ?>
									
							</option>
					
					<?php endforeach; ?>
						
					</select>
	
			
			
		</div>
		<div class="type">
			type d'article
			<select name="type_article" id="type_art">

				<option selected value="<?= $requete-> type_article ?>" class="hide">
								<?= $requete-> type_article?>
				</option>
				<option value="vertement">
					vertement
				</option>
				<option value="chaussure">
					chaussure
				</option>
				<option value="culote">
					culote
				</option>
				<option value="autres">
					autres
				</option>

			</select>
			<div class="date">
				date depot
				<input type="text" name="dated" value="<?= $requete-> date_depot ?>" readonly>
				<br>
				date retrait
				<input type="text" name="dater" value="<?= $requete-> date_retrait ?>" required>
			</div>
		</div>
		<div class="info_article">
			article
			<input type="text" name="article" id="article" value="<?= $requete-> article ?>"  required >
			prestation
			<select name="prestation" id="presta">
				<option selected value="<?= $requete-> prestation ?>" class="hide">
								<?= $requete-> prestation?>
				</option>
				<option value="laver et repasser">
					laver et repasser
				</option>
				<option value="laver">
					laver
				</option>
				<option value="repasser">
					repasser
				</option>
			</select>
			couleur
			<input type="text" name="couleur" id="col" value="<?= $requete-> couleur ?>"  required>
			quantite
			<input type="number" name="qte" id="qte" value="<?= $requete-> quantite ?>"  required>
			<p id="mt_unique">
				Montant unique
				<input type="number" name="mt_unique" value="<?= $requete-> montant_unique ?>"  id="mtnu" required>
			</p>
			<p id="mt_total">
				Total
				<input type="number" name="total" id="total" value="<?= $requete-> montant_total ?>"  readonly required>
			
			</p>
			<div>
				<input type="button" name="" value="visualiser"  id="btn">
				<input type="submit" name="enregistrer" value="Enregistrer">
			</div>
			</form>
				
			<table border="0">
				<tr>
					<th>
						articles
					</th>
					<th>
						prestation
					</th>
					<th>couleur</th>
					<th>
						quantite
					</th>
					<th>
						Mnt Unique
					</th>
					<th>
						Mnt Total
					</th>
				</tr>
				<tr id="test">
					<td id="articleR">
						
					</td>
					<td id="prestR">
						
					</td>
					<td id="colR">
						
					</td>
					<td id="qteR">
						
					</td>
					<td id="mtuR">
						
					</td>
					<td id="mttR">
						
					</td>
				</tr>
				
			</table>
		</div>
		
	</div>
	<script type="text/javascript" src="../assets/js/script_depo.js"></script>

</body>
</html>	