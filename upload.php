
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Orbasm &mdash; A free HTML5 Template by FREEHTML5.CO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
		<script src="jquery-1.9.0.min.js"></script>
		<script>
		function validateImage() {
			var img = $("#img_file").val();
		 
			var exts = ['jpg','jpeg','png','gif', 'bmp'];
			// split file name at dot
			var get_ext = img.split('.');
			// reverse name to check extension
			get_ext = get_ext.reverse();
		 	
			if (img.length > 0 ) {
				if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
				  return true;
				} else {
					 alert("Upload only jpg, jpeg, png, gif, bmp images");
					return false;
				}			
			} else {
				alert("please upload an image");
				return false;
			}
			return false;
		}
		</script>
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div id="fh5co-offcanvass">
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="icon-cross"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand" href="index.html">Orbasm</a></h1>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li class="active"><a href="about.html">About</a></li>
			<li><a href="pricing.html">Pricing</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		<h3 class="fh5co-lead">Connect with us</h3>
		<p class="fh5co-social-icons">
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-youtube"></i></a>
		</p>
	</div>
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a>
					<a class="navbar-brand" href="index.html">Orbasm</a>		
				</div>
			</div>
		</div>
	</header>
	<!-- END .header -->
			<?php
				if(isset($_POST["submit"])){
					
					//php7 doesn't support mysql lib so mysqli is used instead,below is a mysqli object.
					$mysqliob = new mysqli('localhost','root','dusty') ;
					
					$mysqliob->select_db("orbasmdb")or die($mysqliob->$error_list);
					
					$file=$_FILES["img_file"]["tmp_name"];//name of file in temporary directory of server

					$image=addslashes(file_get_contents($_FILES['img_file']['tmp_name']));//addslashes is required to prevent sql injection. what file get contents get is mostly a binary object therefore in DB make space for a 'blob' object.
					$image_name=addslashes($_FILES['img_file']['name']); 
					
						
					$image_size=getimagesize($file);
					if ($image_size==false)
						die( "<div class='alert alert-danger'>so you do not know what an <strong>image</strong> is..
</div>");
					//echo "here";
					echo "<h5> $image_name is uploaded</h5>";
					$insert =mysqli_query($mysqliob,"INSERT INTO Imagetable (`img_name`,`img_obj`) VALUES ('".$image_name."','".$image."' )") or die(mysqli_error($mysqliob));
					
					if(!$insert)
						echo "some shit occured during uploading";
					else
					{	
						
						$last_id=$mysqliob->insert_id;
						echo "here";
						echo $last_id;

											 echo "Image uploaded.<p /> Your image:<p />"; 
											 $image3 = "SELECT * FROM Imagetable where id=$last_id"; 
											 $r=mysqli_query($mysqliob, $image3); 
											 $row = mysqli_fetch_array($r);
											  echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['img_obj'] ) . '" />'; 
											  echo $row['img_name'];
						//echo 'and your image looks like<br><img src="get.php?id='.$lastid.'">';
						//echo "here";
						//echo "here"; echo "<img src=get.php?id=$lastid>";
					}
						


				}
				else
				{	echo "<h4>please upload an image</h4>
						<form class='form-inline' method='post' action='' name='f' enctype='multipart/form-data' ><!--enctype,method and action are imp.-->
						  <div class='form-group'>
						    <label class='sr-only' for='exampleInputAmount'>img upload</label>
						    <div class='input-group'>
						      
						      <input type='file'  id='img_file' name='img_file' placeholder='from root'><!--type and name are imp.-->
						      
						    </div>
						  </div>
						  <button type='submit' class='btn btn-primary' value='Submit' name='submit' onSubmit='return validateImage();' >upload</button>
						</form>";

				}
			?>

	
			
			
	<footer id="fh5co-footer">
		
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="fh5co-social-icons">
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-instagram"></i></a>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="#"><i class="icon-youtube"></i></a>
					</p>
					<p><small>&copy; Orbasm Free HTML5 Template. All Rights Reserved. <br>Designed by: <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> | Images by: <a href="http://pexels.com" target="_blank">Pexels</a> </small></p>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Salvattore -->
	<script src="js/salvattore.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	

	
	</body>
</html>
