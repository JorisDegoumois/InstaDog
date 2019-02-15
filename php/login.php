<?php 
session_start();

require ("connexion_instadog.php");
//require ("login_user.php");
//require ("enregistrer.php");



$appli = new Connexion();


// un objet de class connexion


//pour protoger notre base de donées
//$email= mmysql_real_escape_string($_post['email']);
//$password = mysql_real_escape_string($_post['pwd']);

if(isset($_POST['submit'])){
     
$user =$appli->getenregistre($_POST['email']);
    $pwd = $_POST['pwd'];
    /* $hash_pass = password_hash($pwd, PASSWORD_DEFAULT); */
        if ($user!=null){
            $email  = $_POST['email'];
            $pwd =$_POST['pwd'];
            var_dump(password_verify($pwd, $appli->getpassword($_POST['pwd'])));

            $$pwd = $_POST['pwd'];  
            $pwd = $_POST['pwd'];
            $id  = $user->getUserId();
 

    
        //if ($pd == $pwd) {

        $_SESSION['email']=$email;
        $_SESSION['id']  =$id;

          //  echo "You are Login Succesfully";
            //header('location:instadog_gallery.html');

            //} else { 


            echo "You are not Register Yet or bad UserName/Password";

        }

     

   // }
};


?>
