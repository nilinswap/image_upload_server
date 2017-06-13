<?php // block any attempt to the filesystem
	if (isset($_GET['file']) && basename($_GET['file']) == $_GET['file']) {
		$filename = basename($_GET['file']);
	} 
	else {
		$filename = NULL;
	}
	// define error message
	$err = 'Sorry, the file you are requesting is unavailable.';
	//echo $filename;
	if (!$filename) {
	// if variable $filename is NULL or false display the message
		echo $err;
	} 
	else {
	// define the path to your download folder plus assign the file name
		$path = 'uploadsano/'.$filename;
		//echo $filename;
		// check that file exists and is readable
		if(!is_readable($path))
			echo "doesn't read";
		if (file_exists($path) && is_readable($path)) {
			// get the file size and send the http headers
			//echo $filename;
			$size = filesize($path);
			header('Content-Type: image/jpeg');

	header('Content-Length: '.$size);

	header('Content-Disposition: attachment; filename='.$filename);
	//echo $filename;
	//header('Content-Transfer-Encoding: binary');
			$file = @ fopen($path, 'rb');
			if ($file) {
			// stream the file and exit the script when complete
				fpassthru($file);
				exit;
			} 
			else {
				echo $err;
			}
		} 
		else {
			echo $err;
		}
	}
?>


