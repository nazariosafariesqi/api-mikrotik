<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('192.168.56.1', 'Xiaomi', 'nazario123')) {

   $API->write('/interface/wireless/registration-table/print',false);
   $API->write('=stats=');
 
   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);

   print_r($ARRAY);

   $API->disconnect();

}

?>
