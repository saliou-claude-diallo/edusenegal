<?php

try {
    $db = new PDO("mysql:host=localhost; dbname=ecole", "root", "");

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



function ajouteradministrateur($nom, $prenom, $adresse, $email, $mdp, $telephone){
    global $db;
    try {
       $q = $db->prepare("INSERT INTO administrateur VALUES(NULL, :nom, :prenom, :adresse, :email, :mdp, :telephone)");
       return $q->execute([
        "nom"=>$nom,
        "prenom"=>$prenom,
        "adresse"=>$adresse,
        "email"=>$email,
        "mdp"=>$mdp,
        "telephone"=>$telephone,
       
       
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
     $q = $db->prepare("SELECT * FROM administrateur WHERE email = :email");
      $q->execute(["email"=>$email
    ]);
  
     return $q->fetch(PDO::FETCH_OBJ);
   } catch (PDOException $th) {
       die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
    }
}


