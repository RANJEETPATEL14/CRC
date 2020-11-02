<?php
	require_once 'connect.php';
        $status = $_POST['status'];
		$conn->query("UPDATE `orders` SET  `status` = '$status' WHERE `order_id` = '$_REQUEST[order_id]'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully Edited");
					window.location = "afr/order.php";
				</script>
			';	