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
	$sql='select * from depots order by id_depot asc';
	$req=request($sql);
	$requetes=recover($req,false);

		$nbl=0;
		$nbr=0;
		$nbrl=0;
		$i=0;
	/*
	avec forech on parcour les valeur*/

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>mabou pressing</title>
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
                    <a href="../depot.php" >
                     Ajouter un depot
                    </a>
                </b>
                
    	       <h1>
                   liste des depots
                </h1>
                   
                

            </div>
		
		
		<div id="recherche">
			<input type="search" name="search" id="search" name="search" placeholder="rechercher a partie de tout......">
			
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
						<th>
							option
						</th>

					</tr>
				</thead>
<?php 


	if (($requetes!=null) && (sizeof($requetes)>0)):
		
		foreach ($requetes as $requete):
			$i++;

			if($requete-> prestation == "laver et repasser"){
				$nbrl++;
			}elseif ($requete-> prestation == "repasser") {
				$nbr++;
			}else{
				$nbl++;
			}
			//declaration des variable contenant le lien de supression et de modification 
			$update='modifier_depot.php?id_depot='.$requete->id_depot;
			//$delete='delete.php?id_request='.$requete->id_request;

				
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
						<td class="options" style="text-align:center;height: 50px;">
							<a href="<?= $update ?>" class="update">modifier</a>
							&nbsp;
							
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
							article a repasser :
							<span id="encours">
								
								<?= $nbr ?>
							</span>

							&nbsp; &nbsp;
							article a laver et repasser :
							<span id="encours">
								
								<?= $nbrl ?>
							</span>
						</th>
					</tr>
				</tfoot>

			</table>
			<?php 
					file_put_contents('../assets/fichiers/nb-depot.txt',$i); 
			?>
			
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