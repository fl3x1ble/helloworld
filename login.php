<?php  session_start();   


if(isset($_SESSION['use']))   
 {
    header("Location:home.php"); 
 }

if(isset($_POST['login']))  
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $stmt->execute();

    
    $conn->close();
    $_SESSION['use'] = $firstname;
    echo '<script type="text/javascript"> window.open("home.php","_self");</script>';

}
if(isset($_POST['skip']))  
{
  header("Location:home.php"); 
  $_SESSION['use'] = $firstname;
  echo '<script type="text/javascript"> window.open("home.php","_self");</script>';
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>

<form action="" method="post">

    <table width="200" border="0">
  <tr>
    <td>  Firstname</td>
    <td> <input type="text" name="firstname" > </td>
  </tr>
  <tr>
    <td>  Lastname</td>
    <td> <input type="text" name="lastname" > </td>
  </tr>
  <tr>
    <td> E-mail  </td>
    <td><input type="email" name="email"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="login"></td>
    <td></td>
  </tr>
  <tr>
    <td> <input type="submit" name="skip" value="skip"></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>