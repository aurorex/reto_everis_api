<?php
// conexion con la base de datos
//$link = 'mysql:host=localhost;dbname=api';
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbname = getenv("databasename");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");

$link = "mysql:host=$dbhost;dbname=$dbname";
$usuario = 'root';
$pass = '';

try {
  $pdo = new PDO($link,$dbuser,$dbpwd);
  // echo 'conectado';
}catch (PDOException $e) {
  print "¡Error!: " . $e->getMessage() . "<br/>";
  die();
}