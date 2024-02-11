<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
          
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
<?php
try{
    require_once("connect.inc.php");
    include("header.php");
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $contact = $_POST['contact'];
    $matricule = $_POST['matricule'];

    $req = $bd->prepare("INSERT INTO conducteur(id_conducteur,nom,prenom,adresse_c,contact_c,vehicule_mat) VALUES(DEFAULT,:nom,:prenom,:adresse,:contact,:vehicule_mat);");

    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'adresse' => $adresse,
        'contact' => $contact,
        'vehicule_mat' => $matricule
    ));
    
    ?>
    <section>
        <p>Le conducteur est enrégistrer </br></p>
        <p>Vouliez vous ajouter un autre conducteur à votre véhicule</br></p>
        <a href="conducteur_data_saisie.php" class="actuel">oui</a>
        <a href="information_validation.php" class="actuel">Non</a>

    </section>
   
<?php
}catch(Exception $e)
{
    
    ?>
    <section>
        <p>La matricule de vehicule n'existe pas dans nos données ou il y'a erreur de saisie</br>ou le conducteur existe déja</p>
        <a href="conducteur_data_saisie.php" class="actuel">Retour au formulaire</a>
    </section>
    
<?php
}
   
?>

</body>
</html>
