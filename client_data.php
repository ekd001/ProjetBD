<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{
            text-align:center;
            font-size:medium;
            font-family : 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        a{
            width:200px;
            background-color:#00A2E8;
            border:1px solid #00A2E8;;
            border-radius:5px;
            color:white;
            text-decoration:none;
            padding:2px;
        }
    </style>
</head>
<body>
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
    if(isset($_FILES['image'])){
        $file = $_FILES['image'];
        $nom_fichier = $_FILES['image']['name'];
        $chemin_temporaire = $_FILES['image']['tmp_name'];
        $image_type = $_FILES['image']['type'];

        // Chemin de destination où vous souhaitez enregistrer le fichier
        $chemin_destination = "images/" . $nom_fichier;

        // Déplacez le fichier téléchargé vers le chemin de destination
        if(move_uploaded_file($chemin_temporaire, $chemin_destination)) {
            echo "L'image a été téléchargée avec succès.";
            $data_image = file_get_contents($chemin_destination);
            $data_image_hex = bin2hex($data_image);
            
        } else {
            echo "Une erreur s'est produite lors du téléchargement de l'image.";
        }
    }else{
        echo "Une erreur s'est produite lors du téléchargement de l'image.";
    }
    
   
    try{
        //preparation de la requête
        $req = $bd->prepare("INSERT INTO Client(num_assure,noms,prenoms,adresse,type,contact,email,password,image,image_type) VALUES (DEFAULT,:nom,:prenoms,:adresse, :type_c, :contact, :email, :password_c, decode(:image, 'hex'),:image_type);");

        //Execution de la requête
        $req->execute(array(
            'nom'=> $nom,
            'prenoms'=> $prenoms,
            'adresse' => $adresse,
            'type_c'=> $type_c,
            'contact'=> $contact,
            'email' => $email,
            'password_c' => $password_c,
            'image' => $data_image_hex,
            'image_type' => $image_type
        ));
         
        
    ?>
        <p>Vous êtes enrégistrer, vous pouvez essayer de vous connecter</p>
        <a href="acceuil.php">Acceuil</a>
    <?php
    }catch(Exception $e){
        echo "<h2>Le mot de passe et l'email sont dèja utilisé par un autre utilisateur</h2>";
        echo "$e";
    ?>
        <a href="client_data_saisie.php">Retour au formulaire</a>
    <?php
    }
            
?>


</body>
</html>
