<?php
	require_once 'connect.php';
	$q_edit_admin = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
	$f_edit_admin = $q_edit_admin->fetch_array();
?>
<form method = "POST" action = "edit_admin_query.php?admin_id=<?php echo $f_edit_admin['admin_id']?>" enctype = "multipart/form-data">
<div class  = "modal-body">
        <div class = "form-group">
			<label>Username:</label>
			<span><?php echo $f_edit_admin['username']?></span>
		</div>
        <div class = "form-group">
			<label>Name:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_admin['name']?>" name = "name" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Mobilenumber:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_admin['mobilenumber']?>" name = "mobilenumber" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Address:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_admin['address']?>" name = "address" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Password:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_admin['password']?>" name = "password" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	