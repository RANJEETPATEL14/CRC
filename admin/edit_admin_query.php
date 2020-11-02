<?php
	require_once 'connect.php';
	$name = $_POST['name'];
	$mobilenumber = $_POST['mobilenumber'];
	$address = $_POST['address'];
	$password = $_POST['password'];
		$conn->query("UPDATE `admin` SET `name` = '$name', `mobilenumber` = '$mobilenumber', `address` = '$address', `password` = '$password'  WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "admin.php"; 
			</script>
		';	