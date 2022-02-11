<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      
    </style>
  </head>
  <body>
  

<main class="container">
      <h2>Padded input fields</h2>
      
            <form action="./connect_db.php" method="post">
                     
            <label for="bode" class="">Bodemformaat</label><br>
            <select id="bode" name="bode" class="form-select" aria-label="Default select example">
              
                <option value="maakeenkeuze">Maak een keuze</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40Centimeter</option>
                
            </select><br>
            <label for="saus">Saus</label><br>
            <select id="saus" name="saus" class="form-select" aria-label="Default select example">
              
                <option value="maakeeenkeuze">Maak een keuze</option>
                <option value="tomatensaus">TomatenSaus</option>
                <option value="Extra">Extra</option>
                <option value="tomatesaus">tomatensaus</option>
                <option value="spicetomatensaus">Spicy tomatesaus</option>
                <option value="bbqsaus">BBQ saus</option>
                <option value="cremefraiche">Creme fraiche</option>
            </select><br><br>
              <p>Pizzatoppings</p>
              <input type="radio" id="vegan" name="pizzatopping" value="vegan">
              <label for="vegan">vegan</label><br>
              <input type="radio" id="vegatarisch" name="pizzatopping" value="vegetarisch">
              <label for="vegatarisch">vegatarisch</label><br>
              <input type="radio" id="vlees" name="pizzatopping" value="vlees">
              <label for="vlees">vlees</label><br><br>
            <p>Kruiden</p>
            <input type="checkbox" id="peterselie" name="kruiden" value="peterselie">
            <label for="peterselie"> peterselie</label><br>
            <input type="checkbox" id="oregano" name="kruiden" value="oregano">
            <label for="oregano">oregano</label><br>
            <input type="checkbox" id="chili" name="kruiden" value="chili">
            <label for="chili"> Chili flakes</label><br>
            <input type="checkbox" id="peper" name="kruiden" value="peper">
            <label for="paper">Zwarte paper</label><br><br>
            
              
            
          <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Bestel</button>
            </div>
            </form> 
        </div>
       

    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
