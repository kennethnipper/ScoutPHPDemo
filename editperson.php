<!DOCTYPE html>
<html>
    <head><title>Edit Person</title><?php include 'externalresources.php' ?></head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <form action="updateperson.php" method="post">

                    <?php
                    include 'dbconnection.php';
                    include 'variables.php';
                    $GetPersonQuery = "select * from Person where id=" . $_GET["id"];
                    if ($result = mysqli_query($dbconnection, $GetPersonQuery)) {
                        if (false === $result) {
                            echo(mysqli_error($dbconnection));
                        }
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td><input type='hidden' name='ID' value=" . $row['ID'] . "></input></td></tr>";
                                echo "<tr><td>First Name: </td><td><input type='text' name='FirstName' value='" . $row['FirstName'] . "'></input></td></tr>";
                                echo "<tr><td>Last Name: </td><td><input type='text' name='LastName' value='" . $row['LastName'] . "'></input></td></tr>";
                                echo "<tr><td>Mailing Address: </td><td><input type='text' name='MailingAddress' value='" . $row['MailingAddress'] . "'></input></td></tr>";
                                echo "<tr><td></td><td><input type='text' name='MailingAddress2' value='" . $row['MailingAddress2'] . "'></input></td></tr>";
                                echo "<tr><td>City: </td><td><input type='text' name='MailingCity' value='" . $row['MailingCity'] . "'></input></td></tr>";
                                echo "<tr><td>State: </td><td><select name='MailingState'>";
                                foreach ($us_state_abbrevs as $state) {
                                    if ($row['MailingState'] === $state) {
                                        echo "<option value='$state' selected>$state</option>";
                                    } else {
                                        echo "<option value='$state'>$state</option>";
                                    }
                                }
                                echo "</select></td></tr>";


                                echo "<tr><td>Zip Code: </td><td><input type='text' name='MailingZipCode' value='" . $row['MailingZipCode'] . "'></input></td></tr>";
                                echo "<tr><td colspan=2><input type='submit' value='Update'></input></td></tr>";
                            }
                            echo "</table>";
                            mysqli_free_result($result);
                        } else {
                            echo "No results returned from person table";
                        }
                    }
                    mysqli_close($dbconnection);
                    ?>
            </div>
        </div>
    </form>
</body>
</html>