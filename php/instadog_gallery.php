 
 

  
       <?php include ('header.php') ;
            require ("connexion_instadog.php");
            $appli= new Connexion ;
        ?>   
 

 
        <div class="text-center">
            <h1>Gallerie de toutous</h1>
            <?php
            
            
            $chiens=$appli->getAllChien();
            echo'<div class="row">
            <div class="col-md-12">
              <div id="mdb-lightbox-ui"></div>
               <div class="mdb-lightbox no-margin">
                <figure class="col-md-4">';
                foreach ($chiens as $chien){
                echo '<a class="black-text" href="profile-chien.php"></a>';
                echo '<img src='.$chien->getPhoto().'class="img-fluid">';
                echo '<h3 class="text-center my-3">'.$chien->getSurnom().'</h3></a> </figure>';
                }


            ?>
           
   
 
   
      <?php include 'footer.php';?>
 

       

 