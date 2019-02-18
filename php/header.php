
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.min.css" rel="stylesheet">
        <!--  mon ficher css -->
        <link href ="Instadog.css" rel="stylesheet"> 
             
        <title>
            <?php 
                if(isset($title) && !empty($title)) { 
                echo $title;} 
                else { echo "Bienvenue sur Instadog"; } 
            ?>
        </title>

    </head>
    
    <body>
           <?php session_start() ?>         
     <!--Navbar-->

        <nav class="navbar navbar-light navbar-1 white">
            <!-- Collapse button -->
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-default my-2 my-sm-0" type="submit">chercher</button>
            </form>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item "><a class="nav-link" href="login_user.php">Login <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item "><a class="nav-link" href="instadog_gallery.php">Gallerie <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="article.php">Articles</a></li>
                    <li class="nav-item "><a class="nav-link" href="NouvelArticle.php">Ajouter un article <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item "><a class="nav-link" href="nouveau-chien.php">Ajouter un chien  <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">log out</a></li>
                </ul>
            </div>
        </nav>

          
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    </body>     


</html>