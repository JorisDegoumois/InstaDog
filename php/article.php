<?php 
session_start();
 require ("connexion_instadog.php");      
$appli = new Connexion();
?>

<!DOCTYPE html>
<html >

    <head>
        
     </head>        

    <body>
    <div data-spy="scroll" data-target="#scrollspy-nav" data-offset="0" style="overflow: scroll">
        <div class="container" style="padding-top:70px;padding-bottom:70px">
            <div class="card text-center">
                <div class="card-header">
                <?php
                  //  $_SESSION['chienId'];

                    $_SESSIOn['articleId']=$appli->getArticleParIdChien($_SESSION['chienId']);

                    echo $_SESSION['chienId'];
                    echo $_SESSION['chienphoto'];
                   echo  $_SESSION['surnom'];
                    //$chien = $appli->getChienParId($_SESSION['chienId']);
                   // $chien->getSurnom();'</div>';

                    //commence l'article
                    foreach ($articles as $article){
                    echo '<div class="card-body">
                    <h3'.$article->getMessage();
                    '<img src=""'.$article->getPhoto();
                        $article->getDateParution().'>';
                    } var_dump($_SESSION['articleId']);
                ?>               
                    

</body>

</html>