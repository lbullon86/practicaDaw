
    <?php
        require_once ('serviciow.php');

    $cliente = new SoapClient("http://localhost/ExUD6/ventas.wsdl"); 
      
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
