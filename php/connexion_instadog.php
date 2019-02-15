<?php
///DEclaration de la class
class Connexion {
    private $connexion;

    public function __construct() {
        $param_hote="localhost";
        $param_port="3306";
        $param_nom_bd="InstaDog";
        $param_utilisateur="adminInstaDog";
        $param_mot_passe="Inst@D0g";

        // pour tester s'il y a des fautes
        try {
            $this->connexion = new PDO (
             'mysql:host='.$param_hote. // nom de chemin de mon base de données, si on ne utilise pas my-sql on mit un autre mots place my_sql
             ';dbname='.$param_nom_bd,$param_utilisateur,$param_mot_passe);
        } catch (Exception $e){
            echo "Erreur:" .$e->getMessage().'<br/>';
            echo 'N°: ' .$e->getCode();
        }  
    }

        //créer un function pourobtenir d'information de user par id de user
        //انشاء تابع الحصول على معلومات المستخدم بواسطة رقمه الخاص
        function getUserParId($id){
            $requete_prepare=$this->connexion->prepare(
                "SELECT * 
                FROM Profile_User
                WHERE userId = :id");
            $requete_prepare->execute(array(":id"=>$id));
            $userProfile=$requete_prepare->fetchObject("User");
            return $userProfile;
        }

        //créer un function pour obtenir d'information de chien par id de chien
        //انشاء تابع الحصول على معلومات الكلب بواسطة رقمه الخاص
        function getChienParId($id){
            $requete_prepare=$this->connexion->prepare(
                "SELECT * 
                FROM Chien
                WHERE getenregistrechienId = :id");
             $requete_prepare->execute(array(":id"=>$id));
            $chienProfile=$requete_prepare->fetchObject("Chien");
            return $chienProfile;
        }

        //créer un function pourobtenir d'information de chien par id de user
        //انشاء تابع الحصول على معلومات الكلب بواسطة رقم المستخدم الخاص
        function getChienParUserId($id){
            $requete_prepare=$this->connexion->prepare(
                "SELECT * 
                FROM Chien 
                WHERE userId =:id");
            $requete_prepare->execute(array(":id"=>$id));
            $uerChienProfile=$requete_prepare->fetchObject("Chien");
            return $userChienProfile;
        }

        //créer un function pourobtenir d'information de article par id de chien
        //انشاء تابع الحصول على معلومات المقالة بواسطة رقم الكلب الخاص
        function getArticleParIdChien($id){
            $requete_prepare=$this->connexion->prepare(
                "SELECT *
                FROM Article
                where chienId = :id");
            $requete_prepare->execute(array(":id"=>$id));
            $articleDeChien=$requete_prepare->fetchObject("Article");
            return $articleDeChien;
        }
         
        //créer un function pour obtenir d'information de tous les chien 
        //انشاء تابع الحصول على معلومات كل الكلاب 
        function getAllChien(){
            $requete_prepare=$this->connexion->prepare(
                "SELECT * 
                FROM chien");
            $requete_prepare->execute();
            $tousChien=$requete_prepare->fetchAll(PDO :: FETCH_CLASS ,"Chien");
            return $tousChien;
        }
         

        //créer un function pour obtenir d'information de commentaire 
                //انشاء تابع الحصول على معلومات المقالات
        function getCommentParArticle($id){
            $requete_prepare=$this->connexion->prepare(
                "SELECT *
                FROM Commentaire
                Where userId = :id");
            $requete_prepare->execute(array(":id"=>$id));
            $commentArticle=$requete_prepare->fetchObject("Commentaire");

            }
         
        function inseretUser($nom, $prenom ,$email , $pwd){
            try{ $requete_prepare=$this->connexion->prepare(
                "INSERT INTO Profile_User(nom, prenom, email, pwd)
                VALUE (:nom, :prenom, :email, :pwd)");
            $requete_prepare->execute(array("nom"=>$nom,"prenom"=>$prenom,"email"=>$email,"pwd"=>$pwd));
        }catch (Exception $bb){
            echo "Erreur:" .$bb->getMessage().'<br/>';
            echo 'N°: ' .$bb->getCode();
            return false;
        }

        
        }

         // function pgetenregistrerer les information dans le tableau chien
         //تابع ادخال getenregistreجدول الكلب
        function insertChien($userId, $nom, $race, $age, $surnom, $elevage, $photo){
            $requete_prepare=$this->connexion->prepare(
                "INSERT INTO Chien(userId, nom, race, age, surnom, elevage, photo) VALUE (:userId, :nom, :race, :age, :surnom, :elevage, :photo)");
            $requete_prepare->execute(array("userId"=>$userId, "nom"=>$nom, "race"=>$race, "age"=>$age,"surnom"=>$surnom, "elevage"=>$elevage,"photo"=>$photo));
            var_dump($requete_prepare->errorInfo());
                return true;
        }

        // function pour insérer les information dans le tableau artcle
         //تابع ادخال معلومات جدول المقالة
        function insertArticle($chienId, $message, $photo, $dateParution){
            $requete_prepare=$this->connexion->prepare("INSERT INTO Article (chienId, message, photo, dateParution) VALUE (:chienId, :message, :photo, :dateParution)");
            $requete_prepare->execute(array("chienId"=>$chienId, "message"=>$message, "photo"=>$photo, "dateParution"=>$dateParution));
             var_dump($requete_prepare->errorInfo());
                return true;
        }

        //function pour login user by Email
        function getenregistre($email){
           $requete_prepare=$this->connexion->prepare(
                "SELECT *  FROM Profile_User
                 WHERE email = :email");
            $requete_prepare->execute(array("email"=>$email));
            $login=$requete_prepare->fetchObject("User");
            return $login;
        
        } 

}
       
 


    class User {
        private $userId;
        private $prenom;
        private $nom;
        private $email;
        private $pwd;
        
    
        public function __set($nom, $value){}
        public function getUserId(){return $this->userId;}
        public function getPrenom(){return $this->prenom;}
        public function getNom(){return $this->nom;}
        public function getEmail(){return $this->email;}
        public function getPwd(){return $this->pwd;}
    }
    
    class Chien {
        private $chienId;
        private $nom;
        private $race;
        private $age;
        private $surnom;
        private $elevage;
        private $photo;
        
        public function __set($nom, $value) {}
        public function getChienId(){return $this->chienId;}
        public function getNom(){return $this->nom;}
        public function getRace(){return $this->race;}
        public function getAge(){return $this->age;}
        public function getSurnom(){return $this->surnom;}
        public function getElevage(){return $this->$elevage;}
        public function getPhoto(){return $this->$photo;}
    }

    class Article {
        private $articleId;
        private $message;
        private $photo;
        private $dateParution;

        public function __set($nom, $value){}
        public function getArticleId(){return $this->articleId;}
        public function getMessage(){return $this->message;}
        public function getPhoto(){return $this->photo;}
        public function getDateParution(){return $this->dateParution;}
    }
     class Commentaire{
         private $id;
         private $login;
         private $texte;
         private $date;

         public function __set($nom, $value){}
         public function getid(){return $this->id;}
         public function getLogin(){return $this->login;}
         public function getTexte(){return $this->texte;}
         public function getDate(){return $this->date;}
     }

?>