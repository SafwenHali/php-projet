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
                 <form action="../../model/equipe/ajoutJeux_Action.php" method="POST">

                    <input type="text" id="ID" placeholder="ID Equipe" required><br>
                    <input type="text" id="Name" placeholder="Nom Equipe" required><br>
                    <table>
                    <tr><td style="width: 50px">
                    <input type="checkbox" id="P" value="true">
                    </td><td style="width: 300px">
                    <p class="T">ce jeux ce joue SOLO</p>
                    </td></tr>
                    <tr><td>
                    <input type="checkbox" id="T" value="true">
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