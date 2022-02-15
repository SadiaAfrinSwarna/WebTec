<!DOCTYPE html>
<html>
<body>

<?php

session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../index.php"); // Redirecting To Home Page
}

include('../model/db.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*$sql = "SELECT ID, tname, temail FROM teacher";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br> Name: ". $row["tname"]. " - Email: ". $row["temail"]. " <br>";
    }
} else {
    echo "0 results";
}
*/

$conn->close();
?>

<h1>Hello <?php echo $_SESSION["username"]; ?> </h1>
<a href="../control/logout.php">logout</a>

</body>
</html>



<?php
$cookie_name= $_SESSION["username"];
$cookie_value= $_SESSION["username"];
setcookie($cookie_name, $cookie_value, time() + (86400*30), "/");
?>
