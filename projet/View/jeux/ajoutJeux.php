<HTML>
    <HEAd>
        <TITle>Cree Jeux</TITle>
        <link rel = "icon" href="../../img/icon.png" type = "image/x-icon">
        <link rel="stylesheet" href="../../css/styles.css">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <script src="../../js/bootstrap.min.js"></script>
    </HEAd>
    <body>
         <center>
            <h1>Cree Jeux</h1>
            <div>
                 <form action="../../model/jeux/ajoutJeux_Action.php" method="POST">

                    <input type="text" name="ID" placeholder="ID Jeux" required><br>
                    <input type="text" name="Name" placeholder="Nom De Jeux" required><br>
                    <table>
                    <tr><td style="width: 50px">
                    <input type="checkbox" name="check[]" value="joueur" >
                    </td><td style="width: 300px">
                    <p class="T">ce jeux ce joue SOLO</p>
                    </td></tr>
                    <tr><td>
                    <input type="checkbox" name="check[]" value="equipe" >
                    </td><td>
                    <p class="T">ce jeux ce joue en equipe</p>
                    </td></tr>
                    </table>
                    <br><button type="submit">Ajouter</button>
                    <button type="reset" id="button1">Annuler</button>
                   
                </form>
             </div>
        </center>
    </body>
    
</html>