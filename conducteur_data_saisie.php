<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les informations du conducteur</title>
</head>
<body>
    <form action="conducteur_data.php" method="post">
        <h2>Informations du conducteur</h2>
        <p>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom">
        </p>
        <p>
            <label for="prenom">Prenom : </label>
            <input type="text" name="prenom" id="prenom">
        </p>
        <p>
            <label for="adresse">Adresse : </label>
            <input type="text" name="adresse" id="adresse">
        </p>
        <p>
            <label for="contact">Contact : </label>
            <input type="tel" name="contact" id="contact">
        </p>
        
        <p>
            <label for="matricule">Matricule du vehicule : </label>
            <input type="text" name="matricule" id="matricule">
        </p>
        <p>
            <input type="reset" value="effacer">
            <input type="submit" value="valider">
        </p>
    </form>
</body>
</html>