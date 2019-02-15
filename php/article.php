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
   


    <div data-spy="scroll" data-target="#scrollspy-nav" data-offset="0" style="overflow: scroll">
        
        <div class="container" style="padding-top:70px;padding-bottom:70px">
            <div class="card text-center">
                <div class="card-header">
                    <a href="profile-chien.html"><img src="http://www.wallfizz.com/animaux/chien/218-petit-chien-WallFizz.jpg" width="75px" height="75px" ></a>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Malgr&eacute; une m&eacute;t&eacute;o capricieuse, le public &eacute;tait au rendez-vous pour assister aux traditionnelles courses de chiens de tra&icirc;neaux de Saignel&eacute;gier.</h3>
                    <img src="https://www.jurabernois.ch/aquarius/slir/w900/pictures/content/jura_bernois/loisac_fun_chiens1.jpg?cdate=8493"width="250px" height="250px">
                    <h2 > <strong>  Jura :18'000 curieux pour les chiens de tra&icirc;neaux</strong></h2>
                    <p>Plus de 800 chiens, r&eacute;partis dans une petite centaine d'attelages, se sont &eacute;lanc&eacute;s sur les pistes d&egrave;s samedi &agrave; 09h30, avec ensuite un d&eacute;part toutes les deux minutes. Huskys de Sib&eacute;rie, samoy&egrave;des, malamutes d'Alaska, chiens du Groenland ou races crois&eacute;es ont parcouru des distances allant de 8 &agrave; 35 kilom&egrave;tres.
                        La moiti&eacute; des mushers &eacute;taient suisses, l'autre provenait majoritairement de France. Mais certains Allemands, Belges, Hollandais et Italiens &eacute;taient &eacute;galement de la partie. "C'est une proportion plus &eacute;lev&eacute;e que les ann&eacute;es pr&eacute;c&eacute;dentes o&uacute;  il y avait environ 70% de Suisses et 30% d'&eacute;trangers", pr&eacute;cise Toinette Wisard.
                        Les traditionnelles courses ont &eacute;t&eacute; compl&eacute;t&eacute;es cette ann&eacute;e par un parcours d'exhibition de 500 m&egrave;tres. Il s'agit d'une course dont le d&eacute;part se fait en ligne et o&uacute;  les concurrents doivent slalomer entre des obstacles, en l'occurrence des sculptures sur le th&egrave;me de l'hiver. Suite &agrave; un accueil favorable, les organisateurs envisagent de p&eacute;renniser le parcours.
                    </p>
            
                    <div class="card-footer text-left">
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