<?php

include 'dbconnection.php';
$ID = $_POST["ID"];
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$MailingAddress = $_POST["MailingAddress"];
$MailingAddress2 = $_POST["MailingAddress2"];
$MailingCity = $_POST["MailingCity"];
$MailingState = $_POST["MailingState"];
$MailingZipCode = substr($_POST["MailingZipCode"], 0, 5);
$UpdatePersonQuery = "UPDATE Person SET FirstName='" . $FirstName . "', LastName='" . $LastName . "', MailingAddress='" . $MailingAddress . "', MailingAddress2='" . $MailingAddress2 . "', MailingCity='" . $MailingCity . "', MailingState='" . $MailingState . "', MailingZipCode='" . $MailingZipCode . "' WHERE ID=" . $ID;
if ($dbconnection->query($UpdatePersonQuery) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error updating record: " . $dbconnection->error;
}
$dbconnection->close();
?>