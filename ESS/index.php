<?php
SESSION_START();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
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
<!--<div id="left">
<p><?php include("fram.php");?></p><br>
</div>-->
<div style="width:400px; height:400px;float:left;padding-top:100px;position:relative;padding-left:200px">
<img  style="float:left" src="images/front.gif">
</div>

<div style="width:400px; height:400px;float:left;padding-top:100px;position:relative">
<img  style="float:left" src="images/front2.gif">
</div>
<!--<div id="left2">
<p>Include an iframe containing a php code to obtain access for on demand products.</p><br><p>Format=>4 Images and name</p>
</div>
<div id="right">
<p>Include an iframe containing a php code to obtain access for discounted products.</p><br><p>
Format=> 10 Product name, and it's discount price</p>-->
</div>
</div>
</div>
</div>
<?php include('includes/footer.php');?>
</body>
</html>

