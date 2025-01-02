<?php

session_start();
require_once('connector.php');

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
	  $CID=$_POST['CID'];
	  $str =$_POST['PIN'];
	  $en_PIN = base64_encode($str);

	  $sql = "SELECT * FROM carers WHERE customer_id='" . $CID . "' AND PIN='" . $en_PIN . "'";
	  $db = Database::getInstance();
	  $result = $db->getConnection()->query($sql);
	  $isLogin = mysqli_fetch_array($result);

	  if($isLogin['customer_id']){

		$_SESSION['CID1'] = $isLogin['customer_id'];
 		echo "<script> location.href='results_table.php'; </script>";

	  }
	  else{
		echo "<script> location.href='index.php'; </script>";
	  }
	}

?>