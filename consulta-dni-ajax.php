<?php


// Datos
$token = 'apis-token-11123.HWPpHtBR7qKgGYUM50TH8JLSs5xkRfh3';
$ruc = '75136511';

// Iniciar llamada a API
$curl = curl_init();

// Buscar ruc sunat
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.apis.net.pe/v2/sunat/ruc?numero=' . $ruc,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Referer: http://apis.net.pe/api-ruc',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// Datos de empresas según padron reducido
$empresa = json_decode($response);
var_dump($empresa);




$dni=$_POST["dni"];


if(strlen($dni)<8 || strlen($dni)>8)
{
    $prueba=1;
}
else{
    
    

   
        $prueba=file_get_contents('https://api.apis.net.pe/v1/dni?numero='.$dni.'');
   
  
}








echo $prueba;

















/*



$dni=$_POST["dni"];


if(strlen($dni)<8 || strlen($dni)>8)
{
    $prueba=1;
}
else{
    
    

   
        $prueba=file_get_contents('https://api.apis.net.pe/v1/dni?numero='.$dni.'');
   
  
}








echo $prueba;





*/
