<?php

/*
 * @author Enbiit
 * @name: A to Z SEO Tools - PHP Script
 
 *
 */

function backlinkCount($site, $con){

    $result = mysqli_query($con,"SELECT moz_access_id,moz_secret_key FROM pr24 where id=1");
    $row = mysqli_fetch_assoc($result);

    $accessID = $row['moz_access_id'];
    $secretKey =  $row['moz_secret_key'];

    $expires = time() + 300;
    $SignInStr = $accessID. "\n" .$expires;
    $binarySignature = hash_hmac('sha1', $SignInStr, $secretKey, true);
    $SafeSignature = urlencode(base64_encode($binarySignature));
    $objURL = "http://".$site;
    $cols = 2048;
    $flags = "103079215108";
    $reqUrl = "http://lsapi.seomoz.com/linkscape/url-metrics/".urlencode($objURL)."?Cols=".$cols."&AccessID=".$accessID."&Expires=".$expires."&Signature=".$SafeSignature;
    $opts = array(
        CURLOPT_RETURNTRANSFER => true
    );
    $curlhandle = curl_init($reqUrl);
    curl_setopt_array($curlhandle, $opts);
    $content = curl_exec($curlhandle);
    curl_close($curlhandle);
    $resObj = json_decode($content);
    return $resObj->{'uid'};
}
