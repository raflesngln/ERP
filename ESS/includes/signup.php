<?php
session_start();
if(isset($_SESSION['user']))
{
header("location:../login.php");
}
$email=$_POST['email'];
$uname=$_POST['uname'];
$password=md5($_POST['password']);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$title=$_POST['title'];
$mnumber=$_POST['mnumber'];
$tnumber=$_POST['tnumber'];
$stdnumber=$_POST['stdnumber'];
   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_customer_info;
$cursor = $collection->find(array('E-mail' => $email));
$cursor2 = $collection->find(array('Username' => $uname));
if($cursor->count()>0)
{
$_SESSION['error']='1';
header('location:../csignup.php');
}   
else
if($cursor2->count()>0)
{
$_SESSION['error']='2';
header('location:../csignup.php');
}
else
{
$document = array( 
      "E-mail"=>$email,
      "Title" => $title, 
      "Username"=>$uname,
      "Password"=>$password,
      "Firstname"=>$fname,
      "Lastname"=>$lname,
      "Mobilenumber"=>$mnumber,
	"STDcode"=>$stdnumber,
	"Telephonenumber"=>$tnumber

);
   $collection->insert($document);
   
header("location:../login.php");
}
?>
