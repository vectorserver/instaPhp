<?php
/**
 * Created by PhpStorm.
 * User: endi
 * Date: 19.11.18
 * Time: 14:30
 */
//ParseInsta
$url = "https://www.instagram.com/explore/tags/$tag/";
$doc = new DOMDocument();
$doc->loadHTMLFile($url);
$xpath = new DOMXpath($doc);
$sharedData = $xpath->query("//html/body/script[1]")->item(0)->textContent;
var_dump($sharedData);