<h1>Hello Admin</h1>
<?php

session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../index.php"); // Redirecting To Home Page
}

echo "List of teachers";
echo"<br>";
include('../control/teachercheck.php');
?>
<br>
<a href="../control/adminlogout.php">logout</a>

<?php
$cookie_name= $_SESSION["username"];
$cookie_value= $_SESSION["username"];
setcookie($cookie_name, $cookie_value, time() + (86400*30), "/");
?>