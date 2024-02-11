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
     //Essayer de se connecter à la base de données
     require_once("connect.inc.php");
     include("header.php");
    //recuperation des données
    $matricule = $_POST['matricule'];
    $type_v = $_POST['type'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $puissance = $_POST['puissance']; 
    $id = $_SESSION['numero'];
    $police = 1;
    
    try{
         //preparation de la requête
        $req = $bd->prepare("INSERT INTO vehicule(type,marque,modele,puissance,num_assure,num_police,matricule) VALUES(:type_v,:marque,:modele,:puissance,:id,:police,:matricule)");
        
        //Execution de la requête
        $req->execute(array(
            'matricule'=>$matricule,
            'type_v'=>$type_v,
            'marque'=>$marque,
            'modele'=>$modele,
            'puissance'=>$puissance,
            'id'=>$id,
            'police'=>$police
        ));
        ?>
        <section>
            <p>Votre <?php echo "$type_v";?> a été bien enrégistrer</p>
            <p>Si vous n'êtes pas seul a utiliser le vehicule alors ajouter un conducteur</p>
            <a href="conducteur_data_saisie.php" class="actuel">Ajouter</a>
        </section>
        <?php
    }catch(Exception $e){
        ?>
        <section>
        <p>Erreur de saisie ou la matricule existe déjà</p>
        <a href="vehicule_data_saisie.php" class="actuel">Retour au formulaire</a>
        </section>
        <?php
    }
   
?>

</body>
</html>