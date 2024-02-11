<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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


        #connexion{
            background-color:#00A2E8;
            border:none;
            height:35px;
            border-radius:10px;
            color:white;
           
        }
    </style>
</head>
<body>
    <h1>Connexion</h1>
    <form action="connexion_data.php" method="post">
            <p>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" required>
        
            </p>
            <p>
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password" required>
       
            </p>
           
            <p>
                <input type="submit" value="Connexion" id="connexion">
            </p>         
       
    </form>
    <p>Pas de compte : <a href="client_data_saisie.php">Cree un compte</a></p>
    
</body>
</html>

