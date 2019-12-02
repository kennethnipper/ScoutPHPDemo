
<html>
    <head><title>Person Scout Demo</title><?php include 'externalresources.php' ?></head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <?php
                include 'dbconnection.php';
                $GetPersonQuery = "select * from Person";
                if ($result = mysqli_query($dbconnection, $GetPersonQuery)) {
                    if (false === $result) {
                        echo(mysqli_error($dbconnection));
                    }
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class=table><thead class=thead-light><tr><th>First Name</th><th>Last Name</th><th>Mailing Address</th><th>&nbsp;</th><th>Mailing City</th><th>Mailing State</th><th>Mailing ZipCode</th><td></td></tr></thead><tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['FirstName'] . "</td>";
                            echo "<td>" . $row['LastName'] . "</td>";
                            echo "<td>" . $row['MailingAddress'] . "</td>";
                            echo "<td>" . $row['MailingAddress2'] . "</td>";
                            echo "<td>" . $row['MailingCity'] . "</td>";
                            echo "<td>" . $row['MailingState'] . "</td>";
                            echo "<td>" . $row['MailingZipCode'] . "</td>";
                            echo "<td><a class='btn btn-primary' href='editperson.php?id=" . $row['ID'] . "'>Edit</a></td>";
                            echo "<td><a class='btn btn-primary' href='deleteperson.php?id=" . $row['ID'] . "'>Delete</a></td>";
                            echo "</tr>";
                        }
                        echo "</tbody></table>";
                        mysqli_free_result($result);
                    } else {
                        echo "No results returned from person table<br /><br />";
                    }
                }
                mysqli_close($dbconnection);
                ?>
                <input class="form-control" type="button" value="Add New Person" onclick="javascript:window.location = 'addperson.php'"></input>
            </div>
        </div>
    </body>
</html>