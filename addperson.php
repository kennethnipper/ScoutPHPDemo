<!DOCTYPE html>
<html>
    <head><title>Add Person</title><?php include 'externalresources.php' ?><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"></head>
    <body>
        <form action="insertperson.php" method="post">
            <div class="container">
                <div class="jumbotron">
                <table class=table><thead class=thead-light>
                        <tr><td>First Name: </td><td><input class='form-control' type='text' name='FirstName'></input></td></tr>
                        <tr><td>Last Name: </td><td><input class='form-control' type='text' name='LastName'></input></td></tr>
                        <tr><td>Mailing Address: </td><td><input class='form-control' type='text' name='MailingAddress'></input></td></tr>
                        <tr><td></td><td><input class='form-control' type='text' name='MailingAddress2'></input></td></tr>
                        <tr><td>City: </td><td><input class='form-control' type='text' name='MailingCity'></input></td></tr>
                        <tr><td>State: </td><td><select name='MailingState' class='form-control'>
                                    <?php
                                    include 'variables.php';
                                    foreach ($us_state_abbrevs as $state) 
									{
                                        echo "<option value='$state'>$state</option>";
                                    }
                                    ?>
                                </select>
                            </td></tr>
                        <tr><td>Zip Code: </td><td><input class='form-control' type='text' name='MailingZipCode'></input></td></tr>
                        <tr><td colspan=2><input class='form-control' type='submit' value='Insert'></input><input class='form-control' type='button' value='Cancel' onclick="javascript:window.location = 'index.php'"></input></td></tr>
                        </thead>
                    </table>
                    </form>
                </div>
            </div>
    </body>
</html>