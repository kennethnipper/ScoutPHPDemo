
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
                        echo "<table><tr><th>ID</th><th>&nbsp;&nbsp;First Name&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Last Name&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Mailing Address&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Mailing City&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Mailing State&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Mailing ZipCode&nbsp;&nbsp;</th><td></td></tr>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>&nbsp;&nbsp;" . $row['ID'] . "&nbsp;&nbsp;</td>";
                            echo "<td>&nbsp;&nbsp;" . $row['FirstName'] . "&nbsp;&nbsp;</td>";
                            echo "<td>&nbsp;&nbsp;" . $row['LastName'] . "&nbsp;&nbsp;</td>";
                            echo "<td>&nbsp;&nbsp;" . $row['MailingAddress'] . "&nbsp;&nbsp;</td>";
                            echo "<td>&nbsp;&nbsp;" . $row['MailingAddress2'] . "&nbsp;&nbsp;</td>";
                            echo "<td>&nbsp;&nbsp;" . $row['MailingCity'] . "&nbsp;&nbsp;</td>";
                            echo "<td>&nbsp;&nbsp;" . $row['MailingState'] . "&nbsp;&nbsp;</td>";
                            echo "<td>&nbsp;&nbsp;" . $row['MailingZipCode'] . "&nbsp;&nbsp;</td>";
                            echo "<td><a href='editperson.php?id=" . $row['ID'] . "'>Edit</a>&nbsp;&nbsp;</td>";
                            echo "<td><a href='deleteperson.php?id=" . $row['ID'] . "'>Delete</a>&nbsp;&nbsp;</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_free_result($result);
                    } else {
                        echo "No results returned from person table<br /><br />";
                    }
                }
                mysqli_close($dbconnection);
                ?>
                <input type="button" value="Add New Person" onclick="javascript:window.location = 'addperson.php'"></input>
            </div>
        </div>
    </body>
</html>