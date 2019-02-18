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
                    
                   <!--  <div class="card-footer text-left">
                        <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.NaV6QRJVyh-M-lHBQ5YSHAHaHW%26pid%3D15.1&f=1" width="35" height="35">
                        <strong>Agn&eacute;s:</strong>
                        tres cute
                    </div>
    
                    <div class="card-footer text-left">
                        <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.Zb5-XDMwL991BL0cXnqj-gHaHa%26pid%3D15.1&f=1" width="35" height="35">
                        <strong>Henry:</strong>
                        elle ressemble beacoup &agrave; 
                    </div>
    
                    <div class="form-group">
                        <label for="comment"></label>
                        <div>
                            <textarea class="form-control" rows="3" id="comment" placeholder="Comment:"></textarea>
                            <button>ajouter </button>
                        </div>
                    </div>

                    </div>
               
                
            </div>
        </div>

            <a href="Nouvel Article(fini).html"><button class="btn btn-info my-4 btn-block"  type="submit">ajouter un article</button></a>
        </div>
     </div>
 -->

</body>

</html>