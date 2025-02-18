<?php
$url = "https://www.ninoiptv.com";
$ninoiptv = file_get_contents($url);
$nino = explode("entry-title-link",$ninoiptv);
print(count($nino));
for($i=1;$i<count($nino);$i++)
  {
    $ninoUrl = explode("'",$nino[$i]);
    $pageUrl = $ninoUrl[2];
    $ninoPage = file_get_contents($pageUrl);
    print($ninoPage);
  }
?>
