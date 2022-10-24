<?php
if($_SESSION['trole'] != 'Admin'){
	$_SESSION['error']= "Content not allowed";
	echo "<script> 
			window.location.replace('".$base_url."/index.php')
	  </script>";
}