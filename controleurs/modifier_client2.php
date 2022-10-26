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
$id=$_GET['id'];
$sql='select * from clients where id=?';
$params=array($id);
$req=request($sql,$params);
//true parce q'uon veut recuperer une valeur
$client=recover($req,true);
        

?>

<htlm lang="fr">
    <head>
        <meta charset="utf-8">
        <title>mabou pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
        <link rel="stylesheet" href="../assets/css/style-client.css">
        <link rel="stylesheet" href="../assets/css/retour.css">
    </head>
    <boby>
        <div >
            <div class=titre>

                <b id="retour">
                    <a href="liste_client2.php" >
                     liste des clients
                    </a>
                </b>
    	       <h1> modifier Clients</h1>
                <b id="retour" style="position: absolute; margin: -4vw 73vw; width: 14vw;">
                    <a href="client2.php" >
                     Ajouter un client
                    </a>
                </b>
            </div>
    
        <form name="from" method="post" action="enregistrement_modification_client2.php">
            
                <legend></legend>
                
                    
                
                
            <input type="hidden" name="id" id="id" value="<?= $client -> id ?>" required>
                   <label for="prenom">nom:</label>
                    <input type="text"name="nom" id="nom" value="<?= $client -> nom ?>" required/></br>
                
                
                    <label for="nom">prenom:</label>
                    <input type="text" name="prenom" id="prenom" value="<?= $client -> prenom ?>" required/></br>
                     <p class="statut">
                    
							<label for="statut">
								 statut
							</label>
							<br />

						<select name="statut" id="statut">
                            <option value="<?= $client -> statut ?>">
                                <?= $client -> statut ?>
                            </option>
								<option value="favorie">
									favorie
								</option>
								<option value="iregulier">
									iregulier
								</option>
							</select>
</p>
                
                    <label for="telephone">telephone:</label>
                    <input type="tel" name="telephone" id="telephone" value="<?= $client-> telephone ?>" required/></br>

                    <label for="codeclt">codeclt:</label>
                    <input type="text" name="codeclt" id="codeclt" value="<?= $client-> code_client ?>" required/></br>
                
               
            
                <div class="nnt">
    <input type="submit" value="ENREGISTRE"id="enregistrer" />
    <input type="button" value="VISUALISER"name="VISUALISER" id="VISUALISER" />
   
                </div>
            
</form>
    <table>
        <thead>
            <tr>
        <th>Code du Client</th>
        <th>Nom</th>
        <th>prenom</th>
        <th>statut</th>
        <th>numero de telephone</th>                
            </tr>

        </thead>
        <tbody>
            <tr>
                <td id="cclt"></td>
                <td id="nm"></td>
                <td id="pn"></td>
                <td id="nt"></td>
                <td id="st"></td>
            </tr>

        </tbody>
    </table> 
       
</div>   
 </boby>
 <script src="../assets/js/script2.js"></script>
</htlm>

