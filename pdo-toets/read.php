<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo-toets";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
  $stmt = $conn->prepare("SELECT id, bode, saus, pizzatopping, kruiden FROM pizza");  
  $stmt->execute();





  
$result = $stmt->setFetchMode(PDO::FETCH_OBJ);

$tableRows = "";
foreach ($stmt->fetchAll() as $key=>$value) {
    $tableRows .= "<tr>
                   <td>$value->id</td>
                   <td>$value->bode</td>
                   <td>$value->saus</td>
                   <td>$value->pizzatopping</td>
                   <td>$value->kruiden</td>
                   <td>
                   <a href='./update.php?id= $value->id'>
                   <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-wrench' viewBox='0 0 16 16'>
                   <path d='M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019l.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z'/>
                 </svg>
                   </a>
                 </td> 
                 <td>
                 <a href='./delete.php?id=$value->id'>
                 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                 <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                 <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
               </svg> 
                 </a>
                   
                    </tr>";}
                    

          
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;

 echo "</table>";

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
      <div class="row">
        <div class="col-12">
        <div class="jumbotron jumbotron-fluid">
       <div class="container">
          <h1 class="display-4">PDO</h1>
          
       </div>
       </div>

          <div class="row">
           <div class="col-12">
           <a href="index.php" class="btn btn-dark btn-lg btn-block" type="button">Nieuwe record</button>
            </div></a>
           
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-12">
            <!-- Op deze plek komt de tabel -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Bodeformaat</th>
                            <th scope="col">Saus</th>
                            <th scope="col">Pizzatopping</th>
                            <th scope="col">Kruiden</th>
                            

                           
                    
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                           <?php
                             echo $tableRows;
                           ?>     
                    </tbody>
                    </table>

           
         

    </div>
         </div>
       
        </div> 
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


