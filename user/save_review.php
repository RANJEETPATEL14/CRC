<?php
	require_once 'connect.php';
	if(ISSET($_POST['submit'])){
		$name = $_POST['name'];
		$yourexperience = $_POST['yourexperience'];
			$conn->query("INSERT INTO `review` VALUES('', '$name', '$yourexperience')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					window.location = "index.php";
				</script>
			';
		}