<?php

    include("includes/db.php");
    if (!isset($_SESSION['admin_email'])) {
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{

?>

<?php

	if (isset($_GET['delete_cat'])) {
		$delete_cat_id = $_GET['delete_cat'];
		$delete_cat = "delete from category where cat_id='$delete_cat_id'";
		$run_p_cat = mysqli_query($con,$delete_cat);
		if ($run_p_cat) {
			echo "<script>alert('One of Your Category has been Deleted')</script>";
			echo "<script>window.open('index.php?view_cats','_self')</script>";
		}
	}

?>

<?php } ?>