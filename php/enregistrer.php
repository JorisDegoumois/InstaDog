<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.min.css" rel="stylesheet">
   <!--  mon ficher css -->
   <link href ="Instadog.css" rel="stylesheet">

    <!--Navbar-->
    <nav class="navbar navbar-light navbar-1 white">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#"></a>
    
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
        aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent15">
    
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="#">Gallerie <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="article.html">Articles</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="Nouvel Article(fini).html">Ajouter un article <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="nouveau-chien(ter).html">Ajouter un chien  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">chercher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">log out</a>
            </li>
        </ul>
        <!-- Links -->

    
        </div>
        <!-- Collapsible content -->
    
    </nav>
  <!--/.Navbar-->
</head>  



<body>
    
    <form class="border border-light p-5" method="POST">

            <p class="h4 mb-4 text-center">Enregistrer</p>
        
            <input type="text" name ="prenom" id="defaultRegisterFormFirstName" class="form-control" placeholder="Prenom">
        
            <input type="text" name="nom" id="defaultRegisterFormLastName" class="form-control" placeholder="Nom">

                <input type="email" name ="email" id="defaultRegisterFormLastName" class="form-control" placeholder="email">
        
            <input type="password" name="pwd" id="defaultRegisterFormPassword" class="form-control" placeholder="mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            
            <input type="password" name="pwd2" id="defaultRegisterFormPassword" class="form-control" placeholder="mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">


            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">Minimal 8 characters lenght</small>
        
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
            </div>
        
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

            else$appli->inseretUser($nom, $prenom, $email, $hash_pass);

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
            <p>S'enregistrer avec :</p>
            <a type="button" class="light-blue-text mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="light-blue-text mx-2">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="light-blue-text mx-2">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="light-blue-text mx-2">
                <i class="fab fa-github"></i>
            </a>

            <div class="footer-copyright text-center py-3">
                Realise 2018:
                Cr&eacute;er par Rana et Joris
            </div>
         </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>

</html>