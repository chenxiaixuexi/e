<?php

    include("includes/db.php");
    if (!isset($_SESSION['admin_email'])) {
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{

?>
<?php
	if (isset($_GET['delete_payment'])) {
		$delete_id = $_GET['delete_payment'];
		$delete_payment = "delete from payments where invoice_no='$delete_id'";
		$run_delete = mysqli_query($con,$delete_payment);
		if ($run_delete) {
			echo "<script>alert('One of your payments has been deleted')</script>";
			echo "<script>window.open('index.php?view_payments','_self')</script>";
		}
	}
?>
<?php } ?>