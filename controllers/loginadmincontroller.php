<?php



// if (isset($_GET["success"])) {
//    setmessage("compte creer avec succes");
// }


 if(isset($_POST["connecter"])){
     extract($_POST);
     $administrateur = seConnecter($email);
     if($administrateur){
        
     if (password_verify($mdp, $administrateur->mdp)){
      clearInputData();
        
        $_SESSION["user"] = $administrateur;
        if ($administrateur->role == "admin"){
         header("Location:?page=type");
        }else{
         header("Location:?page=home");
        }
       
     }else{
      setmessage("mot de passe incorrect", "danger");
     }
    
 }else{
    setmessage("email introuvable", "danger");
}
saveInputData();
}



require_once("views/includes/entete.php"); 

require_once("views/loginadmin.php");
require_once("views/includes/pied.php");