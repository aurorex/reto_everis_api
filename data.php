<?php

// $data = [
//   'dolar'=>500, 'euro'=>700
// ];

/*$peticion = $_GET['variable'];

echo json_encode($peticion);*/
// el formato de este archvo va aser en formato json:
header('Content-Type: application/json');
// cualquier persona puede acceder a consumir nuestra api:
header('Access-Control-Allow-Origin: *');

if($_GET['var']=='usuario' || $_GET['var']== 'proyecto'){
  // echo 'usted colocó euro';
  include_once 'conexion.php';
  $sql = 'SELECT * FROM '.$_GET['var'];
  $sentencia = $pdo->prepare($sql);
  $sentencia->execute();
  $data = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  var_dump($data);
}else{
  echo 'solicitud no encontrada';
}

echo json_encode($data);
