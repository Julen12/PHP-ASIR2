<?php  
 $connect = mysqli_connect("localhost", "root", "Admin108", "login");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Ambos campos son obligatorios")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = password_hash($password, PASSWORD_DEFAULT);  
           $query = "INSERT INTO users(user, pass) VALUES('$username', '$password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registro hecho")</script>';  
                header("location:index.php?action=login");  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Ambos campos son obligatorios")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $query = "SELECT * FROM users WHERE user = '$username'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["pass"]))  
                     {  
                          //return true;  
                          $_SESSION["username"] = $username;  
                          header("location:botones.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Detalles de usuario incorrectos")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Detalles de usuario incorrectos")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Bienvenido a Whatsapp </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Bienvenido a Whatsapp</h3>  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Iniciar Sesion</h3>  
                <br />  
                <form method="post">  
                     <label>Usuario</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Contraseña</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Iniciar Sesion" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php">Registrarse</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Registrarse</h3>  
                <br />  
                <form method="post">  
                     <label>Usuario</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Contraseña</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Registrarse" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php?action=login">Iniciar Sesion</a></p>  
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>  