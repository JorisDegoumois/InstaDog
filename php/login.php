<?php 
session_start();
require ("connexion_instadog.php");
require ("login_user.php");
//require ("enregistrer.php");

$appli = new Connexion();

echo var_dump($user);

if(isset($_POST['submit'])){ 
    $user =$appli->getenregistre($_POST['email']);
    $paswd = $user->getPwd();
     $pwd = $_POST['pwd'];
  
echo var_dump($user);

        if (password_verify($pwd, $paswd)) {
           $_SESSION['userId'] = $user->getUserId();
           $_SESSION['userEmail'] = $user->getEmail();
           echo "Bienvenue";
           header('Location:profile_user.php');
           } else {
            echo "You are not Register Yet or bad UserName/Password";
           }
    }

    
   



?>
