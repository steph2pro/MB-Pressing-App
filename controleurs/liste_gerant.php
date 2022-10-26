<?php
//
session_start();
require_once '../config.php';

if(isset($_SESSION['error']) == true) {
	$error= $_SESSION['error'];

	echo '<script type="text/javascript">';
	echo 'alert("'.$error['message'].'")';
	echo '</script>';

	unset($_SESSION['error']);
}
$sql='select * from gerant order by id_gerant asc';
$req=request($sql);
//true parce quon veut recuperer une valeur
$gerants=recover($req,false);
$mar=0;
$cel=0;
$con=0;
$i=0;
		

?>


<htlm lang="fr">
    <head>
        <meta charset="utf-8">
        <title>mabou pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
        <link rel="stylesheet" type="text/css" href="../assets/css/liste.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/retour.css">
        
</head>
<body>
	<section>
		<div class=titre>
                <b id="retour">
                    <a href="client.php" >
                     Ajouter un gerant
                    </a>
                </b>
                
    	       <h1>
                    liste des gerants
                </h1>
                   
                

            </div>
		<hr/>
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
							nom
						</th>
						<th>
							prenom
						</th>
						
						<th>
							age
						</th>
						<th>
							email
						</th>
					
						<th>
							telephone
						</th>
						<th>
							situation
						</th>
					
						<th>
							mot de pass
						</th>
						<th>
							option
						</th>

					</tr>
				</thead>

<?php 


	if (($gerants!=null) && (sizeof($gerants)>0)):
		
		foreach ($gerants as $gerant):
			$i++;

			if($gerant-> situation == "marier"){
				$mar++;
			}elseif($gerant-> situation == "celibataire"){
				$cel++;
			}elseif($gerant-> situation == "concubinage"){
				$con++;
			}
			//declaration des variable contenant le lien de supression et de modification 
			$update='modifier_gerant.php?id_gerant='.$gerant->id_gerant;
			$delete='supression-gerant.php?id_gerant='.$gerant->id_gerant;

				
?>

				<tbody>
					<tr class="element">
						<td class="data">
							<?= $i ?>
							</td>
						
						<td class="data">

							<?= $gerant -> nom ?>
						</td>
						
						<td class="data">

							<?= $gerant -> prenom ?>
						</td>
						<td class="data">
							
							<?= $gerant -> age ?>	

						</td>
						<td class="data">
							
							<?= $gerant -> email ?>
						</td>

                            <td class="data">
							
							<?= $gerant -> telephone ?>
							</td>
						<td class="data">
							
							<?= $gerant -> situation ?>
						</td>

                            <td class="data">
							
							<?= $gerant -> mot_de_pass ?>
							</td>
						<td class="options"  style="height:100px">
							<a href="<?= $update ?>" class="update">modifier</a>
							<br><br>
							<a href="<?= $delete ?>" class="delete">suprimer</a>
							
						</td>
					</tr>
				</tbody>
<?php 
	//fermeture des boules et conditions
	endforeach;
	endif;

?>
				<tfoot>
					<tr>
						<th colspan="9">
							gerant marier :
							<span id="encours">
								
							<?= $mar ?>
							</span>
							&nbsp; &nbsp;
							gerant celibataire :
							<span id="encours">
								
							<?= $cel ?>
							</span>
							&nbsp; &nbsp;
							gerant en concubinage :
							<span id="encours">
								
							<?= $con ?>
							</span>
						</th>
					</tr>
				</tfoot>
				<?php 

					file_put_contents('../assets/fichiers/nb-gerant.txt',$i);
				 ?>

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
	
	


