<?php
$hostname = "localhost";
$username = "root";
$password = "Admin108";
$databaseName = "login";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM users";

$result1 = mysqli_query($connect, $query);
?>
<?php
$sql = "DELETE FROM users";
$result = $conn->query($sql);
?>


<!DOCTYPE html>

<html>

    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

       
    <select  class="form-control">

    <?php while($row1 = mysqli_fetch_array($result1)):;?>

    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

    <?php endwhile;?>

</select>
<input type="submit" name="eliminar" value="Eliminar" class="btn btn-info" />

    </body>

</html>