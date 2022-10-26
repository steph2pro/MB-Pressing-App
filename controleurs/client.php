
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
            <div class="titre">
                <b id="retour">
                    <a href="../vues/menu-admin.php" >
                    retour
                    </a>
                </b>
                
    	       <h1> Ajouter/Clients</h1>
               <b id="suivant">
                   
                <a href="liste_client.php" >
                    liste des clients
                </a>
               </b>

            </div>
    
        <form name="from" method="post" action="enregistrement_client.php">
            
                <legend></legend>
                
                    
                
                
                   <label for="prenom">nom:</label>
                    <input type="text"name="nom" id="nom"required/></br>
                
                
                    <label for="nom">prenom:</label>
                    <input type="text"name="prenom" id="prenom" required/></br>
                     <p class="statut">
                    
							<label for="statut">
								 statut
							</label>
							<br />

						<select name="statut" id="statut">
								<option value="favorie">
									favorie
								</option>
								<option value="iregulier">
									iregulier
								</option>
							</select>
</p>
                
                    <label for="telephone">telephone:</label>
                    <input type="tel"name="telephone"id="telephone"required/></br>

                    <label for="codeclt">codeclt:</label>
                    <input type="text"name="codeclt" id="codeclt" required/></br>
                
               
            
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

