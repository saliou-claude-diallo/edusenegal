<?php

try {
    $db = new PDO("mysql:host=localhost; dbname=edusenegal", "root", "");

} catch (PDOException $th) {
   die("ERREUR:".$th->getMessage()."a la ligne".__LINE__);
}

function ajouteretablissement($nom, $adresse, $email, $telephone, $categorie){
    global $db;
    try {
       $q = $db->prepare ("INSERT INTO etablissement VALUES(NULL, :nom, :adresse, :email, :telephone, :categorie)");
       return $q->execute([
        "nom"=>$nom,
        "adresse"=>$adresse,
        "email"=>$email,
        "telephone"=>$telephone,
           "categorie"=>$categorie,
       
       ]);
    } catch (PDOException $th) {
        die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
     }
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
      $q = $db->prepare("SELECT * FROM etablissement ORDER BY nom ASC");
      $q->execute();
      return $q->fetchAll();
  
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


