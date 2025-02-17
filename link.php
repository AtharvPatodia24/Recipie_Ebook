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
   