

    <head>
       <?php include ('header.php')?>  
    </head>
  
    <body>  
      <div data-spy="scroll" data-target="#scrollspy-nav" data-offset="0" style="overflow: scroll">
        <div class="container">   
            <div class="row">    
                <?php  
                    require ("connexion_instadog.php");
                    $appli= new Connexion ;

              
                    
                    echo '<div class="container">   
                    <div class="row">';
                   echo '<h1 class="text-center">'.$_SESSION['getPrenom'] .$_SESSION['getNom'].'<h1>';

           
                    $Dogs = $appli->getChienParUserId($_SESSION['userId']);
                    echo'</div> </div>';
                    foreach($Dogs as $Dog){
 
                    echo '<div class="col-md-6 mb-5">
                           <h3>'.$Dog->getSurnom().'</h3>'; 
                    
                        echo'<a href="profile-chien.php"><img src="'.$Dog->getPhoto().'" class="img-thumbnail" width="400px" height="400px"></a></div>';
                         $_SESSION['chienId']=$Dog->getChienId();
                         $_SESSION['chienphoto']=$Dog->getPhoto();
                         $_SESSION['chienage']=$Dog->getAge();
                         $_SESSION['elevage']=$Dog->getElevage();
                         $_SESSION['race']=$Dog->getRace();
                    } 
   
                ?>
                </div>
            </div><!--fin de first container-->

    <footer>
      <?php include 'footer.php';?>
    </footer>

       

    </body>

</html>