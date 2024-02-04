<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations sur les véhicules</title>
</head>
<body>
    <form method="post" action="vehicule_data.php">
        <p>
            <label for="matricule">Matricule : </label>
            <input type="text" name="matricule" id="matricule">
        </p>
            <label for="type">Type de vehicule : </label>
            <select name="type" id="type" title="type_de_vehicule">
                <option value="moto">moto</option>
                <option value="voiture">voiture</option>
                <option value="camion">Camion</option>
            </select>
        <p>
            <label for="marque">Marque: </label>
            <input type="text" name="marque" id="marque">
        </p>
        <p>
            <label for="modele">Modele : </label>
            <input type="text" name="modele" id="modele">
        </p>
        <p>
            <label for="puissance">Puissance fiscale : </label>
            <input type="tel" name="puissance" id="puissance">
        </p>
        <p>
            <label for="identifiant">Identifiant : </label>
            <input type="number" name="identifiant" id="identifiant">
        </p>
        <p>Les conditions de la police d'assurance : </p>
        <?php
            require_once("connect.inc.php");
            //Affichage des condition de la police
            $req = $bd->query("SELECT clauses FROM police WHERE num_police=1");
            while($donnee = $req->fetch()){
               echo $donnee['clauses'];
            }
            $req->closeCursor();
        ?>
        <p>
            <input type="reset" value="Effacer">
            <input type="submit" value="Valider">
        </p>
    </form>
</body>
</html>