<?php
	require_once 'connect.php';
	$q_edit_customer = $conn->query("SELECT * FROM `customer` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
	$f_edit_customer = $q_edit_customer->fetch_array();
?>
<form method = "POST" action = "edit_customer_query.php?customer_id=<?php echo $f_edit_customer['customer_id']?>" enctype = "multipart/form-data">
<div class  = "modal-body">
        <div class = "form-group">
			<label>Username:</label>
			<span><?php echo $f_edit_customer['username']?></span>
		</div>
        <div class = "form-group">
			<label>Name:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_customer['name']?>" name = "name" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Mobilenumber:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_customer['mobilenumber']?>" name = "mobilenumber" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Address:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_customer['address']?>" name = "address" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Password:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_customer['password']?>" name = "password" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	