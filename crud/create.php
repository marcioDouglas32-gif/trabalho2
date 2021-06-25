<?php
$servername = "j21q532mu148i8ms.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "ygazl4o9ggmxkayl";
$password = "xerljyjrfsl46p75";
$dbname    = "f2m9sbo6zmjxa5pz";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO white (Nome,Marca, modelo, mac) 
  VALUES ('douglas ', 'xiaomi', 'Redmi Note 9','58175481u26061uffnn')";
  // use exec() because no results are returne
  $conn->exec($sql);
  echo "celular cadastrado";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>