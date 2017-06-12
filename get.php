
<?php
	
	$mysqliob = new mysqli('localhost','root','dusty') ;
	$mysqliob->select_db("orbasmdb");//or die($mysqliob->error_list);
	
	$id=addslashes(_REQUEST['id']);
	$image=$mysqliob->send_query("select * from Itemtable where id=1");
	$imagedict=$image->fetch_assoc();
	$imagething=$imagedict['img_ob'];

	header("Content-type:image/jpeg");
	echo  $imagething;
	
?>
