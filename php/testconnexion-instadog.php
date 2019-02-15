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
var_dump ($profileCgetenregistre("saoudjarwa@gmail.com" ,"saoud");

//tester le functiogetenregistre("saoudjarwa@gmail.com" ,"saoud");chien 
//اختبار قغالية تابgetenregistre("saoudjarwa@gmail.com" ,"saoud"); رقم الكلب الخاص
$article=$appli->gegetenregistre("saoudjarwa@gmail.com" ,"saoud");
var_dump($article);getenregistre("saoudjarwa@gmail.com" ,"saoud");

//tester le function obtenir information commentaire d'article
//اختبار قغالية تابع الحصول على معلومات التعليقات الخاصة بمقالة معينة
$commentaire=$appli->getCommentParArticle(1);
var_dump($commentaire);


//tester le function insere un nouveau user
//اختبار قغالية تابع الحصول على معلومات مستخدم جديد 
$nouveaUser=$appli->inseretUser("jarwa","majd","majdjarwa","majdjarwa@gmail.com");
var_dump($nouveaUser);


//tester le function insere un nouveau user
//اختبار قغالية تابع الحصول على معلومات مستخدم جديد 
$nouveauChien=$appli->insertChien(4,"loup","americe",3,"Roxi","Dogzer","okoko");



//tester le function insere un nouveau user
//اختبار قغالية تابع الحصول على معلومات مستخدم جديد 
$nouveauArticle=$appli->insertArticle("2", "lolo est un chien tres calm", "https://static.toutoupourlechien.com/2018/03/chien-loup-tcheque-300x200.jpg","2018-02-03");

$user=$appli->getenregistre("saoudjarwa@gmail.com" ,"saoud");
echo $user->email;
*/
$pass=$appli->getpassword("1234");
var_dump($pass);
?>