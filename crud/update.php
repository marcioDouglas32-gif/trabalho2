<?php
$servername = "u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "bopnyouosbb1zs9t";
$password = "uwik3c20duh4sekn";
$dbname    = "i8aijcct0lem6i2v";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE celular1 SET modelo='SM-j500M' WHERE id=2";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " celular atualizado";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
