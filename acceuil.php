<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <style type="text/css">
        body{
            height:100%;
            
        }
        section{
            padding-top:10%;
            padding-left:5%;
            
        }
        .text{
            font-size:50px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;   
        }
        #connexion{
            text-decoration:none;
            border: 1px solid #00A2E8;
            padding:10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:  #00A2E8;
            color:white;  
            border-radius:10px;
        }

        #deconnexion{
            text-decoration:none;
            border: 1px solid #00A2E8;
            padding:10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:  #00A2E8;
            color:white;  
            border-radius:10px;
        }

        footer{
            background-color: #C0C0C0;
            position:relative; 
            top:10vh; 
            width:100%; 
            padding-top:50px; 
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['numero'])){
            $text =  $_SESSION['bienvenue'];
        }else{
            $text = "AssuranceM vous souhaite</br> la bienvenue";
        }
    ?>
    <?php
        include("header.php");
    ?>
    <section>
        <div class="text">
            <h1><?php echo"$text";?></h1>
        </div>
        <?php
            if(isset($_SESSION['connecter'])){
                ?>
                 
                 <a href="deconnexion.php" id='deconnexion'>Deconnecter vous</a>
                 <?php
            }else{
                ?>
                <a href="connexion.php" id='connexion'>Connectez vous</a>
                <?php
            }
        ?>
       
        
    </section>
    
    <?php
        include("footer.php");
    ?>
    
</body>
</html>


