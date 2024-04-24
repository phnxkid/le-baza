<?php

require '../config/connexion.php';
require '../config/commandes.php';
require("paniers.class.php");
use Traitement\Panier;

//$Produits=afficher();
//$ProduitsMV = afficherMV();

if (isset($_GET['id'])) {
	$panier = new panier();
	$panier->add($_GET['id']);
    die("Ce produit a bien été ajouté au panier <a href='javascript:history.back()'>retourner sur le catalogue</a>");
    
	if (empty($req)) {
		die("Ce produit n'exite pas");
	}
	
	//var_dump($_SESSION);
}else{
	die("Vous n'avez pas selectionné de produit à ajouter au panier");
}



















?>