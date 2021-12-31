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
            <?php 
                        include('../../model/jeux.php');
                            $J = new Jeux();
                             $res = $J->listJeuxE();
            ?>
            <div>
                 <form method="post" action="../../model/equipe/ajoutEquipe_Action.php" >

                    <input type="text" name="ID" value="" placeholder="ID Equipe" required ><br>
                    <input type="text" name="Name" value="" placeholder="Nom Equipe" required><br>
                    <select name="Jeux" value="">
                        <option value="">Selection Jeux Equipe</option>
                        <?php 
                            foreach ($res as $row) {
                            echo"<option value='$row[idJeux]'>$row[nomJeux]</option>";
                        }
                        ?>
                    </select><br>


                    <br><input type="submit" value="Ajouter">
                    <button type="reset" id="button1">Annuler</button>
                   
                </form>
             </div>
        </center>
    </body>
    
</html>