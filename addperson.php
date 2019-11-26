<!DOCTYPE html>
<html>
    <head><title>Edit Person</title><?php include 'externalresources.php' ?></head>
    <body>
        <form action="insertperson.php" method="post">
            <div class="container">
                <div class="jumbotron">
                    <table>
                        <tr><td>First Name: </td><td><input type='text' name='FirstName'></input></td></tr>
                        <tr><td>Last Name: </td><td><input type='text' name='LastName'></input></td></tr>
                        <tr><td>Mailing Address: </td><td><input type='text' name='MailingAddress'></input></td></tr>
                        <tr><td></td><td><input type='text' name='MailingAddress2'></input></td></tr>
                        <tr><td>City: </td><td><input type='text' name='MailingCity'></input></td></tr>
                        <tr><td>State: </td><td><select name='MailingState'>
                                    <?php
                                    include 'variables.php';
                                    foreach ($us_state_abbrevs as $state) 
									{
                                        echo "<option value='$state'>$state</option>";
                                    }
                                    ?>
                                </select>
                            </td></tr>
                        <tr><td>Zip Code: </td><td><input type='text' name='MailingZipCode'></input></td></tr>
                        <tr><td colspan=2><input type='submit' value='Insert'></input><input type='button' value='Cancel' onclick="javascript:window.location = 'index.php'"></input></td></tr>
                    </table>
                    </form>
                </div>
            </div>
    </body>
</html>