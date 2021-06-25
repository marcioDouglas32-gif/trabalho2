<?php
$servername = "j21q532mu148i8ms.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "ygazl4o9ggmxkayl";
$password = "xerljyjrfsl46p75";
$dbname    = "f2m9sbo6zmjxa5pz";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE celular SET modelo='SM-j500M' WHERE id=2";

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
