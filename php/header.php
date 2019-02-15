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

    <?php echo $_SESSION['nom']; echo $_SESSION['prenom'];?>
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
                <a class="nav-link" href="login_user.php">login <span class="sr-only">(current)</span></a>
            </li>        
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
    
    </nav>
  <!--/.Navbar-->
</head>  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>




</html>