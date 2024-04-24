<?php
if ($_POST['submit']) {
    # code...

    if (!empty($email = $_POST['email']) and !empty($_POST['mdp1']) and !empty($_POST['mdp2'])) {
        # code...
        $email = htmlspecialchars($_POST['email']);
        $mdp1 = password_hash($_POST['mdp1'], PASSWORD_DEFAULT);
        $mdp2 = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);
        if ($mdp1 === $mdp2) {
            # code...
            $req = $con->prepare("INSERT INTO user (user_email, user_mdp) VALUES (?, ?)");
            $req->execute(array($email, $mdp1));
            $req->closeCursor();
            $notif = "Inscription éffectuée avec succès";
        } else {
            $notif = "<p>Veuillez entrez des mots de passe identiques</p>";
        }
    }else{
        $notif = "Veuillez remplir tous les champs";
    }
} else {
    $notif = "";
}
?>