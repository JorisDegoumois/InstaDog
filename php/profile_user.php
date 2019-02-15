<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.min.css" rel="stylesheet">
        <!--  mon ficher css -->
        <link href ="Instadog.css" rel="stylesheet">
        
         
    </head>
    

    <body> 
        <!--Navbar-->
        <nav class="navbar navbar-light navbar-1 white">

            <a class="navbar-brand" href=""></a>.
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
            aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent15">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="instadog_gallery.php">Gallerie <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="article.php">Articles</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="NouvelArticle.php">Ajouter un article <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="nouveau-chien.php">Ajouter un chien  <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.google.com/">chercher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">log out</a>
                </li>
            </ul>
            <!-- Links -->


            </div>
            <!-- Collapsible content -->

        </nav>            <!--/.Navbar-->
      <div data-spy="scroll" data-target="#scrollspy-nav" data-offset="0" style="overflow: scroll">
      </div> 
   
         
        <div class="container">   
            <div class="row">    
                <?php  
                    require ("connexion_instadog.php");
                    $appli= new Connexion ;
                    
                    /*  
                    echo $_SESSION['userId']; */
                    
                    $Dogs = $appli->getChienParUserId($_SESSION['userId']);
                    
                    
                    foreach($Dogs as $Dog){
                        
                    echo '<div class="col-md-6 mb-5">
                            <a href="#"><img src="'.$Dog->getPhoto().'" class="img-thumbnail" width="400px" height="400px"></a>
                            '.$Dog->getNom().'
                            </div>';

                    }
                ?>
                </div>
            </div><!--fin de first container-->

           
       

        <!-- footer -->

        <div class="footer" padding-top =200px>
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
                ©Realise 2018:
                Cr&eacute;er par Rana et Joris
            </div>
        </div>


        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    </body>

</html>