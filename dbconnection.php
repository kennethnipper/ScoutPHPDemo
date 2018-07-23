<?php

$dbconnection = mysqli_connect("localhost", "scoutdemo", "scoutdemo", "ScoutDemo");
if ($dbconnection === false) {
    die("ERROR: could not connect. " . mysqli_connect_error());
}
?>