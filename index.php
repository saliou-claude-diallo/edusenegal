
 <?php 
 session_start();
 require_once("models/database.php");
 require_once("views/includes/mesfonctions.php");
 
 $typesecoles = recuperertouslestypesetablissements();
 
     if (isset($_GET["page"])) {
      switch ($_GET["page"]) {
        case 'about':
            require_once("controllers/aboutcontroller.php");
            break;
        case 'etablissement':
            require_once("controllers/etablissementcontroller.php");
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
        
         
        case 'type':
            require_once("controllers/typecontroller.php");
            break;
        
        
        default:
        require_once("controllers/homecontroller.php");
            break;
      }
     }else{
        require_once("controllers/homecontroller.php");
     }




     

       
