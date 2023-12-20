<?php
defined('APP_NAME') or die(header('HTTP/1.0 403 Forbidden'));


/*
 * @author Enbiit
 * @name: Rainbow PHP Framework
 * @copyright © 2017 Enbiit.com
 *
 */
 
$pageTitle = 'Shop Addons';
$subTitle = 'Turbo Website Reviewer Addons';
$fullLayout = 1; $footerAdd = true; $footerAddArr = array();

if($pointOut == 'ajax'){
    $query = http_build_query($_GET) . "\n";
    echo getMyData('http://api.Enbiit.com/tweb/shop_addon.php?'.$query);
    die();
}


?>