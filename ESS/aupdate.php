<?php
SESSION_START();
if(!isset($_SESSION['user']))
header("location:login.php");
?>
<html>
<title>Address Update</title>
<link rel="stylesheet" type="text/css" href="css/add_update.css">
<body>
<h1 align="center">Update your address details</h1>
<form action='includes/add_update.php' method='post'>
<table align="center">
<tr><td>Address Type </td><td><input type="radio" name="title" value="Bill">Billing <input type="radio" name="title" value="Mail">Mailing <input type="radio" name="title" value="Common">Common</td></tr>
<br>
<tr>
<td> Address Line 1: </td><td><input type="text" name="email" required="required" >
</td>
</tr>
<tr>
<td>Line 2: </td><td><input type="text" name="uname" required="required"></td>
</tr>
<tr>
<td>Line 3:</td><td><input type="text" name="password" required="required" ></td>
</tr>
<tr>
<td>Landmark: </td><td><input type="text" name="tnumber" >
</tr>
<tr>
<td>
City: </td><td><input type="text" required="required" name="fname" >
</td>
</tr>
<br>
<tr>
<td>Pincode: </td><td><input type="number" name="lname" >
</td>
</tr>
<tr>
<td>State: </td><td><input type="text" name="mnumber" required="required" >
<br>



<tr>
<td><input type="submit"></td><td><input type="reset">
</tr>
</table>
</form>
</body>
</html>

