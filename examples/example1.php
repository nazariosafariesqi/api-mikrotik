<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('192.168.100.53', 'Xiaomi', 'nazario123')) {

   $interface = $API->comm('/interface/print');
   $result = json_encode($interface);
   echo $result;

   $API->disconnect();

}

?>
