
 <?php 
 session_start();
 require_once("models/database.php");
 require_once("views/includes/mesfonctions.php");
 
 
     if (isset($_GET["page"])) {
      switch ($_GET["page"]) {
        case 'about':
            require_once("controllers/aboutcontroller.php");
            break;
        case 'categorie':
            require_once("controllers/categoriecontroller.php");
            break;
        case 'loginadmin':
            require_once("controllers/loginadmincontroller.php");
            break;
            case 'registeradmin':
                require_once("controllers/registeradmincontroller.php");
                break;
        case 'primaire':
            require_once("controllers/primairecontroller.php");
            break;
        case 'college':
            require_once("controllers/collegecontroller.php");
            break;
        case 'universite':
            require_once("controllers/universitecontroller.php");
            break;
        case 'cdf':
            require_once("controllers/cdfcontroller.php");
            break;
       
            
        case 'registeradmin':
            require_once("controllers/registeradmincontroller.php");
            break;
        case 'inscriptionuser':
            require_once("controllers/inscriptionusercontroller.php");
            break;
        case 'connexionuser':
            require_once("controllers/connexionusercontroller.php");
            break;
        
        default:
        require_once("controllers/homecontroller.php");
            break;
      }
     }else{
        require_once("controllers/homecontroller.php");
     }




     

       
