<?php
session_start();
if(!isset($_SESSION['type']))
{
header("location:index.php");
}
else if($_SESSION['type']!='Manager')
{
echo '<h1 align="center">You are not authorized to this page go <a href="index.php">back</a></h1>';
}
?>
<html>
<title>Product_Manager</title>
<body>
<h2 align="center"> MANAGER INTERNAL FORM TO RECRUIT EMPLOYEES</h2>
<form action='includes/recruit.php' method='post'>
<table align="center">
<br>
<?php
session_start();
if($_SESSION['error']==1)
{
echo"<h2>UserName Already Exists</h2>";
}
session_destroy();
?>
<tr>
<td>
Post of the employee: </td><td><select name="type">
<option value="PManager">Product Manager</option>
<option value="WManager">Warehouse Manager</option>
</select>
</td>
</tr>
<br>
<tr>
<td>User Name: </td><td><input type="text" name="username" required="required" placeholder="User Name" title="Give A User Name">
</td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="password" required="required" placeholder="**********" title="Provide a password">
</td>
</tr>
<td><input type="submit" value="Recruit"></td><td><input type="reset"><td>
</tr>
</table>
</form>
</body>
</html>
