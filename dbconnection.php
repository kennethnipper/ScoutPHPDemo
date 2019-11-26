<?php

$dbconnection = mysqli_connect("127.0.0.1", "scoutdemo", "scoutdemo", "ScoutDemo");
if ($dbconnection === false) {
    die("ERROR: could not connect. " . mysqli_connect_error());
}
?>