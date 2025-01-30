<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $rname = $_POST['name'];
        $preptime = $_POST['preptime'];
        $deflvl = $_POST['difficulty'];
    }