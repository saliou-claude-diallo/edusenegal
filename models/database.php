<?php

try {
    $db = new PDO("mysql:host=localhost; dbname=edusenegal", "root", "");

} catch (PDOException $th) {
   die("ERREUR:".$th->getMessage()."a la ligne".__LINE__);
}

function ajoutertypeetablissement($nom, $icon, $image){
   global $db;
   try {
      $q = $db->prepare ("INSERT INTO typeecole VALUES(NULL, :nom, :icon, :image)");
      return $q->execute([
       "nom"=>$nom,
       "icon"=>$icon,
       "image"=>$image,
      ]);
   } catch (PDOException $th) {
       die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
    }
}
function ajouterTypeFormation($nom, $icon, $image){
   global $db;
   try {
      $q = $db->prepare ("INSERT INTO typeformation VALUES(NULL, :nom, :icon, :image)");
      return $q->execute([
       "nom"=>$nom,
       "icon"=>$icon,
       "image"=>$image,
      ]);
   } catch (PDOException $th) {
       die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
    }
}

function ajoutEtablissement($nom, $lieu, $email, $telephone, $description, $idtype, $image){
   global $db;
   try {
      $q = $db->prepare ("INSERT INTO etablissements VALUES(NULL, :nom, :lieu, :email, :telephone, :description, :idtype, :image)");
      return $q->execute([
       "nom"=>$nom,
       "lieu"=>$lieu,
       "email"=>$email,
       "telephone"=>$telephone,
       "image"=>$image,
       "description"=>$description,
       "idtype"=>$idtype,
       
      ]);
   } catch (PDOException $th) {
       die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
    }
}
function ajoutFormation($nom, $lieu, $montant, $mensualite, $duree, $description,  $image, $idtype){
   global $db;
   try {
      $q = $db->prepare ("INSERT INTO formations VALUES(NULL, :nom, :lieu, :montant, :mensualite, :duree, :description,  :image, :idtype)");
      return $q->execute([
       "nom"=>$nom,
       "lieu"=>$lieu,
       "montant"=>$montant,
       "mensualite"=>$mensualite,
       "duree"=>$duree,
       "description"=>$description,
       "image"=>$image,
       "idtype"=>$idtype,
       
      ]);
   } catch (PDOException $th) {
       die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
    }
}



function recuperertouslestypesetablissements(){
   global $db;
   try {
      $q = $db->prepare("SELECT * FROM typeecole ORDER BY nom ASC");
      $q->execute();
      return $q->fetchAll(PDO::FETCH_OBJ);
  
   }catch (PDOException $th) {
      die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
   }
}
function recupererTypeFormation(){
   global $db;
   try {
      $q = $db->prepare("SELECT * FROM typeformation ORDER BY nom ASC");
      $q->execute();
      return $q->fetchAll(PDO::FETCH_OBJ);
  
   }catch (PDOException $th) {
      die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
   }
}
function ajouterUtilisateur($nom, $prenom, $adresse, $email, $mdp, $telephone, $role){
    global $db;
    try {
       $q = $db->prepare("INSERT INTO users VALUES(NULL, :prenom, :nom, :adresse, :email, :tel, :mdp, :role)");
       return $q->execute([
        "nom"=>$nom,
        "prenom"=>$prenom,
        "adresse"=>$adresse,
        "email"=>$email,
        "mdp"=>$mdp,
        "tel"=>$telephone,
        "role"=>$role,
       ]);
    } catch (PDOException $th) {
        die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
     }
}
// function ajouteruser($nom, $prenom, $adresse, $email, $telephone): viod{
//     global $db;
//     try {
//        $q = $db->prepare("INSERT INTO user VALUES(NULL, :nom, :prenom, :adresse, :email, :telephone)");
//        return $q->execute([
//         "nom"=>$nom,
//         "prenom"=>$prenom,
//         "adresse"=>$adresse,
//         "email"=>$email,
//         "telephone"=>$telephone,
       
//        ]);
//     } catch (PDOException $th) {
//         die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
//      }
// }

function recuperertouslesetablissements(){
   global $db;
   try {
      $q = $db->prepare("SELECT * FROM etablissements ORDER BY nom ASC");
      $q->execute();
      return $q->fetchAll(PDO::FETCH_OBJ);
  
   }catch (PDOException $th) {
      die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
   }
   }


function recupererTousFormations(){
   global $db;
   try {
      $q = $db->prepare("SELECT * FROM formations ORDER BY nom ASC");
      $q->execute();
      return $q->fetchAll(PDO::FETCH_OBJ);
  
   }catch (PDOException $th) {
      die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
   }
   }
function recupererTypeFormations(){
   global $db;
   try {
      $q = $db->prepare("SELECT * FROM formations ORDER BY nom ASC");
      $q->execute();
      return $q->fetchAll(PDO::FETCH_OBJ);
  
   }catch (PDOException $th) {
      die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
   }
   }





function seConnecter($email){
   global $db;
   try {
     $q = $db->prepare("SELECT * FROM users WHERE email = :email");
      $q->execute(["email"=>$email]);
  
     return $q->fetch(PDO::FETCH_OBJ);
   } catch (PDOException $th) {
       die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
    }
}


