<?php

require "connexion_instadog.php";
// un objet de class connexion
$appli = new Connexion();
/*
// tester si le connexion russit ou non
if  (is_null($appli)) {
    echo "<br/>CONNEXION FAILED";
} else {
    echo "CONNEXION DE BASE DE DONNEES REUSSIE";
}
echo "<br>";dateParution

// tester ledateParutionser profile
$profileUserdateParution
var_dump ($pdateParution
echo"<br>";

//tester le function obtenir information profile de chien 
//اختبار قغالية تابع الحصول على معلومات الكلب بواسطة رقمه الخاص
$profileChien=$appli->getChienParId(1);
var_dump ($profileChien);
echo "<br>";

//tester le function obtenir information profile de chien 
//اختبار قغالية تابع الحصول على معلومات الكلب بواسطة رقمه الخاص
$profileChienUser=$appli->getChienParUserId(1);
var_dump ($profileChienUser);

//tester le function obtenir information d'article de chien 
//اختبار قغالية تابع الحصول على معلومات المقالة بواسطة رقم الكلب الخاص
$article=$appli->getArticleParIdChien(2);
var_dump($article);

//tester le function obtenir information commentaire d'article
//اختبار قغالية تابع الحصول على معلومات التعليقات الخاصة بمقالة معينة
$commentaire=$appli->getCommentParArticle(1);
var_dump($commentaire);*/


//tester le function insere un nouveau user
//اختبار قغالية تابع الحصول على معلومات مستخدم جديد 
$nouveaUser=$appli->insereUser("jarwa","majd","majdjarwa","majdjarwa@gmail.com");
var_dump($nouveaUser);


//tester le function insere un nouveau user
//اختبار قغالية تابع الحصول على معلومات مستخدم جديد 
$nouveauChien=$appli->inserChien("loup","americe","3","Roxi","Dogzer","data:image/jpeg;base64,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");
var_dump($nouveauChien);



?>