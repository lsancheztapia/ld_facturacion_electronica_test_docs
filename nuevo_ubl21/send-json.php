<?php

//  $requestPath = 'http://facturaloperu.test:8081/api/documents';
  $requestPath = 'http://pruebas.facturito.pe/api/documents';
  $token = '6n5EvZNUEAdoW2LNqi5BCSJe0rM2rNcm09n35EpJ23lZF3lx2n';

  if ( isset($argv[1]) && file_exists( $argv[1] ) ) {
    $post = json_decode( file_get_contents($argv[1]) );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $requestPath);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));  
    $headers = [
      'Authorization: ' . $token,
      'Content-Type: application/json'
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    if ( $response === false ) {
      print_r( curl_error($ch) );
      die('');
    }

//    $response = curl_exec($ch);

print_r($response);
die();
    $responseArray = json_decode($response);
    if ( $responseArray  ) {
      print_r ($responseArray);
    } else {
      print_r( $response );
    }
  } else {
    if ( isset($argv[1]) ) {
      print "No existe el archivo \n";

    } else {
      print "Tiene que indicar un archivo del tipo .json \n";
    }
  }

