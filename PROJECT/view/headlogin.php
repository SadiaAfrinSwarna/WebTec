<?php
include('../control/headlogincheck.php');

if(isset($_SESSION['username'])){
header("location: ../view/headprofile.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<form action="" method="post">
<table style= "width:100%">
<img src= "../resources/icon.jpg">
<tr>
<th><h1>Login Here!</h1></th>
</tr>
<tr><th>
    <input type="text" name="username" placeholder="Enter your username" ></tr></th>
    <tr><th>
    <input type="password" name="password" placeholder="Enter your password" ></tr></th>

    <tr><th><input name="submit" type="submit" value="LOGIN"></tr></th>
    <tr><th><?php echo $error; ?></tr></th>
    <tr><th>Or Register as Head Teacher?</tr></th>
    <tr><th><a href="../view/headregistration.php">Register Here</tr></th>
    </table>
</form>
<br>


</body>
</html>