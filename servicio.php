<?php 

require_once('funciones.php');
 $server = new SoapServer(null, array('uri'=>"http://localhost/ExUD6/funciones.php")); 
 $server->setClass('Funciones');
 $server->handle();
?>

