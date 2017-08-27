<?php
$url = "http://www.imdb.com/chart/toptv/?ref_=nv_tvv_250_3";
$output = file_get_contents($url);
echo $output;
?>