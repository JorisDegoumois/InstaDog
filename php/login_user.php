<?php 
session_start();
require ("connexion_instadog.php");      
$appli = new Connexion();
?>


        
<?php include "header.php";?>

    <div id="page-content"></div>

        <!-- logo de notre site-->
        <div class="border border-light p-5">
            <img src="Instadog.png" height="150" width="150" alt="test img" align-item ="center">
            <p class="h4 mb-4 text-center">Login</p>
        </div>

        <div class="container">
            <form action="login_user.php" method="post" >
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="Email de utilisteur">
                <input type="password" id="password" name="pwd" class="form-control mb-4" placeholder="Mot de passe">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Se souvenir de moi</label>
                        </div>
                    </div>

                    <div>
                        <a href="">mot de passe oubli&eacute;</a>
                    </div>
                </div>
                <button class="btn btn-info btn-block my-4" type="submit" name="submit" value="submit" >login</button>
            </form>    
            <div class="text-center">
                <p>Pas encore membre ?<a href="enregistrer.php">S'enregister</a></p>
            </div>
        </div>

        <?php
            if(isset($_POST['submit'])){ 
                $user =$appli->getenregistre($_POST['email']);
                $paswd = $user->getPwd();
                $pwd = $_POST['pwd'];

                if (password_verify($pwd, $paswd)) {
                $_SESSION['userId'] = $user->getUserId();
                $_SESSION['userEmail'] = $user->getEmail();
                $_SESSION['getPrenom'] = $user->getPrenom();
                $_SESSION['getNom'] = $user->getNom();
        
                //من أجل الدهاب إلى صفحة المستخدم ياستخدام كود من الجافا 
                echo "<script type='text/javascript'>document.location.replace('profile_user.php');</script>";
        
                } else {
                    echo "You are not Register Yet or bad UserName/Password";
                    }
                $_SESSION['userId'] ;
                $_SESSION['userEmail'];
                $_SESSION['getPrenom'] ;
                $_SESSION['getNom'] ;

                    
            } 
        ?>
        
        <footer> <?php include_once ('footer.php');?> </footer>

    </body>

</html>