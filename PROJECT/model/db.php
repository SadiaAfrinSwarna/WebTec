
<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "projectdb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE tuname='". $username."' AND tpass='". $password."'");
 return $result;
 }


 function adminlogin($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE auname='". $username."' AND apass='". $password."'");
 return $result;
 }

 function headLogin($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE huname='". $username."' AND hpass='". $password."'");
 return $result;
 }


 /*function showdata($conn,$table)
 {
    $sql = "SELECT ID, tname, temail FROM teacher";
    $result = $conn->query($sql);
    return result;
 }*/
 


 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


 /*function InsertUser($conn,$table,$name, $email, $password, $conpassword, $gender, $phone, $address, $date)
 {
     $sql = "INSERT into $table (tname, temail, tpass, tconpass, tgender, tphone, taddress, tdob) values ('$name', '$email', '$password', '$conpassword', '$gender', '$phone', '$address', '$date')";

    $stmt = $conn->prepare ($sql);
    $result= $stmt->execute([$name, $email, $password, $conpassword, $gender, $phone, $address, $date]);
    if($result)
    {
        echo "inserted";
    }
    else{
        echo "not inserted";
    }
 }*/


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>