<?php
	require_once 'connect.php';
	$q_edit_order = $conn->query("SELECT * FROM `orders` WHERE `order_id` = '$_REQUEST[order_id]'") or die(mysqli_error());
	$f_edit_order = $q_edit_order->fetch_array();
?>
<form method = "POST" action = "../edit_order_query.php?order_id=<?php echo $f_edit_order['order_id']?>" enctype = "multipart/form-data">
<div class  = "modal-body">
        <div class = "form-group">
		<h5><label>Order ID:</label></h5>
			<span><?php echo $f_edit_order['order_id']?></span>
		</div>
		<div class = "form-group">
		<h5><label>Customer ID:</label></h5>
			<span><?php echo $f_edit_order['customer_id']?></span>
		</div>
		<div class = "form-group">
			<h5><label>Ordered Items:</label></h5>
			<span><?php echo $f_edit_order['item']?></span>
		</div>
		<div class = "form-group">
		<h5><label>Date:</label></h5>
			<span><?php echo $f_edit_order['date']?></span>
		</div>
        <div class = "form-group">
		<h5><label>Select Order Status:</label></h5>
            <select name = "status" value = "<?php echo $f_edit_order['status']?>" required = "required" class = "form-control">
                <option>Order Pending</option>
                <option>Order Accepted</option>
                <option>Order Out for Delivery</option>
                <option>Order Delivered</option>
            </select>
        </div>
		<div class = "form-group" style="visibility:hidden;">
		<h5><label>Suggestion:</label></h5>
			<span><?php echo $f_edit_order['anysuggestion']?></span>
		</div>
	</div>
	<div class = "modal-footer">
	<div class = "modal-footer">
		<button  class = "btn btn-success"  name = "edit_order"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	