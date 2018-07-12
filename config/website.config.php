<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 13-Jun-17
 * Time: 11:48 PM
 */
if (!isset($_SESSION)){
    session_start();
}

include_once "db/db.conn.php";

//Date and Time zone
date_default_timezone_set("Africa/Accra");

$page=new stdClass();
$page->header ="SCOAN Ghana";
$page->title="SCOAN Ghana";
$page->contenttitle="SCOAN Ghana";
$page->views="include a view page";
$page->url="page.php?user=";

//event image be default
$page->event_image="website/template/images/e2.jpg";

//copyright
$page->copyright="<p>Copyright © 2015 - ".date("Y")." iQuipe Digital Enterprise. All Rights Reserved </p>";

$url="http://localhost/scoangh/";
