<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=lebazardata;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }catch(Exeption $e){
        die('Erreur:'.$e->getMessage());
    }


?>