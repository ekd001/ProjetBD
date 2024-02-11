<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de l'assuré</title>
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
    <h2>Renseigner vos informations</h2>
    <form method="post" action="client_data.php" enctype="multipart/form-data">
        <p>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom">
        </p>
        <p>
            <label for="prenoms">Prenoms : </label>
            <input type="text" name="prenoms" id="prenoms">
        </p>
        <p>
            <label for="adresse">Adresse : </label>
            <input type="text" name="adresse" id="adresse">
        </p>
        <p>
            <label for="type">Type : </label>
            <select name="type" id="type">
                <option value="personnelle">Personnelle</option>
                <option value="publique">Publique</option>
            </select>
        </p>
        <p>
            <label for="contact">Contact : </label>
            <input type="tel" name="contact" id="contact">
        </p>
        <p>
            <label for="emeil">Email : </label>
            <input type="email" name="email" id="email" placeholder="nom@x.y" required>
        </p>
        <p>
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            <label for="image">Votre image</label>
            <input type="file" name="image"> 
        </p>
        <p>
            <input class="button" type="reset" value="Effacer">
            <input class= "button" type="submit" value="Soumettre">
        </p>
    </form>
</body>
</html>