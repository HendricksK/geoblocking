<?php
include_once DIRNAME(__FILE__) . 'footer.php';
$url = "http://www.imdb.com/chart/toptv/?ref_=nv_tvv_250_3";
$output = file_get_contents($url);
debug_to_console($output);

function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

}
?>