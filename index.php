<?php
$url = "https://www.ninoiptv.com";
$ninoiptv = file_get_contents($url);
$nino = explode("entry-title-link",$ninoiptv);
for($i=1;$i<count($nino);$i++)
  {
    $ninoUrl = explode("'",$nino[$i]);
    $pageUrl = $ninoUrl[2];
    $ninoPage = file_get_contents($pageUrl);
    $page = explode("post-body",$ninoPage);
    $urls = explode("http",$page[48]);
    unset($urls[0]);
    print_r($urls);
  }
?>
