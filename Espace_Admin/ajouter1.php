<?php

  require("../config/commandes.php");



  if (!empty($_FILES['fichier1']['name']) AND !empty($_FILES['fichier2']['name']) AND !empty($_FILES['fichier3']['name']) ) {
    $file_name1 = $_FILES['fichier1']['name'];
    $file_name2 = $_FILES['fichier2']['name'];
    $file_name3 = $_FILES['fichier3']['name'];
    #$file_name4 = $_FILES['fichier4']['name'];
    $extensionsValides = array('jpg', 'jpeg', 'png', 'gif');
    $extensionUpload1 = strtolower(substr(strrchr($file_name1, '.'), 1));
    $extensionUpload2 = strtolower(substr(strrchr($file_name2, '.'), 1));
    $extensionUpload3 = strtolower(substr(strrchr($file_name3, '.'), 1));
    #$extensionUpload4 = strtolower(substr(strrchr($file_name4, '.'), 1));
    $file_tmp_name1 = $_FILES['fichier1']['tmp_name'];
    $file_tmp_name2 = $_FILES['fichier2']['tmp_name'];
    $file_tmp_name3 = $_FILES['fichier3']['tmp_name'];
    #$file_tmp_name4 = $_FILES['fichier4']['tmp_name'];
    $file_dest1 = '../pictures/img/'.$file_name1;
    $file_dest2 = '../pictures/img/'.$file_name2;
    $file_dest3 = '../pictures/img/'.$file_name3;
    #$file_dest4 = '../pictures/article/informatique/'.$file_name4;
    $extensionTest1 = in_array($extensionUpload1, $extensionsValides);
    $extensionTest2 = in_array($extensionUpload2, $extensionsValides);
    $extensionTest3 = in_array($extensionUpload3, $extensionsValides);
    #$extensionTest4 = in_array($extensionUpload4, $extensionsValides);
    if ($extensionTest1 AND $extensionTest2 AND $extensionTest3) {
      $resultat1 = move_uploaded_file($file_tmp_name1, $file_dest1);
      $resultat2 = move_uploaded_file($file_tmp_name2, $file_dest2);
      $resultat3 = move_uploaded_file($file_tmp_name3, $file_dest3);
      #$resultat4 = move_uploaded_file($file_tmp_name4, $file_dest4);
      if ($resultat1 AND $resultat2 AND $resultat3 AND $resultat3) {
        $stock = htmlspecialchars(strip_tags($_POST['Qt']));
        $nom = htmlspecialchars(strip_tags($_POST['nom']));
        $prix = htmlspecialchars(strip_tags($_POST['prix']));
        $description = nl2br(htmlspecialchars(strip_tags($_POST['desc']))); 
        $date = htmlspecialchars(strip_tags($_POST['date']));
        $cat = htmlspecialchars(strip_tags($_POST['cat']));
        if (!empty($stock) AND !empty($nom) AND !empty($prix) AND !empty($description)) {
          try 
          {
            ajouter($stock, $nom, $cat, $prix, $description, $file_name1, $file_name2, $file_name3, $date);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
          echo "Produit enregistré avec succès";

        }else{
          echo "Assurez vous de remplire tous les champs.";
        }
      }
    }else{
      echo "Votre image doit être au format jpg, jpeg, gif ou png.";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>

    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

  <div class="album py-5 bg-light">
    
      	
<form method="post" enctype="multipart/form-data">

<div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
  <div class="mb-3">
    <input type="file" name="fichier1" id="image" required><br><br>
  </div>
  <div class="mb-3">
    <input type="file" name="fichier2" id="image" required><br><br>
  </div>
  <div class="mb-3">
    <input type="file" name="fichier3" id="image" required><br><br>
  </div>

  <div class="mb-3">
      <label for="date">Date d'ajout</label><br>
			<input type="date" name="date" id="date" required><br><br>
  </div>
  <div class="mb-3">
    <label for="titre">Quantité du produit</label><br>
		<input type="number" name="Qt" id="titre" required><br><br> <!--Meme si c'est le name est titre il indique la Qt-->
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
    <input type="text" class="form-control" name="nom"  required>
  </div>

  <div class="col-6">
  <div class="mb-3">
  <label for="categorie">Selectionner une catégorie pour l'article</label><br>
			<select name="cat" id="categorie">
				<option value="informatique">Informatique</option>
				<option value="telephone">Téléphone</option>
				<option value="electronique">Electronique</option>
				<option value="cosmetique">Beauté</option>
				<option value="bebe">Produit4bébé</option>
				<option value="agriculture">Agriculture</option>
				<option value="modeH">ModeHomme</option>
				<option value="modeF">ModeFemme</option>
				<option value="autres">AutresCatégories</option>
			</select><br><br>
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <input type="number" class="form-control" name="prix" required>
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea class="form-control" name="desc" required></textarea>
  </div>

  <button type="submit" name="valider" class="btn btn-primary">Ajouter un nouveau produit</button>
  </div>

  <p>Si vous desirez supprimer un article <a href="supprimer.php">cliquez-ici</a></p>
</form>
      </div>
    </div>
  </div>

    
</body>
</html>