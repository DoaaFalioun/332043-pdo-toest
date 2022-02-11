<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo-toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE pizza
          SET    bode = :bode,
                 saus = :saus
                 pizzatoppinge = :pizzatopping
                 kruiden= :kruiden
          WHERE  id = :id";

  // Prepare statement
  $stmt = $conn->prepare($sql);


  $stmt->bindParam(':bode', $bode);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':pizzatopping', $pizzatopping);
  $stmt->bindParam(':kruiden', $kruiden);
  $stmt->bindParam(':id', $id);


  $bode = $_POST["bode"];
  $saus = $_POST["saus"];
  $pizzatopping = $_POST["pizzatopping"];
  $kruiden = $_POST["kruiden"];
  $id = $_POST["id"];
  // execute the query

  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo  "record met id={$id} UPDATED successfully";
  header("Refresh:5; ./read.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>