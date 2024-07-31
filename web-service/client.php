<?php
 
require_once('lib/nusoap.php');

// ini harus ditambahkan
$client=new nusoap_client('http://192.168.10.3/php-webservices/server.php?wsdl', 'wsdl',true);

 
// dua bilangan yang akan dijumlahkan
$bil1 = 25;
$bil2 = 10;
 
// instansiasi obyek untuk class nusoap client
// $client = new nusoap_client('http://nomor_ip_komputerB/../server.php');


// proses call method 'jumlahkan' di script server.php yang ada di komputer B

// variabel tidak boleh sama 
$result = $client->call('jumlahkan', array('x' => $bil1, 'y' => $bil2));

// proses call method 'kurangi' di script server.php yang ada di komputer B
$resultes = $client->call('kurang', array('a' => $bil1, 'b' => $bil2));


if($client->fault){
    echo 'Fault';
    print_r($result);
}else{
    
    $err=$client->getError();
    if($err){
        echo 'Gagal   '.$err;
    }else{
        echo "<p>Hasil penjumlahan ".$bil1." dan ".$bil2." adalah ".$result."</p>";
        echo "<p>Hasil pengurangan ".$bil1." dan ".$bil2." adalah ".$resultes."</p>";        
    }
}





?>