<?php

include 'dbconnection.php';
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$MailingAddress = $_POST["MailingAddress"];
$MailingAddress2 = $_POST["MailingAddress2"];
$MailingCity = $_POST["MailingCity"];
$MailingState = $_POST["MailingState"];
$MailingZipCode = substr($_POST["MailingZipCode"], 0, 5);
$InsertPersonQuery = "INSERT INTO Person (FirstName, LastName, MailingAddress, MailingAddress2, MailingCity, MailingState, MailingZipCode) VALUES ('$FirstName', '$LastName', '$MailingAddress', '$MailingAddress2', '$MailingCity', '$MailingState', '$MailingZipCode')";
if ($dbconnection->query($InsertPersonQuery) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error inserting record: " . $dbconnection->error;
}
$dbconnection->close();
?>