<?php
   
   if(isset($_POST["inscrire"])){
    extract($_POST);
    if (seConnecter($email)) {
        setmessage("cet email existe deja", "danger");
        saveInputData();
    }else{
        if ($mdp==$mdpconfirm) {
            $mdp = sha1($mdp);//password_hash($mdp, PASSWORD_DEFAULT , ["cost" => 12]);
            if (ajouteradministrateur($nom, $prenom, $adresse, $email, $mdp, $telephone)){
                clearInputData();
           header("location:?page=loginadmin&success");
              
        }else{
            setmessage("erreur de creation de compte", "danger");
            saveInputData();
        }
    }else{
        setmessage("les deux mots de passes ne sont pas identiques", "danger"); 
        saveInputData();
    }
    }
    }
     require_once("views/includes/entete.php"); 
    require_once("views/registeradmin.php"); 
      require_once("views/includes/pied.php"); 
  



     // connexon a la bases de donnees


// if(isset($_POST["inscrire"])){
//     extract($_POST);
//     if (ajouteretablissement($nom, $adresse, $email, $telephone, $categorie)) {
//         // header("location:?page=register");
//     }
// }




 
 //  connexon a la bases de donnees

    

   

   


 
    




         
      