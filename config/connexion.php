<?php



$con = mysqli_connect("localhost","root","","ecom_store");


//namespace Config;
//use \PDO ;

//$con = mysqli_connect("localhost", "root", "", "lebazardata");

//if(!$con) die('Erreur: '.mysqli_connect_error());

/*

try {
	 $con=new pdo("mysql:host=localhost;dbname=lebazardata;charset=utf8", "root", "");
     
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}
*/
/*
class Bd{

	public $host;
	public $dbname;
	public $user;
	public $password;
	public function __construct($host="localhost",$dbname="lebazardata",$user="root",$password=""){

		$this ->host = $host;
		$this ->dbname = $dbname;
		$this ->user = $user;
		$this ->password = $password;
	}

	public static function getConnexion(){
		return new PDO("mysql:host=localhost;dbname=lebazardata;charset=utf8", "root", "",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	}
	public static function prepare($x){
		return self::getConnexion()->prepare($x);
	}

	public static function query($x){
		return self::getConnexion()->query($x);
	}
}
 */    

?>