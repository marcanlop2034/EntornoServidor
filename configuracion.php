<?php
   if(file_exists('configuracion.xml')){
    $xml = simplexml_load_file('configuracion.xml');
    print($xml->nombre . ' ' . $xml->apellidos .  ' - ' . $xml->nbalumnoUned );
  }
  else{
    exit('Failed to open configuracion.xml');
  }