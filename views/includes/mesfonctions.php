<?php

function setmessage($content, $type="success"){
    if($content){
        $_SESSION["msg"]["content"]= $content;
        $_SESSION["msg"]["type"]= $type;
    }

}
function saveInputData(){
    if(isset($_POST)){
        foreach($_POST as $name => $valeur){
            $_SESSION["input"][$name] = $valeur;
        }
    }
}

    function getInput($name){
        return isset($_SESSION["input"][$name]) ? $_SESSION["input"][$name] :" "; 
    }


    function clearInputData(){
        if(isset($_SESSION["input"])){
            unset($_SESSION["input"]);
        }
    }
    
