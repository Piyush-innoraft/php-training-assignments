<?php
  require '/var/www/abc~/vendor/autoload.php';
  use GuzzleHttp\Client;
  use GuzzleHttp\Psr7\Request;
// enter base url if needed
$url = "https://api.linkedin.com/v2/me"; 
$headers = array('Authorization' => 'Bearer AQVQcWHTl_Ty0BAYvt7P92TkRZB31sWBRT9pz1Ti6gDMT0UM0oSkhxfvQlnHoSnqjHHoVx47L1Yeqlhte6vfs7y08ZB_RTrJ5miFgaCk-45Nlgy3U2V2408UHOz5BYwceIgY33eRqmAIP0_wUapP6Em5To-Din0MC2rbHB16CbmExMIrwnxRkwktJh3AUIWK3YxvQnUXCjC1NZG4WBkc3R2cPnE-2a8PBX9tbURNiC3ejyehMVFt1DJlSA3vjT39_gvWlh1gBUibv1nGEusjvei_fL0z_X6xwalQk32r4RfelYeHK-EJ73ff2LcXDdLFH1e6tkedBgHjnzjUclt9f1-na6aYyQ');

$client = new Client($url, array(
    "request.options" => array(
       "headers" => $headers
    )
));