<HTML>
    <HEAd>
        <TITle>Ajout Equipe</TITle>
        <link rel = "icon" href="../../img/icon.png" type = "image/x-icon">
        <link rel="stylesheet" href="../../css/styles.css">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <script src="../../js/bootstrap.min.js"></script>
    </HEAd>
    <body>
         <center>
            <h1>Ajout Equipe</h1>
            <div>
                 <form action="../../model/equipe/ajoutEquipe_Action.php" method="POST">

                    <input type="text" id="ID" placeholder="ID Equipe" required><br>
                    <input type="text" id="Name" placeholder="Nom Equipe" required><br>
                    <select id="Jeux">
                        <option value="">Selection Jeux Equipe</option>
                        <?php 
                         require_once('../../model/jeux.php');
                         $J = new Jeux();
                         $res = $J->listJeuxE();
                         foreach ($res as $row) {
                             echo" <option value='$row[idJeux]'> $row[nomJeux] </option>";
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