<?php
$error="";

    $validatename="";
    $validateusername="";
    $validatepassword="";
    $validateemail="";
    $validategender="";
    $validateaddress="";
    $validatephone="";
    $validatedate="";
    $gn="";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $name=$_POST["name"];
      $username=$_POST["username"];
      $email=$_POST["email"];
      $password=$_POST["password"];
      $phone=$_POST["phone"];
      $address=$_POST["address"];
      $date=$_POST["date"];
      $conpassword=$_POST["conpassword"];

      if(empty($date)||empty($phone)||empty($address)||empty($name) || strlen($name)<3|| empty($username) || strlen($username)<3||
      empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)||
      empty($password) || empty($conpassword) || $password!==$conpassword || strlen($password) < 6||!isset($_POST["gender"]))
      
      
      {
        $validatedate="You must enter date of birth";
        $validatephone="You must enter mobile number";
        $validateaddress="You must enter address";
        $validatename="You must enter valid name";
        $validateusername="You must enter valid username";
        $validateemail="You must enter valid email";
        $validatepassword="You must enter valid password";
        $validategender="You must select gender";
      }
      

      else{
        $gn= $_POST["gender"];

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$sql="INSERT INTO teacher(tuname,tname,temail,tpass,tgender, tphone, taddress, tdob) values('$username','$name', '$email', '$password', '$gn', '$phone', '$address', '$date')";
$res= $conn->query($sql);
if($res)
{
    echo"new record insered";
}
else
{
    echo"error".$conn->error;
}
$conn->close();

    $validatename="";
    $validateusername="";
    $validatepassword="";
    $validateemail="";
    $validategender="";
    $validateaddress="";
    $validatephone="";
    $validatedate="";
}
}

?>