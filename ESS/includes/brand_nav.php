<?php
$m = new MongoClient();
$db=$m->db_ess;
$collection=$db->ess_item_info;
$cat=$_GET['cat'];
$brand=$_GET['brand'];
$cursor=$collection->find(array('cat'=>$cat,'brand'=>$brand));
$previous="";
foreach($cursor as $document)
{
if($document['brand']==$previous)
continue;
echo'<div id="contain">';
echo '<iframe src="testt.php?id='.$document['img_id'].'" ></iframe>';
foreach($cursor as $docu)
{
echo' <h4>Category: '.$docu['cat'].'</h4>';
echo' <h4>Brand: '.$docu['brand'].'</h4>';
echo' <h4>Model: '.$docu['model'].'</h4>';
include('testtt.php');
echo'<h4><a href="product.php?model='.$docu['model'].'&brand='.$docu['brand'].'&img_id='.$docu['img_id'].'" target="_blank">Purchase</a></h4>';
break;
}
echo'</div>';
$previous=$document['brand'];
}
?>
