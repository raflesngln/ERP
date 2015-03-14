<?php session_start();?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/products_styles.css">
<script src="scripts/window.js"></script>
<?php include('includes/header.php')?>
<?php
if(isset($_SESSION['user']))
{?>
<form id="form2" action="logout.php">
<input type="submit" value="Logout"/>
</form>
<form id="form1" action="profile.php">
<input type="submit" value="Profile"/>
</form>
<?php
}
else
{?>
<form name="form2" id="form2" method="post" onsubmit="openWindow(500, 500,'signup.html');">
<input type="submit" value="Sign Up"/>
</input>
</form>
<form id="form1" action="login.php">
<input type="submit" value="Login">
</input>
</form>
<?php
}?>
<?php include('includes/navigation.php')?>
<div id="content">
<div id="content_cen">
<div id="content_sup">
<div id="left">
<!--Code to put the brands-->
<?php include('includes/nav.php');?> 
</div>
<div id="right">
<h1 align="center">Available Products</h1>

<iframe name="right" src="brand_products.php" >
</iframe>
</div>
</div>
</div>
</div>
<?php include('includes/footer.php');?>
</body>
</html>
