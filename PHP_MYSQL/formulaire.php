<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire HTML</title>

    <link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body> 
    <form method="post" action="config.php"> 
        <h1>Formulaire élèves</h1>

        <p> Tous les champs sont obligatoires.</p>

    <div>
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br>
    </div>

    <div>
        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br>
    </div>

    <div style="margin-top: 20px;">
        <label for="datenaissance">Date de naissance :</label><br>
        <input type="date" name="datenaissance" min="1907-01-01" max="2024-04-15" required>
    </div>
    
    <div>
        <label for="email">Email :</label><br>
        <input type="text" id="email" name="email" required><br>
    </div>

    <div>
        <label for="sexe">Genre :</label> 
        <input type="radio" id="homme" name="genre" value="homme">
        <label for="homme">Masculin</label>
        <input type="radio" id="femme" name="genre" value="femme" required>
        <label for="femme">Féminin</label>
        <input type="radio" id="autres" name="genre" value="autres">
        <label for="autres">Autres</label>
    </div>


    <div>
        <label for="classe">Classe :</label>
        <select name="classe" id="classe" required>
            <option value="TGEN">T.GEN</option>
            <option value="TSTI2D">T.STI2D</option>
            <option value="TSTMG">T.STMG</option>
            <option value="TSTL">T.STL</option>
            <option value="TES">T.ES</option>
            <option value="TS">T.S</option>
            <option value="TPRO">T.PRO</option>
            <option value="BTSIO">BTSIO</option>
            <option value="BUT">BUT</option>
            <option value="LICENCE'1'">LICENCE</option>
        </select>
    </div>

    <div>
        <label for="diplome">diplome :</label>
        <select name="diplome" id="diplome" required>
            <option value="BAC_GEN">BAC GEN</option>
            <option value="BAC_STI">BAC STI</option>
            <option value="BAC_STMG">BAC STMG</option>
            <option value="BAC_STL">BAC STL</option>
            <option value="BAC_S">BAC S</option>
            <option value="BTS">BTS</option>
            <option value="BUT">BUT</option>
            <option value="LICENCE">LICENCE</option>
        </select>
    </div>

    <div>
        <label for="telephone">telephone :</label><br>
        <input type="text" id="telephone" name="telephone" required><br>
    </div>



    <div style="margin-top: 20px;">
        <label for="adresse">adresse :</label><br>
<input type="text" id="adresse" name="adresse" placeholder="adresse" required><br>
<input type="text" id="ville" name="ville" placeholder="Ville" required><br>
<input type="text" id="code_postal" name="code_postal" placeholder="Code postal" required><br>
        <label for="pays">Pays :</label>
        <select name="pays" id="pays" required>
            <option value="France">France</option>
            <option value="Espagne">Espagne</option>
            <option value="Italie">Italie</option>
            <option value="Allemagne">Allemagne</option>
            <option value="Royaume-Uni">Royaume-Uni</option>
            <option value="Portugal">Portugal</option>
            <option value="Belgique">Belgique</option>

        </select>
    </div>

        <button type="submit">Envoyer</button>

    </form>
</body>
</html>