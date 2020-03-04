<?php

require_once 'WSDLDocument.php';
require_once 'funciones.php';


$wsdl = new WSDLDocument(
        'Funciones',
        'http://localhost/ExUD6/servicio.php',
        'http://localhost/ExUD6');

echo $wsdl->saveXML();
?>
