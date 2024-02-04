<?php
    //Essayer de se connecter à la base de données
    require_once("connect.inc.php");

    //recuperation des données
    $nom = $_POST['nom'];
    $prenoms = $_POST['prenoms'];
    $adresse = $_POST['adresse'];
    $type_c = $_POST['type'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password_c = '{'.$_POST['password'].'}';
    
  
    try{
        //preparation de la requête
        $req = $bd->prepare("INSERT INTO Client(num_assure,noms,prenoms,adresse,type,contact,email,password) VALUES (DEFAULT,:nom,:prenoms,:adresse, :type_c, :contact, :email, :password_c)");

        //Execution de la requête
        $req->execute(array(
            'nom'=> $nom,
            'prenoms'=> $prenoms,
            'adresse' => $adresse,
            'type_c'=> $type_c,
            'contact'=> $contact,
            'email' => $email,
            'password_c' => $password_c
        ));
        
        echo "<h2> Vous avez été enregistrer</h2></br>";
        echo "<h2>Passer à l'enregistrement de votre voiture</h2>";
    ?>
    <a href="vehicule_data.html">Vehicule</a>
    <?php
    }catch(Exception $e){
        echo "<h2>Le mot de passe est dèja utilisé par un autre utilisateur</h2>";
    ?>
        <a href="client_data.html">Retour au formulaire</a>
    <?php
    }
            
?>

