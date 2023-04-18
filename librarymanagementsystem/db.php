<?php

    $servername = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "logreg_db";

    $conn = mysqli_connect($servername, $dbuser, $dbpassword, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

?>