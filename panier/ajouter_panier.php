<?php 
include_once "../config/connexion.php";

if (!isset($_SESSION)) {
    # code...
    session_start();
}

if (!isset($_SESSION['panier'])) {
    # code...
    $_SESSION['panier'] = array();
}

if (isset($_GET['id'])) {
    # code...
    $id = $_GET['id'];
    $produit = $con->query("SELECT * FROM produits WHERE id = $id");
    $produit = array();
    if (empty(!in_array($id, $produit))) {
        # code...
        die("Ce produit n'existe pas dans la boutique");
    }
    if (isset($_SESSION['panier'][$id])) {
        # code...
        $_SESSION['panier'][$id]++;
        header('Location:../index.php');
    }else {
        # code...
        $_SESSION['panier'][$id] = 1;
        header('Location:../index.php');
    }
}




























?>