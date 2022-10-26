<?php 
	require_once'config.php';

	$sql='select * from clients order by id asc';
	$req=request($sql);
	//true parce quon veut recuperer une valeur
	$requetes=recover($req,false);
	$date=date("D/m/Y");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>mabou pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
	<link rel="stylesheet" type="text/css" href="assets/css/style_depot_vet.css">
	<link rel="stylesheet" type="text/css" href="assets/css/retour.css">
</head>
<body>
           
	<div class="depot" style="height: 6vw;">
		<b class="retour" style="margin: 2vw 3vw;">
			<a href="vues/menu.php">
				retour
			</a>
			
		</b>
		<h1 style="text-align:center;">
			ajouter un depot
		</h1>
		
		
			<a href="controleurs/liste_depot.php">
				<b class="suivant" style="margin:-5vw 70vw;width: 10vw;">
				liste des depots
				</b>
			</a>
		
	</div>
	<div class="grand">
		<form action="controleurs/enregistrement_depot.php" method="POST">
			
		
		<div class="champ">
			<label for="code">
				code Depot:
			</label>
			<input type="text" name="code" id="code" value="clt01" required>
			clients
			<select name="nom_client">
						
							<?php
							$espace="  ";	
							foreach ($requetes as $requete) :					
						?>
							<option value="<?php echo $requete -> nom;echo $espace ;echo  $requete -> prenom ; ?>">
								<?= $requete -> nom ?>
								<?=  $espace ?>
								<?= $requete -> prenom ?>
									
							</option>
					
					<?php endforeach; ?>
						
					</select>
	
			
			
		</div>
		<div class="type">
			type d'article
			<select name="type_article" id="type_art">
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
				<input type="text" name="dated" value="<?= $date ?>" readonly>
				<br>
				date retrait
				<input type="date" name="dater" required>
			</div>
		</div>
		<div class="info_article">
			article
			<input type="text" name="article" id="article" required readonly>
			prestation
			<select name="prestation" id="presta">
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
			<input type="text" name="couleur" id="col" required>
			quantite
			<input type="number" name="qte" id="qte" required>
			<p id="mt_unique">
				Montant unique
				<input type="number" name="mt_unique" id="mtnu" required>
			</p>
			<p id="mt_total">
				Total
				<input type="number" name="total" id="total" readonly required>
			
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
	<script type="text/javascript" src="assets/js/script_depo.js"></script>

</body>
</html>	