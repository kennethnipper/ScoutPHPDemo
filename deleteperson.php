<!DOCTYPE html>
<html>
    <head><title>DeletePerson</title><?php include 'externalresources.php' ?></head>
    <body>
        <?php
        include 'dbconnection.php';
        include 'variables.php';
        $GetPersonQuery = "delete from Person where id=" . $_GET["id"];
        if ($result = mysqli_query($dbconnection, $GetPersonQuery)) {
            if (false === $result) {
                echo(mysqli_error($dbconnection));
            } else {
                echo "No results returned from person table";
            }
        }
        mysqli_close($dbconnection);
        header("Location: index.php");
        ob_end_flush();
        ?>
    </div>
</div>
</form>
</body>
</html>