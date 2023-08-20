<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "travel_agency";

    // database connection : 

    $con = mysqli_connect($server, $username, $password, $database);
    if($con)
    {
        echo "";
    }
    else
    {
        echo "Connection Unsuccessful!";
    }
?>