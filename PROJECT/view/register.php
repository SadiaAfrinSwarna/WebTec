<?php 
include('../control/registrationcheck.php');
 

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
<th><input type="radio" id="male" name="gender" value="male">Male </th>
</tr>

<tr>
<th><input type="radio" id="female" name="gender" value="female">Female </th>
</tr>

<tr>
<th><input type="radio" id="other" name="gender" value="other">Other </th>
</tr>


<tr>
<th><input type="text" name="phone" placeHolder="Mobile number"></th>
</tr>

<tr>
<th><input type="text" name="address" placeHolder="Enter address"></th>
</tr>

<tr>
<th><input type="date"name="date"></th>
</tr>

<tr>
<th><input type="submit" value="register"></th>
</tr>
<tr><th><?php echo  $validatename ;?></th></tr>
<tr><th><?php echo  $validateusername ;?></th></tr>
<tr><th><?php echo  $validateemail ;?></th></tr>
<tr><th><?php echo  $validatepassword ;?></th></tr>
<tr><th><?php echo  $validategender ;?></th></tr>
<tr><th><?php echo  $validatephone ;?></th></tr>
<tr><th><?php echo  $validateaddress ;?></th></tr>
<tr><th><?php echo  $validatedate ;?></th></tr>


</table>
</form>
</body>
</html>

