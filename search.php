
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Find Recipes</title>
        <style>
        * {
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 5px;
        margin-right: 5px;
        margin-top: 2px;
        }
          h1 {
            text-align: center;
            background-color: #4caf50;
            padding: 10px 10px;
            color: white;
          }
          .button1 {
        background-color: #4c5eaf;
        /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
      }
        </style>
      </head>
    
      <body style="background-color: #aefd6c">
        <div class="form">
          <h1>Find Recipes</h1>
          <a href="Main.html" class="button1">Back to home</a>
          <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <label for="search">Search for recipes:</label>
            <input
              type="text"
              id="search"
              name="search"
              placeholder="Search for recipes.."
            />
            <button name="submit" type="submit" value="submit">Search</button>
            <?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "recipe_ebook";
  $con = mysqli_connect($host, $username, $password, $dbname);
  if(!$con)
    {
      die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) {
      $search = mysqli_real_escape_string($con, $_POST['search']);
      $query = "SELECT * FROM recepies WHERE name LIKE '%$search%'";
      $result = $con->query($query);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<p2><br>Recipe: " . $row['NAME'] . "<br>" . "Preperation time: " . $row['PREPTIME'] . "<br>" . "Difficulty level: " . $row['DEFLEVEL'] . "<br>" . "Ingredients: " . $row['INGREDIENTS'] . "<br>" . "Steps: " . $row['STEPS'] . "<br>" . "Notes: " . $row['POSTTEXT'] . "</p2><br>";
          }
      } else {
          echo "No results found.";
      }
      $con->close();
  }
  ?>

          </form>
        </div>
      </body>
    </html>
    