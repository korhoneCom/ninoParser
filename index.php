<?php
$url = "https://www.ninoiptv.com";
$ninoiptv = file_get_contents($url);
$nino = explode("entry-title-link",$ninoiptv);
print($nino[1]);
for($i=1;$i<count($nino);$i++)
  {
    $ninoUrl = explode("\",$nino[$i]);
  }
?>
