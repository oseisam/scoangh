<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 14-Jun-17
 * Time: 5:01 AM
 */

if ($_SERVER['REQUEST_METHOD']=="GET"){

    if (empty($_REQUEST['user'])){
        header("location: index.php");
    }else{
        switch ($_GET['user']){
            case "home";
                include_once "config/website.config.php";
                $page->news="website/views/news.update.php";
                $page->programs="website/views/programs.php";
                $page->project="website/views/project.php";
                echo include_once "website/home.php";
                break;


            default:
                include_once "config/website.config.php";
                $page->news="website/views/news.update.php";
                $page->programs="website/views/programs.php";
                $page->project="website/views/project.php";
                include_once "website/home.php";
                break;
        }
    }
}else{
    session_destroy();
    include_once "config/website.config.php";
    $page->news="website/views/news.update.php";
    $page->programs="website/views/programs.php";
    $page->project="website/views/project.php";
    include_once "website/template/home.php";
}

