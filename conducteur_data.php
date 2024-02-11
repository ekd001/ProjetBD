<?php
try{
    require_once("connect.inc.php");

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
    echo"<h2>Le conducteur est enrégistrer </br></h2>";
    ?>
    <h2>Vouliez vous ajouter un autre conducteur à votre véhicule</br></h2>
    <a href="conducteur_data_saisie.php">oui</a>
<?php
}catch(Exception $e)
{
    echo "<h2>La matricule de vehicule n'existe pas dans nos données ou il y'a erreur de saisie</br>ou le conducteur existe déja</h2>";
    ?>
    <a href="conducteur_data_saisie.php">Retour à la saisie</a>
<?php
}
   
?>
