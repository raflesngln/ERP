<?php
session_start();   
// connect to mongodb
   $m = new MongoClient();
   //echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
   //echo "Database mydb selected";
   $collection = $db->ess_customer_info;

   // now remove the document
   $collection->remove(array("_id"=>$_SESSION['id']));
$collection=$db->ess_custaddress_info;
   $cursor = $collection->find(array("id"=>new MongoId($_SESSION['id'])),array("_id"=>1));
foreach($cursor as $document)
{
$collection->remove(array("_id"=>$document['_id']));
}
session_destroy();
header("location:../index.php");
exit;
?>
