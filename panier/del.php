<?php 





if (isset($_GET['del'])) {
    # code...
    $id_del = $_GET['del'];
    unset($_SESSION['panier'][$id_del]);
    header('Location:../cart.php');
}

















?>