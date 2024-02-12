<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{
            font-size: medium;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;   
            text-align:center;
        }

        a{
            background-color:#00A2E8;
            border:1px solid #00A2E8; ;
            height:70px;
            width:200px;
            border-radius:0px;
            color:white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php
     require_once("connect.inc.php");
     $num_assure = 0;
     $nom;
     $prenoms;
     $adresse;
     $type_c;
     $contact;
     $email = $_POST['email'];
     $password = $_POST['password'];
    
    try{
        
        $req = $bd->prepare("SELECT * FROM client WHERE email = :email AND password = :password");
        $req->execute(array(
            'email'=>$email,
            'password'=> '{'.$password.'}'
        ));
        while($data = $req->fetch()){
            $num_assure = $data['num_assure'];
            $nom = $data['noms'];
            $prenoms = $data['prenoms'];
            $adresse = $data['adresse'];
            $contact = $data['contact'];
            $image = $data['image'];
            $image_type = $data['image_type'];
            $connecter = true;
            
        }
        $req->closeCursor();

        
        if($num_assure > 0){
            
            session_start();
            $_SESSION['bienvenue'] = "Heureux de vous voir </br>".$nom;
            $_SESSION['numero'] = $num_assure;
            $_SESSION['nom'] = $nom;
            $_SESSION['prenoms'] = $prenoms;
            $_SESSION['adresse'] = $adresse;
            $_SESSION['contact'] = $contact;
            $_SESSION['image'] = $image;
            $_SESSION['image_type'] = $image_type;
            $_SESSION['connecter'] = true;

            $date = date("Y-m-d");
            $req1 = $bd->prepare("SELECT message,dt_message FROM Notification WHERE id_client=:num_assure  ");
            $req1->execute(array(
                'num_assure'=>$_SESSION['numero']
            ));
            $i = 0;
            while($data = $req1->fetch()){
                $message = $data['message'];
                $date = $data['dt_message'];
                $i++;
            }

            $_SESSION['notification'] = $i;
            header("Location:acceuil.php");
            exit;
        }else{
            echo "Vous n'êtes pas enrégistrer dans notre base de donées</br>";
            ?>
            <a href="client_data_saisie.php">Cree un compte</a>
        <?php
        }
    }catch(Exception $e){
        echo "Erreur de connexion";
    }
    
?>
</body>
</html>
