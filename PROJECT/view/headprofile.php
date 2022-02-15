<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../index.php"); // Redirecting To Home Page
}
?>
<h1>Hello Head Teacher</h1>

<?php
echo "List of teachers:";
?>
<br>

<?php
include('../control/teachercheck.php');
?>
<br>

<a href="../control/logout.php">logout</a>