<?php
	require_once '../connect.php';
	$conn->query("DELETE FROM `menu` WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());
	header('location:menu.php');