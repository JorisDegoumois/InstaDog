<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.min.css" rel="stylesheet">
    <link href ="Instadog.css" rel="stylesheet">
   </head>    

  <?php
 
    require ("connexion_instadog.php");
    $appli = new Connexion ;
    if (isset($_POST['submit']))
    {
        $id=$user->getUserId();
        $nom  = $_POST['nom'];
        $surnom  = $_POST['surnom'];
        $race = $_POST['race'];
        $naissance = $_POST['naissance'];
        $elevage = $_POST['elevage'];
    } 
  ?> 
  <body>
      
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
                    <a class="nav-link" href="instadog_gallery.html">Gallerie <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="nouveau-chien(ter).html">Ajouter un chien  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="google.com"></a>chercher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Instadog_Connexion(termin).html">connexion</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="Instadog_Connexion(termin).html">quitter</a>
            </li>
         </ul>
        <!-- Links -->

    
        </div>
        <!-- Collapsible content -->
    
     </nav>
    <!-- fini navbaer -->     

    <form class="border border-light p-5"method="post">

<html>
 <body>
    <p class="h4 mb-4 text-center">Inscrire Un Nouveau Chien  </p>


      <input type="text" name="nom" class="form-control" placeholder="Nom de cien">

      <input type="text" name="surnom" class="form-control" placeholder="Surnam">

      <input type="text"name="Race"  class="form-control mb-4" placeholder="Race">

      <input type="date"name="naissance"  class="form-control mb-4" placeholder="date de naissance">

      <input type="test" name="elevage" class="form-control mb-4" placeholder="Elevage">
      <!-- inserer un photo -->
      <div class="input-group">

      </body>
</html>
        <?php
        if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $expensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$expensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
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
 <html>
 <body>
    <div class="input-group" >
    <form action="" method="POST" enctype="multipart/form-data">
       <input type="file" name="image" />
       <input type="submit"/>
    </form>
    </div>
 </body>
</html> 
      
     <!--  <form action="upload.php" method="post" enctype="multipar/from-data"> -->
 <!-- <div class="custom-file"> 
 <form action="upload.php" method="post" enctype="multipart/form-data"> 
             <input type="file" class="custom-file-input" name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <input type="submit " name = "submit" value="upload">
           
        </div> 
        </form>

      </div>
       </form>
 -->
      <button class="btn btn-info my-4 btn-block" type="submit">Inserer</button><br><br>
      
  


    <!-- footer -->

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