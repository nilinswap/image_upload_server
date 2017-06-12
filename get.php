<?php

	$mysqliob = new mysqli('localhost','root','dusty') ;
	$mysqliob->select_db("orbasmdb")or die($mysqliob->$error_list);
	$id=addslashes(_REQUEST['id']);
	$image=$mysqliob->send_query("select * from Itemtable where id=$id");
	$imagedict=

?>