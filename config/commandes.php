<?php

//namespace Config;

//use Traitement\Panier;
//use Config\Bd;
//use \PDO;

#class Commande
#{
#public	
function ajouter($stock, $nom, $categorie, $prix, $description, $image, $image2, $image3, $date)
{
	if (require "connexion.php") {
		# code...
		$req = $con->prepare("INSERT INTO produits (stock, nom, categorie, prix, description, image, image2, image3, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

		$req->execute(array($stock, $nom, $categorie, $prix, $description, $image, $image2, $image3, $date));

		$req->closeCursor();
	}
}

function supprimer($id)
{
	if (require "connexion.php") {
		# code...
		$req = $con->prepare("DELETE FROM produits WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}
