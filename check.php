<?php

  if ( !isset($argv[1]) || !isset($argv[2]) ||!isset($argv[3]) ) {
    print "\nTiene que pasar parametros : nro de documento, fecha y ruc \n\n";
    die();
  }

  $post = array(
    'number' => $argv[1],
    'date' => $argv[2],
    'ruc' => $argv[3]
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'http://factura.logicaldesign.pe/api/check-document');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
  $response = curl_exec($ch);
  $responseArray = json_decode($response);
  if ( $responseArray  ) {
    print_r ($responseArray);
  } else {
    print_r( $response );
  }

