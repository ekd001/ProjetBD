<?php
     //Essayer de se connecter à la base de données
     require_once("connect.inc.php");
     
    //recuperation des données
    $matricule = $_POST['matricule'];
    $type_v = $_POST['type'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $puissance = $_POST['puissance']; 
    $id = $_POST['identifiant'];
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
        echo "<h2>Votre $type_v a été bien enrégistrer</h2>";
    }catch(Exception $e){
        echo "<h2>Erreur de saisie ou cette matricule existe deja dans notre base</h2>";
    }
   
?>