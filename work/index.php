<?php


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://euw.api.pvp.net/api/lol/euw/v1.2/champion?api_key=b4a760cb-38ff-4d00-9d31-157a8f92d6e7'
  
));

$resp = curl_exec($curl);

curl_close($curl);

print_r($resp);

$fp = fopen("base.json", "w+");
fwrite($fp, $resp);
fclose($fp);
/*
$server= "mongodb://develvad:ng2admin@ds035703.mongolab.com:35703/topgank";

$opc = array("connectTimeoutMS" => 3000);


$datos = new  MongoClient($server, $opc);
$coleccion = $datos->topgank->campeones;
$coleccion->insert($resp);
*/