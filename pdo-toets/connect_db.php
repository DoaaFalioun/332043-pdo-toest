<?php

ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo-toets";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



  $stmt = $conn->prepare("INSERT INTO pizza (id, bode, saus, pizzatopping, kruiden)
  VALUES (:id, :bode, :saus, :pizzatopping, :kruiden)");

$stmt->bindParam(':id', $id);
$stmt->bindParam(':bode', $bode);
$stmt->bindParam(':saus', $saus);
$stmt->bindParam(':pizzatopping', $pizzatopping);
$stmt->bindParam(':kruiden', $kruiden);


$id = NULL;
$bode = $_POST["bode"];
$saus = $_POST["saus"];
$pizzatopping = $_POST["pizzatopping"];
$kruiden = $_POST["kruiden"];


$stmt->execute();

  echo "Connected successfully";
  header("Refresh:3; ./read.php");
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  header("Location: ./index.php");
}

$conn = null;


?>