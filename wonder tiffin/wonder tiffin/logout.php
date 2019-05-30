<?php
	session_start();
		//$_SESSION['uname']
	session_destroy();
	echo "<script>document.location='index.php'</script>";

?>