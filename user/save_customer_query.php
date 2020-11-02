<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$username = $_POST['username'];
		$name = $_POST['name'];
		$mobilenumber = $_POST['mobilenumber'];
        $address = $_POST['address'];
        $password = $_POST['password'];
		$q_checkadmin = $conn->query("SELECT * FROM `customer` WHERE `username` = '$username'") or die(mysqli_error());
		$v_checkadmin = $q_checkadmin->num_rows;
		if($v_checkadmin == 1){
			echo '
				<script type = "text/javascript">
					alert("Username already taken");
					window.location = "index.php";
				</script>
			';
		}else{
			$conn->query("INSERT INTO `customer` VALUES('', '$username', '$name', '$mobilenumber', '$address', '$password')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Record");
					window.location = "index.php";
				</script>
			';
		}
	}	