
<htlm lang="fr">
    <head>
        <meta charset="utf-8">
        <title>mabou pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
        <link rel="stylesheet" href="../assets/css/style-client.css">
        <link rel="stylesheet" href="../assets/css/retour.css">
    </head>
    <boby>
        <div>
            <div class="titre">
                <b id="retour">
                    <a href="../vues/menu-admin.php" >
                    retour
                    </a>
                </b>
                
               <h1> Ajouter/gerants</h1>
               <b id="suivant">
                   
                <a href="liste_gerant.php" >
                    liste des gerants
                </a>
               </b>

            </div>
    
    
        <form name="from" method="post" action="enregistrement_gerant.php">
            
                <legend></legend>
                
                    
                
                
                   <label for="nom">nom:</label>
                    <input type="text"name="nom" id="nom" required/></br>
                
                
                    <label for="prenom">prenom:</label>
                    <input type="text"name="prenom" id="prenom" required/></br>
                     <p class="statut">
                    
							<label for="statut">
								 situation <br>matrimoniale
							</label>
							<br />

						<select name="situation" id="statut" class="situation" style="margin: 1.5vw 0.5vw;">
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
                    <input type="tel" name="telephone" id="telephone" required/></br>

                    <label for="age">age:</label>
                    <input type="number"name="age" id="age" min=0 max=100 required/></br>
                
                    <label for="mail">email:</label>
                    <input type="mail"name="email" id="mail" /></br>
                
                    <label for="pass">mot de pass:</label>
                    <input type="password"name="pass" id="pass" required/></br>
                
               
            
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

