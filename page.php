<?php


if ($_SERVER['REQUEST_METHOD']=="GET"){

    if (empty($_REQUEST['user'])){
        header("location: index.php");
    }else{
        switch ($_GET['user']){
            case "home";
                include_once "config/website.config.php";
              
                echo include_once "home.php";
                break;
			case "about.us";
				include_once "config/website.config.php";
				echo include_once "default.php";
                break;

            default:
                include_once "config/website.config.php";
               
                include_once "home.php";
                break;
        }
    }
}else{
    session_destroy();
    include_once "config/website.config.php";
   
    include_once "home.php";
}

