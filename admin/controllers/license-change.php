<?php

defined('APP_NAME') or die(header('HTTP/1.0 403 Forbidden'));

/*
 * @author Enbiit
 * @name: EnSite - Website Analyzer
 * @copyright � Enbiit.com
 *
 */


$pageTitle = 'Domain License';
$subTitle = 'License Change';
$fullLayout = 1; $footerAdd = false;

//Domain License Info
$jsonData = simpleCurlGET('http://api.Enbiit.com/tweb/info.php?link='.createLink('',true).'&code='.$item_purchase_code);
$licArr = json_decode($jsonData,true);

?>