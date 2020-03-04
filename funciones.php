<?php 
require_once('Database.php');
class Funciones{    
    /**
     * Listamos todos los nombres y códigos los comerciales
     * 
     * @return array
     */
     public function getComerciales(){     
        $comerciales = array();
        
            // Entramos en la base de datos
            $dwes = DataBase::connectDataBase();
            $sql = "SELECT nombre, codigo FROM Comerciales"; 
            $resultado = $dwes->query($sql);
            if($resultado) {
                $row = $resultado->fetch();
                while ($row != null) {
                    $comercial = array();
                    $comercial[]= $row['codigo'];
                    $comercial[]= $row['nombre'];
                    $comerciales[] = $comercial;
                    $row = $resultado->fetch();
                }
            }
        
        return $comerciales;
    }
    /**
     * Listamos todos los nombres y códigos los comerciales
     * 
     * @return array
     */
    public function getProducto(){     
        $productos = array();
        
            // Entramos en la base de datos
            $dwes = DataBase::connectDataBase();
            $sql = "SELECT * FROM Productos"; 
            $resultado = $dwes->query($sql);
            if($resultado) {
                $row = $resultado->fetch();
                while ($row != null) {
                    $producto = array();
                    $producto[]= $row['referencia'];
                    $producto[]= $row['nombre'];
                    $producto[]= $row['descripcion'];
                    $producto[]= $row['descuento'];
                    $producto[]= $row['precio'];
                    $productos[] = $producto;
                     $row = $resultado->fetch();
                }
            }
        
        return $productos;
    }
 
    /** 
     * Obtiene los datos de un código comercial concreto
     * 
     * @param string $cod
     * @return array
     */
    public function getConsultaVentaComercial($cod){

        
            $datos = array();
            $dwes = DataBase::connectDataBase();
            $sql = "SELECT * FROM Ventas WHERE codComercial='$cod'";
            $resultado = $dwes->query($sql);
            if($resultado) {
                $row = $resultado->fetch();
                $datos[] = $row['refProducto'];
                $datos[] = $row['cantidad'];
                $datos[] = $row['fecha'];
            }
        
        
        return $datos;  
    }



}

?>