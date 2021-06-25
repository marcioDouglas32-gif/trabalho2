<?php
$servername = "u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "bopnyouosbb1zs9t";
$password = "uwik3c20duh4sekn";
$dbname    = "i8aijcct0lem6i2v";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "conectado com sucesso";
} catch(PDOException $e) {
  echo "Não foi possivel se conectar : " . $e->getMessage();
}

?>