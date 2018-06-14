<?php

// $data = [
//   'dolar'=>500, 'euro'=>700
// ];

/*$peticion = $_GET['variable'];

echo json_encode($peticion);*/
// el formato de este archvo va aser en formato json:
header('Content-Type: application/json');
// cualquier persona puede acceder a consumir nuestra api:
// header('Access-Control-Allow-Origin: *')

if($_GET['moneda']=='euro' || $_GET['moneda']== 'dolar'){
  // echo 'usted colocó euro';
  include_once 'conexion.php';
  $sql = 'SELECT * FROM '.$_GET['moneda'];
  $sentencia = $pdo->prepare($sql);
  $sentencia->execute();
  $data = $sentencia->fetchAll();
  // var_dump($sql);
}else{
  echo 'solicitud no encontrada';
}

echo json_encode($data);
