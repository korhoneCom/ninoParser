<?php
$url = "https://www.ninoiptv.com";
$ninoiptv = file_get_contents($url);
$nino = explode("entry-title-link",$ninoiptv);
print(count($nino));
for($i=1;$i<count($nino);$i++)
  {
    $ninoUrl = explode("\"",$nino[$i]);
    print_r($ninoUrl);
  }
?>
