<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
            *{
                font-size:medium;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-align:center;
            }

            #image{
                margin-top:200px;
                margin-bottom:30px;
            }
        </style>
    </head>
    <body>
        <?php
            include("header.php");
            
            $numero = $_SESSION['numero'];
            $nom = $_SESSION['nom'];
            $prenoms = $_SESSION['prenoms'];
            $adresse = $_SESSION['adresse'];
            $contact = $_SESSION['contact'];
            $image = $_SESSION['image'];
            $image_type = $_SESSION['image_type'];
            $base64_image = 'data:' . $image_type . ';base64,' . base64_encode($image);
        ?>  
        <?php if (isset($_SESSION['image'])):?>
            <img src="<?php echo"$base64_image"; ?>" alt="Image">
            
        <?php else: ?>
            <img src="#" alt="Pas de photo" id="image">
        <?php endif; ?>

        <p><strong>Numero : <?php echo "$numero";  ?></strong></p>
        <p><strong>Nom : <?php echo "$nom"; ?></strong> </p>
        <p><strong>Prenoms : <?php echo "$prenoms"; ?></strong> </p>
        <p><strong>Adresse : <?php echo "$adresse"; ?></strong></p>
        <p><strong>Contact : <?php echo "$contact"; ?></strong></p>
    </body>
</html>