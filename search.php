<?php
    if(isset($_POST['submit']))
    {
        $rname = $_POST['name'];
        $preptime = $_POST['preptime'];
        $deflvl = $_POST['difficulty'];
        $ingredients= $_POST['ingredients'];
        $recipe= $_POST['recipe'];
        $notes= $_POST['additionalnotes'];
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "recipe_ebook";
        $con = mysqli_connect($host, $username, $password, $dbname);
        if(!$con)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        $query = "INSERT INTO recepies VALUES ('$rname', '$preptime', '$deflvl', '$ingredients', '$recipe', '$notes')";
        $rs = mysqli_query($con, $query);
        {
            echo "Entries added!";
        }
        mysqli_close($con);
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Find Recipes</title>
        <style>
          h1 {
            text-align: center;
            background-color: "green";
            padding: 10px 10px;
          }
        </style>
      </head>
    
      <body>
        <div class="form">
          <h1>Find Recipes</h1>
          <form action="search" method="POST">
            <label for="search">Search for recipes:</label>
            <input
              type="text"
              id="search"
              name="search"
              placeholder="Search for recipes.."
            />
            <button name="submit" type="submit" value="submit" />
          </form>
        </div>
      </body>
    </html>
    