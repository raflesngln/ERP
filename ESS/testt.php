<?php
$m = new MongoClient();
$database = $m->selectDB('db_ess')->getGridFS();
	$image = $database->findOne(array('_id' =>new MongoId($_GET['id'])));
	header ( 'Content-type: image/jpg;' );
	echo $image->getBytes ();	
?>
