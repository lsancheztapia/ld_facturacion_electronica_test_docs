<?php

  if ( file_exists( $argv[1] ) ) {
    $post = json_decode( file_get_contents($argv[1]) );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://facturito.logicaldesign.pe/controllers/send_document.php');
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

