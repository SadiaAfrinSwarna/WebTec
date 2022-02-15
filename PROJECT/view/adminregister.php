<?php 
include('../control/adminregistrationcheck.php');
 

?>
<!DOCTYPE html>
<html>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
<table style= "width:100%">
<img src= "../resources/icon.jpg">

<tr>
<th><h1>Register Here!</h1></th>
</tr>
 
<tr>
<th><input type="text" name="name" placeholder="Enter Name"> </th>
</tr>

<tr>
<th><input type="text" name="username" placeholder="Enter User Name"> </th>
</tr>
 

<tr>
<th><input type="text" name="email" placeHolder="Enter Email"></th>
</tr>


<tr>
<th><input type="password" name="password" placeHolder="Password(Min 6 digits)"></th>
</tr>

<tr>
<th><input type="password" name="conpassword" placeHolder="Re enter password "></th>
</tr>


<tr>
<th><input type="submit" value="register"></th>
</tr>
<tr><th><?php echo  $validatename ;?></th></tr>
<tr><th><?php echo  $validateusername ;?></th></tr>
<tr><th><?php echo  $validateemail ;?></th></tr>
<tr><th><?php echo  $validatepassword ;?></th></tr>
<tr><th><?php echo  $isinserted ;?></th></tr>

</table>
</form>
</body>
</html>

