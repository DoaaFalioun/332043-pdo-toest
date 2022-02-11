<?php
if (!isset($_GET["id"])) {
  header("Location: ./index.php");
  exit();
}
$id =  $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo-toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, bode, saus, pizzatopping, kruiden FROM pizza WHERE  id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
  $user = $stmt->fetch();
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <main class="container">
      
    <form action="./connect_db.php" method="post">
                     
                     <label for="bode">Bodemformaat</label><br>
                     <select id="bode" name="bode" class="form-select" aria-label="Default select example" value="<?php echo $user->bode ?>">
                       
                         <option value="maakeenkeuze">Maak een keuze</option>
                         <option value="20">20</option>
                         <option value="25">25</option>
                         <option value="30">30</option>
                         <option value="35">35</option>
                         <option value="40">40Centimeter</option>
                         
                     </select><br>
                     <label for="saus">Saus</label><br>
                     <select id="saus" name="saus"class="form-select" aria-label="Default select example" value="<?php echo $user->saus ?>">
                       
                         <option value="maakeeenkeuze">Maak een keuze</option>
                         <option value="tomatensaus">TomatenSaus</option>
                         <option value="Extra">Extra</option>
                         <option value="tomatesaus">tomatensaus</option>
                         <option value="spicetomatensaus">Spicy tomatesaus</option>
                         <option value="bbqsaus">BBQ saus</option>
                         <option value="cremefraiche">Creme fraiche</option>
                     </select><br><br>
                       <p>Pizzatoppings</p>
                       <input type="radio" id="vegan" name="pizzatopping" value="<?php echo $user->pizzatopping ?>">
                       <label for="vegan">vegan</label><br>
                       <input type="radio" id="vegatarisch" name="pizzatopping" value="<?php echo $user->pizzatopping ?>">
                       <label for="vegatarisch">vegatarisch</label><br>
                       <input type="radio" id="vlees" name="pizzatopping" value="<?php echo $user->pizzatopping ?>">
                       <label for="vlees">vlees</label><br><br>
                     <p>Kruiden</p>
                     <input type="checkbox" id="peterselie" name="kruiden" value="<?php echo $user->pizzatopping ?>">
                     <label for="peterselie"> peterselie</label><br>
                     <input type="checkbox" id="oregano" name="kruiden" value="<?php echo $user->pizzatopping ?>"">
                     <label for="oregano">oregano</label><br>
                     <input type="checkbox" id="chili" name="kruiden" value="<?php echo $user->pizzatopping ?>">
                     <label for="chili"> Chili flakes</label><br>
                     <input type="checkbox" id="peper" name="kruiden" value="<?php echo $user->pizzatopping ?>">
                     <label for="paper">Zwarte paper</label><br><br>
                     
                     <input type="hidden" name="id" value="<?= $id; ?>">
                       
                     <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                     </div>
                    </form> 
        </div>
       

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script scr="./js/app.js"></script>
 </body>
</html>

<?php
