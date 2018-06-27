<?php

  if ( file_exists( $argv[1] ) ) {
    $fileContent = file_get_contents($argv[1]);
    $post = array('document' => base64_encode( $fileContent ) );
    if ( isset($argv[2]) &&  $argv[2] ) {
      $post['type'] = $argv[2];
    }

    // Debug, retorna sólo el header parseado
//   $post['debug'] = 'header';

    // enviando por batch
//	 $post['batch'] = 'yes';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://prueba-fact.logicaldesign.pe/api/send-document');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
    $response = curl_exec($ch);
    $responseArray = json_decode($response);
    if ( $responseArray  ) {
      print_r ($responseArray);
    } else {
      print_r( $response );
    }
  } else {
    print "No existe el archivo \n";
  }

