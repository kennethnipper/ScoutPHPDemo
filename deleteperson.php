<?php
include 'dbconnection.php';
$DeletePersonQuery = "delete from Person where id=" . $_GET["id"];
if ($dbconnection->query($DeletePersonQuery) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . $dbconnection->error;
}
$dbconnection->close();
?>