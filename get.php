<html>
<body>
<?php
	
	$mysqliob = new mysqli('localhost','root','dusty') ;
	$mysqliob->select_db("orbasmdb");//or die($mysqliob->error_list);
	$id=$_REQUEST['id'];
	//echo $id;
	
	
											// echo "Image uploaded.<p /> Your image:<p />"; 
											 $image3 = "SELECT * FROM Imagetable where id=$id"; 

											 $r=mysqli_query($mysqliob, $image3); 
											 $row = mysqli_fetch_array($r);
											// echo $row['img_name'];
											 //echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['img_obj'] ) . '" />'; 
											  /*echo $row['img_name'];
											  */
											  //header("content-type:image/png");
											  echo data:image/jpeg;base64,' . base64_encode( $row['img_obj'] ) . ';
	
?>
</body>
</html>