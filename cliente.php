<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require_once ('funciones.php');
    $url='http://localhost/ExUD6/servicio.php';
    $uri='http://localhost/ExUD6/';
    
    $cliente = new SoapClient(null, array('location'=>$url,'uri'=>$uri));
      
    ?>
<h3>Comerciales en plantilla:</h3>
    
    <?php
    require_once ('funciones.php');
    $lista =$cliente->getComerciales();
    foreach ($lista as $item) {
        foreach($item as $i){
            echo $i."-";
        }
        echo "<br>";
        # code...
    }
    ?>
<h3>Productos en catalogo:</h3>
    
    <?php
    require_once ('funciones.php');
    $lista =$cliente->getProducto();
    foreach ($lista as $item) {
        foreach($item as $i){
            echo $i."-";
        }
        echo "<br>";
        # code...
    }
    ?>

    <h3>Consulta de ventas:</h3>
    <form method="post">
        Código:<input type="text" name="codigo" id="">
        <input type="submit" name ="enviar" value="Enviar">
    </form>
    <?php 
    
    if(isset($_POST['enviar'])){
        $datos = $cliente->getConsultaVentaComercial($_POST['codigo']);
        foreach ($datos as $dato) {
            echo $dato;
        }
    }
    
    
    
    
    ?>
</body>
</html>