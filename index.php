
 <?php 
 session_start();
 require_once("models/database.php");
 require_once("views/includes/mesfonctions.php");
 
 $typesecoles = recuperertouslestypesetablissements();
 
     if (isset($_GET["page"])) {
      switch ($_GET["page"]) {
        case 'formation':
            require_once("controllers/formationcontroller.php");
            break;
        case 'formations':
            require_once("controllers/formationscontroller.php");
            break;
        case 'ecoles':
            require_once("controllers/ecolescontroller.php");
            break;   
        case 'login':
            require_once("controllers/loginadmincontroller.php");
            break;
            case 'registeradmin':
                require_once("controllers/registeradmincontroller.php");
                break;
        case 'logout':
            require_once("controllers/logoutcontroller.php");
            break;
        case 'centres':
            require_once("controllers/centrescontroller.php");
            break;
        case 'details_formation':
            require_once("controllers/detailsformationcontroller.php");
            break; 
        case 'type':
            require_once("controllers/typecontroller.php");
            break;
        case 'contact':
            require_once("controllers/contactcontroller.php");
            break;
<<<<<<< HEAD
        
=======
>>>>>>> main
        
        case 'etablissement':
            require_once("controllers/etablissementcontroller.php");
            break;
       
        
         case 'typeFormation':
             require_once("controllers/typeFormationcontroller.php");
             break;
       
        
        
        
        
        default:
        require_once("controllers/homecontroller.php");
            break;
      }
     }else{
        require_once("controllers/homecontroller.php");
     }




     

       
