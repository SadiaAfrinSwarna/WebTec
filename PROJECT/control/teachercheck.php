<!DOCTYPE html>
<html>
<body>

<?php
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

$sql = "SELECT ID, tname, temail FROM teacher";
$result = $conn->query($sql);


/*$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->showData($conobj,"teacher");
*/

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br> ID: ".$row["ID"]." <br> Name: ". $row["tname"]. " <br> Email: ". $row["temail"]. " <br>";
    }
} else {
    echo "0 results";
}

//$connection->CloseCon($conobj);
$conn->close();
?>

</body>
</html>