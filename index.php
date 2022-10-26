<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <title>mabou pressing</title>
    <link rel="icon" type="image/jpg" sizes="16x16" href="../assets/images/logo.jpg">
        <link rel="stylesheet" href="assets/css/index.css" media="screen" type="text/css" />

    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="controleurs/connection.php" method="POST">
                <h1>Connexion</h1>
                <img src="assets/images/uilisateur.png">
                
                <label><b id="nu">Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom">

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_pass">
                statut
            <select name="statut">
                <option value="gerant">GERANT</option>
                <option value="admin">ADMINISTRATEUR</option>
            </select>

                <input type="submit" id='submit' value='se connecter' >
                <?php
                     
        if (isset($_GET['login_err'])) {
            $err=htmlspecialchars($_GET['login_err']);
            switch ($err) {
                    case 'empty':
                    ?>
                    <div class="alert-succes">
                        <strong>Erreur: </strong>
                        <script type="text/javascript">
                            alert("Veuillez remplir tous les champ !");
                        </script>
                        <i> Veuillez remplir tous les champ !</i>
                    </div>
                    <?php
                    break;

                    case 'already':
                    ?>
                    <div class="alert-danger">
                        <strong>Erreur: </strong>
                        <script type="text/javascript">
                            alert("Compte inexistant !!");
                        </script>
                        <i> Compte inexistant !</i>
                    </div>
                    <?php
                    break;

                    case 'email':
                    ?>
                    <div class="alert-danger">
                        <strong>Erreur: </strong>
                        <i>email non valide !</i>
                    </div>
                    <?php
                    break;
            }
        }
    ?>
            </form>
        </div>
    </body>
</html>
