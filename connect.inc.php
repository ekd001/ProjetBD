<?php
    try{
        $bd = new PDO("pgsql:host=localhost;dbname=assuranceM", "postgres","123456789");
    }catch(Exception $e){
        die('erreur : '.$e->getMessage());
    }
?>