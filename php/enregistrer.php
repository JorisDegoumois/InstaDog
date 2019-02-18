<?php session_start() ?>
<!DOCTYPE html>
<html>

    <head>
       <?php include ('header.php')?>  
    </head>
  

<body>
 

<body>
    
    <form class="border border-light p-5" method="POST">

            <p class="h4 mb-4 text-center">Enregistrer</p>
        
            <input type="text" name ="prenom" id="defaultRegisterFormFirstName" class="form-control" placeholder="Prenom">
        
            <input type="text" name="nom" id="defaultRegisterFormLastName" class="form-control" placeholder="Nom">

            <input type="email" name ="email" id="defaultRegisterFormLastName" class="form-control" placeholder="email">
        
            <input type="password" name="pwd" id="defaultRegisterFormPassword" class="form-control" placeholder="mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            
            <input type="password" name="pwd2" id="defaultRegisterFormPassword" class="form-control" placeholder="mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">
        
            <button class="btn btn-info my-4 btn-block" name="creer" type="submit">Creer</button>
        </form>
    
    
    <?php
    
        require ("connexion_instadog.php");
        $appli = new Connexion();

        $error = array();
        $user = null;
        $email = null;

        if (isset($_POST['creer']))
        {
            $prenom  = $_POST['prenom'];
            $nom  = $_POST['nom'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $pwd2 = $_POST['pwd2'];
            $hash_pass = password_hash($pwd, PASSWORD_DEFAULT);

            // معالجة بيانات الإستمارة
            if(empty($prenom)){ $error[] = 'le champ de prenom est vide';}
           if(empty($nom)) { $error[] = 'le champ de nom est vide';}
           if(empty($email)) { $error[] = 'le champ de email est vide';}
           if(empty($pwd)) { $error[] = 'le champ de mot de pass est vide';}
            if(empty($pwd2)) { $error[] = 'le champ de confirm mot de pass est vide';}

           if($pwd !== $pwd2) { $error[] = 'Attention , les deux champs de mots de pass sont identiques';}
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $error[] = "L'email est incorrect";}

              };
                // تعيين جلسة لإشعار المستخدم بنجاح عملية تسجيله ، ثم تحويله لصفحة الدخول
            // $_SESSION['message'] = header('location:login_user.php'); exit;

          
            if(empty($error))
            {
               // تشفير كلمة المرور
        
                $hash_pass = password_hash($pwd, PASSWORD_DEFAULT);
                // تخزين البيانات في القاعدة
                $appli->inseretUser($nom, $prenom, $email, $hash_pass);
      
                // تعيين جلسة لإشعار المستخدم بنجاح عملية تسجيله ، ثم تحويله لصفحة الدخول
                $_SESSION['message'] = htmlspecialchars($user). ' : تم تسجيلك بنجاح ، يمكنك الولوج لحسابك عبراستمارة الدخول أسفله : ';
                //header('location:login.php'); exit;
            }
            else 
            { // عرض الأخطاء الناجمة
                echo '<div class="errors"><ol>';
                foreach ($error as $value)
                {
                    echo '<li>'.$value.'</li>';
                }
                echo '</ol></div>';
            };
    
        ?>
         

        <div class="footer">
            <?php include 'footer.php';?>
        </div>
    </body>

</html>