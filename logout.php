<?php include 'components/head.php';?>

<?php

if  (isset($_GET['logout'])) {
		// echo "posst";
	 unset($_SESSION["user_status"]);
	 session_unset();
	 session_destroy();
	 header("Location: landing.php");
	 exit;
}

?>