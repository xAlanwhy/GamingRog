<?php 

class DBGGestionLibreria{

private $servidor = 'localhost';
private $dataBase = 'dbfinal';
private $user = 'root';
private $password = '';




private function getConexion(){
$dns = "mysql:host=$this->servidor;dbname=$this->dataBase";
$obPDO = new PDO($dns, $this->user, $this->password);
return $obPDO;

}

public function getLibros(){
    $pdoConexion = $this->getConexion();
    $resultado = [];

    if( is_object($pdoConexion)){
        $sql = "SELECT * FROM tiendas";
        $resultado = $pdoConexion->query($sql);
    }
    return $resultado;
}

public function getAutores(){
    $pdoConexion = $this->getConexion();
    $resultado = [];

    if( is_object($pdoConexion)){
        $sql = "SELECT * FROM descuento";
        $resultado = $pdoConexion->query($sql);
    }
    return $resultado;
}

public function getDetalle_venta(){
    $pdoConexion = $this->getConexion();
    $resultado = [];

    if( is_object($pdoConexion)){
        $sql = "SELECT * FROM detalle_venta";
        $resultado = $pdoConexion->query($sql);
    }
    return $resultado;
}


}



?>