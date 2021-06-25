<?php

$servername = "u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "bopnyouosbb1zs9t";
$password = "uwik3c20duh4sekn";
$dbname    = "i8aijcct0lem6i2v";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM celular1 WHERE id=4";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Celular deletado";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>