<?php
	//ouverture de la session
	session_start();
	//inclusion de la page de connection et de preparation des requets
	require_once'../config.php';
	if (isset($_SESSION['error'])) {
		// code...
		$error=$_SESSION['error'];
		echo '<script type="text/javascript">';
		echo 'alert("'.$error['message'].'")';
		echo "</script>";
		//fermeture de la session
		unset($_SESSION['error']);
	} 
	$sql='select * from facturation order by id_facturation asc';
	$req=request($sql);
	$requetes=recover($req,false);

		$nbl=0;
		$nbr=0;
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
	<link rel="stylesheet" type="text/css" href="../assets/css/retour.css">
	<style type="text/css">
	</style>
</head>
<body>
	<section>
		<div class=titre>
                <b id="retour">
                    <a href="../facturation.php" >
                     editer une facture
                    </a>
                </b>
                
    	       <h1>
                    liste des factures
                </h1>
                   
                

            </div>
		
		<div id="recherche">
			<input type="search" name="search" id="search" placeholder="   rechercher a partie de tout......">
			
		</div>
		
		<div id="elements">
			<table border="1" cellpadding="0" cellspacing="0" class="table">
				<thead>
					<tr>
						<th>
							numero
						</th>
						<th>
							code de la facture
						</th>
						<th>
							nom du client
						</th>
						<th>
							nom de l'editeur
						</th>
						<th>
							article
						</th>
						<th class="probleme">
							date d'edition
						</th>
						<th>
							prestation
						</th>
						<th>
							couleur
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
						<th>
							option
						</th>

					</tr>
				</thead>
<?php 


	if (($requetes!=null) && (sizeof($requetes)>0)):
		$i=0;
		foreach ($requetes as $requete):
			$i++;

			if($requete-> montant_total >= 4000 ){
				$nbl++;
			}else{
				$nbr++;
			}
			//declaration des variable contenant le lien de supression et de modification 
			$update='modifier_facture.php?id_facturation='.$requete->id_facturation;

			$imprimer='imprimer.php?id_facturation='.$requete->id_facturation;	
			$delete='supression_facture.php?id_facturation='.$requete->id_facturation;

				
?>
				<tbody>
					<tr class="element">
						<td class="data">
							<?= $i ?>
						</td>
						<td class="data">
							<?= $requete -> code_facture ?>
						</td>
						<td class="data">
							<?= $requete -> nom_client ?>
						</td>

						<td class="data">
							<?= $requete -> nom_editeur ?>
						</td>
						<td class="data">
							<?= $requete -> article ?>
						</td>
						<td class="data">
							<?= $requete -> date_edition_facture ?>
						</td>
						<td class="data">
							<?= $requete -> prestation ?>
						</td>
						<td class="data">
							<?= $requete -> couleur ?>
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
						<td class="options" style="height:120px">
							<a href="<?= $update ?>" class="update1" style="margin-left: -2.6vw;">modifier</a>
							<br>
							<a href="<?= $imprimer ?>" class="imprimer" style="margin-left: -2.6vw;">imprimer</a>
							<br>
							
							<a href="<?= $delete ?>" class="suprimer" style="margin-left: -2.6vw;">suprimer</a>
							
							
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
							nombre de facture superieur a 4000 :
							<span id="larver">
								
								<?= $nbl ?>
							</span>
							&nbsp; &nbsp;&nbsp;
							nombre de facture inferieur a 4000 :
							<span id="encours">
								
								<?= $nbr ?>
							</span>

						</th>
					</tr>
				</tfoot>
				
			</table>
			
		</div>
		
			<div style="text-align: center; font-size: 1.3vw;">
				<b>pour plus d'information ou en cas de probleme contacter le web master au &nbsp; <i style="text-transform: uppercase;">671506217</i></b>
			</div>
	</section>
	<!--****************** appelation du fichier javascript ******************-->

		<script type="text/javascript" src="../assets/js/recherche.js">
			
		</script>

</body>
</html>