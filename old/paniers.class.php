<?php
namespace Traitement;
use Config\Bd;
class Panier{

	public $nomArticle ;
	public $prix;
	public $cookiesId = [];

	// public function __construct($id){
	// 	$this -> id = $id ;
	// }
	public function add($producId){
		session_start();
		
		if(!empty($_SESSION['panier'])){
			$nbr = count($_SESSION['panier']);
			$_SESSION['panier'][$nbr--] = $producId;
		}else{
			$_SESSION['panier'][0] = $producId;
		}

		var_dump($_SESSION);
	}

	public function getProduct(){
		$connexion = new Bd();
		if(!empty($_COOKIE)){
			$this->cookiesId = $_COOKIE['products_id'];
			foreach($_COOKIE['products_id'] as $cook => $val){
				$req = $connexion ->query("SELECT * FROM panier WHERE id =  ");
			}
		}
		
	}

}
?>