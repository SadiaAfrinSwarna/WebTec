<?php
$error="";

    $isinserted="";
    $validateusername="";
    $validatename="";
    $validatepassword="";
    $validateemail="";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $username=$_POST["username"];
      $name=$_POST["name"];
      $email=$_POST["email"];
      $password=$_POST["password"];
      $conpassword=$_POST["conpassword"];

      if(empty($name) || strlen($name)<3|| empty($username) || strlen($username)<3||
      empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)||
      empty($password) || empty($conpassword) || $password!==$conpassword || strlen($password) < 6)
      
      
      {
        $validateusername="You must enter valid username";
        $validatename="You must enter valid name";
        $validateemail="You must enter valid email";
        $validatepassword="You must enter valid password";
      }
      

      else{

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$sql="INSERT INTO admindb (auname,aname,aemail,apass) values('$username','$name', '$email', '$password')";
$res= $conn->query($sql);
if($res)
{
  $isinserted="You have successfully registered!";
}
else
{
    echo"error".$conn->error;
}
$conn->close();
    $validateusername="";
    $validatename="";
    $validatepassword="";
    $validateemail="";
}
}

?>