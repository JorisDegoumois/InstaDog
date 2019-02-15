<?php 
session_start();
require ("connexion_instadog.php");
?>
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
        <link href ="Instadog.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-light navbar-1 white">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
            aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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

</nav>

<?php
//$id  = $Chiem->getUserId();
 if (isset($_POST['submit']))
    {
        $_SESSION['iduser']  =$id;

        $message=$_POST['message'];
        $dateParution=$_POST['dateParution'];
       }

   
  //uploder un photo
   if(isset($_FILES['image'])){
     $errors= array();
     $file_name = $_FILES['image']['name'];
     $file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['image']['tmp_name'];
     $file_type=$_FILES['image']['type'];
     //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
     //$expensions= array("jpeg","jpg","png");
   
   /* if(in_array($file_ext,$expensions)=== false){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
   }
    */
   if($file_size > 2097152){
      $errors[]='File size must be excately 2 MB';
   }
   
   if(empty($errors)==true){
      move_uploaded_file($file_tmp,"images/".$file_name);
      echo "Success";
   }else{
      print_r($errors);
   }
}

?>

  

        <div class="container" method="post ">
            <!-- inserer un photo -->

            <div class="input-group">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" />
                <input type="submit"/>
            </form>
                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">

                </div>
            </div>

            <form action="/action_page.php">
                <div class="form-group">
                    <textarea class="form-control" rows="8" id="comment" name="text"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Ajouter</button>
            
            </form>
        </div>

  
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
                ©Realise 2018:
                Cr&eacute;er par Rana et Joris
            </div>
        </div>

        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/js/mdb.min.js"></script>
    </body>

</html>