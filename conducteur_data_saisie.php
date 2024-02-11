<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les informations du conducteur</title>
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
            <input type="reset" value="effacer" class="button">
            <input type="submit" value="valider" class="button">
        </p>
    </form>
</body>
</html>