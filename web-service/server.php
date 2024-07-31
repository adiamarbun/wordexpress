<?php 
 
// mengincludekan file berisi class nusoap
// require_once('lib/nusoap.php');
require_once 'lib/nusoap.php';


// instansiasi class soap untuk server

$server = new nusoap_server();
// $server = new soap_server;
   
$server -> configureWSDL('server_wsdl','urn:server_wsdl'); // Initialize WSDL support, utk mmbuat wsdl 


// meregistrasi 'method' untuk proses penjumlahan dengan nama 'jumlahkan'
$server->register('jumlahkan',
    array('x'=> 'xsd:string', 'y' => 'xsd:string'),
    array('return' => 'xsd:string')
);

$server->register('kurang',
    array('x'=> 'xsd:string', 'y' => 'xsd:string'),
    array('return' => 'xsd:string')
);

// harus kurang bukan kurangi
$server->register('kurang'); 
 
// detil isi method 'jumlahkan'
function jumlahkan($x, $y) {
    return $x + $y;
}

// detil isi method 'kurangi'
function kurang($x, $y) {
    return $a - $b;
}

 
// memberikan response service
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);

// harus mnyertakan ini
$hasil = json_decode($server);
echo $hasil;


$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA: '';
$server->service(file_get_contents("php://input"));
$hasil = json_decode($server);
echo $hasil;
?>