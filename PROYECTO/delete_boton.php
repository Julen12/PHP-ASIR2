<?php
$servername = "localhost";
$username = "root";
$password = "Admin108";
$dbname = "asir2_crud";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
$sql = "SELECT * FROM blog";
?>
<form action="insert.html" method="POST">
    <input type="hidden" name="id" value="<?php echo $row["id"]?>">
    <input type="submit" value="Añadir noticia">
</form>
<form action="read.php" method="POST">
<input type="hidden" name="id" value="<?php echo $row["id"]?>">
 <input type="submit" value="Cerrar sesion">
</form>
<hr/>
<?php
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "title: " . $row["title"]. "<br> info:" . $row["info"]. "<br> <img width='20%' src=img/" . $row["img"] . "> <br>";
    
        ?>
        <form action="delete.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            <input type="submit" value="Delete">
        </form> 
        <?php

        
        ?>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            titulo:<input type="input" name="title" value="<?php echo $row["title"]?>"> <br>
            info:<input type="input" name="info" value="<?php echo $row["info"]?>"> <br>
            img:<input type="file" name="img" value="<?php echo $row["img"]?>"> <br>
            <input type="submit" value="Actualizar">
        </form>
        <hr/> 
        <?php

                        }
} else {
    echo "0 results";
}
$conn->close();