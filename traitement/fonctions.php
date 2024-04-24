<?php 


function nombreArt()
{
    if (!empty($_SESSION['panier'])) {
        echo (array_sum($_SESSION['panier']));
    } else {
        echo "0";
    }
}

function userConn()
{
    if (include("config/connexion.php")) {
        if (isset($_GET['user_id']) and $_GET['user_id'] > 0) {
            if ($_GET['user_id'] == $_SESSION['user_id']) {
                # code...
                $getid = intval($_GET['user_id']);
                $req = $con->prepare('SELECT * FROM user WHERE user_id = ?');
                $req->execute(array($getid));
                $userinfo = $req->fetch();
                echo $userinfo['user_email'];
            } else {
                echo "Bienvenue Visiteur";
            }
        } else {
            echo "Bienvenue Visiteur";
        }
    }
}
























?>