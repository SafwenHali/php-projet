<HTML>
    <HEAd>
        <TITle>Ajout Joueur</TITle>
        <link rel = "icon" href="../../img/icon.png" type = "image/x-icon">
        <link rel="stylesheet" href="../../css/styles.css">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <script src="../../js/bootstrap.min.js"></script>
    </HEAd>
    <body>
         <center>
            <h1>Ajout Joueur</h1>
            <div>
                 <form action="../../model/joueur/ajoutJoueur_Action.php" method="POST">

                    <input type="text" id="ID" placeholder="ID Joureur" required><br>
                    <input type="text" id="firstName" placeholder="Nom Joureur" required><br>
                    <input type="text" id="lastName" placeholder="Prenom Joureur" required><br>
                    <input type="date" id="birthDay" required><br>
                    <input type="tel" id="phoneNumber" placeholder="Telephone Joureur" required><br>
                    <select id="Equipe">
                        <option value="">Selection Equipe</option>
                        <?php 
                         require_once('../../model/equipe.php');
                         $E = new Equipe();
                         $res = $E->listEquipe();
                         foreach ($res as $row) {
                             echo" <option value='$row[idEquipe]'> $row[titreEquipe] </option>";
                         };
                        ?>
                    </select><br>


                    <br><button type="submit">Ajouter</button>
                    <button type="reset" id="button1">Annuler</button>
                   
                </form>
             </div>
        </center>
    </body>
    
</html>