<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
$username=$_POST["username"];
   echo "Database mydb selected";
   $collection = $db->ess_employee;
   echo "Collection selected succsessfully";
$cursor = $collection->find(array('username' => $username));
if($cursor->count()>0)
{
session_start();
$_SESSION['error']='1';
header('location:../manager.php');
break;
}  
$password=$_POST["password"];
$password=md5($password);   
$type=$_POST['type'];
$document = array( 
      "username" => "$username", 
      "password" => "$password", 
      "type" => "$type",
      );
   $collection->insert($document);
   header("location:../manager.php");
?>

