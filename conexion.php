<?php
// conexion con la base de datos
//$link = 'mysql:host=localhost;dbname=api';
// $dbhost = getenv("MYSQL_SERVICE_HOST");
// $dbname = getenv("databasename");
// $dbuser = getenv("databaseuser");
// $dbpwd = getenv("databasepassword");

$link = "mysql:host=localhost;dbname=reto_everis_db";
$usuario = 'root';
$pass = '';

try {
  $pdo = new PDO($link,$usuario,$pass);
  //echo 'conectado';
}catch (PDOException $e) {
  print "¡Error!: " . $e->getMessage() . "<br/>";
  die();
}