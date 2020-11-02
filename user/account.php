<?php
	require_once 'connect.php';
	$q_customername = $conn->query("SELECT * FROM `customer` WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
	$f_customername = $q_customername->fetch_array();
	$customer_name = $f_customername['name'];