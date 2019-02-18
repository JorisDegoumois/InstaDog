<?php session_start();?> <!--Start the session-->
<!DOCTYPE html>
<html>
    <head>
        <?php include ('header.php');?>
    </head>
    
    <body> 
        <div class="container">   
            <div class="row">   
                <?php
                    require ("connexion_instadog.php");
                    $appli= new Connexion ;
                    


                    echo '<div class="container"width =50%>
                 
                    <div class="card-header">'.$_SESSION['surnom'].'</div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">';
                        echo  '<img class="img-thumbnail " src="'.$_SESSION['chienphoto'].'" width="400px" height="400px">
                         <h3 class="card-title"> <strong>Age: '.$_SESSION['chienage'].'</strong></h3 ><br>
                         <h3 class="card-title"> <strong>Elevage: '.$_SESSION['elevage'].'</strong></h3 ><br>
                    </div> 
                    <a href="nouvelarticle.php" class="btn btn-primary">Ajouter un article</a>
                    </div>';


               
                    $appli->getArticleParIdChien($_SESSION['chienId']);

                  $articles=$appli->getArticleParIdChien($_SESSION['chienId']);

                        foreach ($articles as $article){
                            $_SESSION['articleId']=$article->getArticleId();
                            echo '<div class="container">
                            <div class="card">';
                            if ($_SESSION['userId'] && $_SESSION['userEmail']){
                            echo '<a href="profile-chien.php"><img src="'.$article->getPhoto().'" class="img-thumbnail" width="80px" height="80px"></a>
                            '.$article->getMessage();
                        } else echo "Il faut enscrire d/'/abord ";
                            '</div>';
                        } 
                        '</div>';
                    echo $_SESSION['chienId'];
                    echo $_SESSION['chienphoto'];
                    echo  $_SESSION['surnom'];
                    echo $_SESSION['articleId']
 
                ?>

    <footer> <?php include_once 'footer.php';?> </footer>

    </body>

</html>