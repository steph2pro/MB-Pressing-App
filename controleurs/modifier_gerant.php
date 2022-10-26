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
$id_gerant=$_GET['id_gerant'];
$sql='select * from gerant where id_gerant=?';
$params=array($id_gerant);
$req=request($sql,$params);
//true parce q'uon veut recuperer une valeur
$gerant=recover($req,true);
        

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
                    <a href="liste_gerant.php" >
                     liste des gerants
                    </a>
                </b>
               <h1> modifier Clients</h1>
                <b id="retour" style="position: absolute; margin: -4vw 73vw; width: 14vw;">
                    <a href="gerant.php" >
                     Ajouter un gerant
                    </a>
                </b>
            </div>
    
        <form name="from" method="post" action="enregistrement_modification_gerant.php">
            
                <legend></legend>
                
                    
                
                    <input type="hidden" name="id_gerant" id="" value="<?= $gerant -> id_gerant ?>" required/></br>
                
                   <label for="nom">nom:</label>
                    <input type="text"name="nom" id="nom" value="<?= $gerant -> nom ?>" required/></br>
                
                
                    <label for="prenom">prenom:</label>
                    <input type="text"name="prenom" id="prenom" value="<?= $gerant -> prenom ?>"  required/></br>
                     <p class="statut">
                    
							<label for="statut">
								 situation <br>matrimoniale
							</label>
							<br />

						<select name="situation" id="statut" class="situation" style="margin: 1.5vw 0.5vw;">
                            <option value="<?= $gerant -> situation ?>">
                                <?= $gerant -> situation ?>
                            </option>
								<option value="marier">
									marier
								</option>
								<option value="celibataire">
									celibataire
								</option>
                                <option value="concubinage">
                                    concubinage
                                </option>
							</select>
</p>
                
                    <label for="telephone">telephone:</label>
                    <input type="tel" name="telephone" id="telephone" value="<?= $gerant -> telephone ?>" required/></br>

                    <label for="age">age:</label>
                    <input type="number" name="age" id="age" min=0 max=100 required value="<?= $gerant-> age ?>" /></br>
                
                    <label for="mail">email:</label>
                    <input type="mail"name="email" id="mail" value="<?= $gerant-> email ?>"/></br>
                
                    <label for="pass">mot de pass:</label>
                    <input type="text"name="pass" id="pass" value="<?= $gerant-> mot_de_pass ?>" required/></br>
                
               
            
                <div class="nnt">
    <input type="submit" value="ENREGISTRE"id="enregistrer" />
    <input type="button" value="VISUALISER"name="VISUALISER" id="VISUALISER" />
   
                </div>
            
</form>
    <table>
        <thead>
            <tr>
        <th>Nom</th>
        <th>prenom</th>
        <th> situation matrimoniale</th>
        <th>age</th>
        <th>numero de telephone</th>
        <th>mot de pass</th>                
        <th>email</th>
            </tr>

        </thead>
        <tbody>
            <td id="nm"></td>
            <td id="pn"></td>
            <td id="situation"></td>
            <td id="ag"></td>
            <td id="nt"></td>
            <td id="mp"></td>
            <td id="ml"></td>

        </tbody>
    </table> 
       
</div>   
 </boby>
 <script type="text/javascript" src="../assets/js/script.js"></script>
</htlm>

