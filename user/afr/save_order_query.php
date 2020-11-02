<?php
	require_once '../connect.php';
	if(ISSET($_POST['save'])){
		$customer_id = $_POST['customer_id'];
		$anysuggestion = $_POST['anysuggestion'];
		$status = $_POST['status'];
		$item1 = $_POST['item'];
		if($item1 == 0){
			echo '
				<script type = "text/javascript">
					alert("Please Select an Item");
					window.location = "menu.php";
				</script>
			';
		}else{
			$item2 = implode(", " , $item1);
			$conn->query("INSERT INTO `orders` VALUES('','$customer_id', '$item2', '$anysuggestion', '$status', Now())") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					window.location = "order.php";
				</script>
			';
		}
	}