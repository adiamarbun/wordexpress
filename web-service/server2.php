<?php

require_once('lib/nusoap.php');

$server = new nusoap_server();

$server -> configureWSDL('server_wsdl','urn:server_wsdl');

$server->register('jumlahkan',
    array('x'=> 'xsd:string', 'y' => 'xsd:string'),
    array('return' => 'xsd:string')
);

$server->register('kurang',
    array('x'=> 'xsd:string', 'y' => 'xsd:string'),
    array('return' => 'xsd:string')
);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service(file_get_contents("php://input"));
