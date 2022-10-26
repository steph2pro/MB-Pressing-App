<?php
	//ouverture de la session
	session_start();
	//inclusion de la page de connection et de preparation des requets
	require_once'../config.php';
	$sql='select * from depots order by id_depot asc';
	$req=request($sql);
	$requetes=recover($req,false);

		$nbl=0;
		$nbr=0;
		$nbrl=0;
	/*
	avec forech on parcour les valeur*/

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gestion de pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
	<link rel="stylesheet" type="text/css" href="../assets/css/liste.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<section>
		
		<div>
		<h1 id="titre">
			liste des depots
		</h1>
		
		<div id="recherche">
			<input type="search" name="search" id="search" name="search" placeholder="rechercher......">
			
		</div>
		</div>
		<div id="elements">
			<table border="1" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th>
							numero
						</th>
						<th>
							code du depot
						</th>
						<th>
							nom du client
						</th>
						<th>
							article
						</th>
						<th>
							prestation
						</th>
						<th>
							couleur
						</th>
						<th class="probleme">
							date de depot
						</th>	
						<th>
							date de retrait
						</th>
						<th>
							montant unique
						</th>
						<th>
							quantite
						</th>
						<th>
							montant total
						</th>
					</tr>
				</thead>
<?php 


	if (($requetes!=null) && (sizeof($requetes)>0)):
		$i=0;
		foreach ($requetes as $requete):
			$i++;

			if($requete-> prestation == "laver et repasser"){
				$nbrl++;
			}elseif ($requete-> prestation == "repasser") {
				$nbr++;
			}else{
				$nbl++;
			}
				
?>
				<tbody>
					<tr class="element">
						<td class="data">
							<?= $i ?>
						</td>
						<td class="data">
							<?= $requete -> code_depot ?>
						</td>
						<td class="data">
							<?= $requete -> nom_client ?>
						</td>
						<td class="data">
							<?= $requete -> article ?>
						</td>
						<td class="data">
							<?= $requete -> prestation ?>
						</td>
						<td class="data">
							<?= $requete -> couleur ?>
						</td>
						<td class="data">
							<?= $requete -> date_depot ?>
						</td>
						<td class="data">
							<?= $requete -> date_retrait ?>
						</td>
						<td class="data">
							<?= $requete -> montant_unique ?>
						</td>
						<td class="data">
							<?= $requete -> quantite ?>
						</td>
						<td class="data">
							<?= $requete -> montant_total ?>
						</td>
					</tr>
<?php 
	//fermeture des boules et conditions
	endforeach;
	endif;

?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="12">
							article a larver :
							<span id="larver">
								
								<?= $nbl ?>
							</span>
							&nbsp; &nbsp;
							article a repasser
							<span id="encours">
								
								<?= $nbr ?>
							</span>

							&nbsp; &nbsp;
							article a laver et repasser
							<span id="encours">
								
								<?= $nbrl ?>
							</span>
						</th>
					</tr>
				</tfoot>

			</table>
			
		</div>
	</section>
	<!--****************** appelation du fichier javascript ******************-->

		<script type="text/javascript" src="../assets/js/script.js">
			
		</script>

</body>
</html>