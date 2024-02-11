<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations sur les véhicules</title>
    <style type="text/css">
        body{
            width : 100%;
            height : 100%;
            text-align : center;
            font-family : 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size:medium;
        }
        form{
            
            display:flex;
            flex-direction:column;
            margin-top:100px;
        }

        p{
            font-size:medium;
        }
        
        input{
            height:30px;
            width:300px;
            margin-bottom:10px;  
           
        }

        select{
            height:30px;
            width:310px;
            text-align:center;
            margin-left: 40vw;
            margin-bottom:10px; 
        }

        label{
            display:block;
            position:relative;
            right:100px;
            margin-bottom:5px;
        }

        .button{
            width:200px;
            background-color:#00A2E8;
            border:none;
            border-radius:10px;
            color:white;
        }

    </style>
</head>
<body>
    <h2>Informations sur le vehicule</h2>
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
        <p>Les conditions de la police d'assurance : </p>
        <?php
            require_once("connect.inc.php");
            //Affichage des condition de la police
            $req = $bd->query("SELECT clauses FROM police WHERE num_police=1");
            while($donnee = $req->fetch()){
               $police = $donnee['clauses'];
            }
            $req->closeCursor();
            echo"<strong>$police</strong>";
        ?>
        <p>
            <input type="reset" value="Effacer" class="button">
            <input type="submit" value="Valider" class="button">
        </p>
    </form>
</body>
</html>