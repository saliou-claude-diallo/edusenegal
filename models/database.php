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
function ajoutFormation($nom, $montant, $mensualite, $duree, $description,  $image, $id_etablissement){
   global $db;
   try {
      $q = $db->prepare ("INSERT INTO formations VALUES(NULL, :nom, :montant, :mensualite, :duree,:image, :description,   :id_etablissement)");
      return $q->execute([
       "nom"=>$nom,
       "montant"=>$montant,
       "mensualite"=>$mensualite,
       "duree"=>$duree,
       "description"=>$description,
       "image"=>$image,
       "id_etablissement"=>$id_etablissement,
       
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

function recupererunetablissement($id){
   global $db;
   try {
      $q = $db->prepare("SELECT  e.id as id, e.image as image, e.nom as nom, t.nom as nomtype, e.email as email, lieu, tel, e.description as description
         FROM etablissements e, typeecole t
          WHERE t.id = e.idtype AND e.id =:id");
      $q->execute(["id" => $id]);
      return $q->fetch(PDO::FETCH_OBJ);
  
   }catch (PDOException $th) {
      die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
   }
}

function recupereruneformation($id){
   global $db;
   try {
      $q = $db->prepare("SELECT  f.id as id, f.image as image, f.nom as nom, montant, mensualite, duree, id_etablissement, e.nom as nomecole, e.email as email, lieu, tel, f.description as description
         FROM formations f, etablissements e
          WHERE e.id = f.id_etablissement AND f.id =:id");
      $q->execute(["id" => $id]);
      return $q->fetch(PDO::FETCH_OBJ);
  
   }catch (PDOException $th) {
      die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
   }
}

function recupererdesformationsparecole($id_etablissement){
   global $db;
   try {
      $q = $db->prepare("SELECT * FROM formations WHERE id_etablissement =:id_etablissement");
      $q->execute(["id_etablissement" => $id_etablissement]);
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
      $q = $db->prepare("SELECT f.id as id,f.image as image, f.nom as nom, lieu, duree, mensualite, montant, f.description as description, e.nom as nomecole 
      FROM formations f, etablissements e
      WHERE f.id_etablissement = e.id
       ORDER BY f.id DESC");
      $q->execute();
      return $q->fetchAll(PDO::FETCH_OBJ);
  
   }catch (PDOException $th) {
      die("ERREUR: ".$th->getMessage()." a la ligne ".__LINE__);
   }
}

function recupererEtablissementParIdType($idtype){
   global $db;
   try {
      $q = $db->prepare("SELECT *FROM etablissements
      WHERE idtype =:idtype");
      $q->execute(["idtype" => $idtype]);
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


