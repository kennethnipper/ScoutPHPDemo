<?php

$dbconnection = mysqli_connect("mysql", "scoutdemo", "scoutdemo", "scoutdemo");
if ($dbconnection === false) {
    die("ERROR: could not connect. " . mysqli_connect_error());
}
?>