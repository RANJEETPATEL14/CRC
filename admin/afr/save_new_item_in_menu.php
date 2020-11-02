<?php
	require_once '../connect.php';
	if(ISSET($_POST['save'])){
		$item = $_POST['item'];
		$type = $_POST['type'];
		$price = $_POST['price'];
		$conn->query("INSERT INTO `menu` VALUES('', '$item','$type', '$price')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					window.location = "menu.php";
				</script>
			';
	}	