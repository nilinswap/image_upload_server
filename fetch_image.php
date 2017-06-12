<?php

header("content-type:image/jpeg");

$host = 'localhost';
$user = 'root';
$pass = 'dusty';

mysql_connect($host, $user, $pass);

mysql_select_db('orbasmdb');

$name=$_GET['name'];

$select_image="select * from Imagetable where img_name='$name'";

$var=mysql_query($select_image);

if($row=mysql_fetch_array($var))
{
 $image_name=$row["img_name"];
 $image_content=$row["img_obj"];
}
echo $image_content;

?>