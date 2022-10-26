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
$sql='select * from clients order by id asc';
$req=request($sql);
//true parce quon veut recuperer une valeur
$clients=recover($req,false);
$fav=0;
$ir=0;
$i=0;
		

?>


<htlm lang="fr">
    <head>
        <meta charset="utf-8">
        <title>mabou pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
        <link rel="stylesheet" type="text/css"  href="../assets/css/liste.css">
        <link rel="stylesheet" type="text/css"  href="../assets/css/retour.css">
        
</head>
<body>
	<section><div class=titre>
                <b id="retour">
                    <a href="client2.php" >
                     Ajouter un Client
                    </a>
                </b>
                
    	       <h1>
                    suprimer les clients
                </h1>
                   
                

            </div>
		<hr/>
		<div id="recherche">
			<input type="search" name="search" id="search" name="search" placeholder="rechercher......">
			
		</div>
		<div id="elements">
			<table border="1" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th>
							numero
						</th>
						
						<th>
							code client
						</th>
						<th>
							nom
						</th>
						<th>
							prenom
						</th>
						<th>
							statut
						</th>
					
						<th>
							telephone
						</th>
						<th>
							option
						</th>

					</tr>
				</thead>

<?php 


	if (($clients!=null) && (sizeof($clients)>0)):
		
		foreach ($clients as $client):
			$i++;

			if($client-> statut == "favorie"){
				$fav++;
			}else{
				$ir++;
			}
			//declaration des variable contenant le lien de supression et de modification 
			$delete='supression-client.php?id='.$client->id;

				
?>

				<tbody>
					<tr class="element">
						<td class="data">
							<?= $i ?>
							</td>
						
						<td class="data">

							<?= $client -> code_client ?>
						</td>
						
						<td class="data">

							<?= $client -> nom ?>
						</td>
						<td class="data">
							
							<?= $client -> prenom ?>	

						</td>
						<td class="data">
							
							<?= $client -> statut ?>
						</td>

                            <td class="data">
							
							<?= $client -> telephone ?>
							</td>
						<td class="options" style="text-align: center; height: 70px;">
							&nbsp;
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
						<th colspan="7">
							client favorie :
							<span id="encours">
								
							<?= $fav ?>
							</span>
							&nbsp; &nbsp;
							client iregulier
							<span id="encours">
								
							<?= $ir ?>
							</span>
						</th>
					</tr>
				</tfoot>
				<?php 

					file_put_contents('../assets/fichiers/nb-cli-fav.txt',$fav);
					file_put_contents('../assets/fichiers/nb-cli.txt',$i);
				 ?>

			</table>
			
		</div>
	</section>
	<!--****************** appelation du fichier javascript ******************-->

		<script type="text/javascript" src="../assets/js/recherche.js">
		
		</script>

</body>
</html>
	
	


