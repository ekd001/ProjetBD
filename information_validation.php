<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info validation</title>
    <style>
        section{
                margin-top : 200px;
                font-size:medium;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-align:center;
        }

        .actuel{
            background-color:#00A2E8;
            border:1px solid #00A2E8; ;
            height:70px;
            width:200px;
            border-radius:10px;
            color:white;
            text-decoration: none;
            padding : 10px;
        }
    </style>
</head>
<body>
<?php include("header.php");
    require_once("connect.inc.php");
    $id = $_SESSION['numero'];
    $current_date = date("Y-m-d");

    $req = $bd->prepare("INSERT INTO notification(num,id_client,message,dt_message,type) VALUES(DEFAULT,:id,'Demande est en attente',:date_c,'en attente');");
    $req->execute(array('id'=>$id,'date_c'=>$current_date));
?>
    <section>
        <p>Vous passerez à l'agence pour le dêpot de vos pieces relatives à vous, votre vehicule et saisie pour la confirmation.</p>
        <p>Votre demande sera en cours de validation pour le moment.</p>
        <a href="acceuil.php" class="actuel">Retour à l'acceuil</a>
    </section>
   
    
</body>
</html>