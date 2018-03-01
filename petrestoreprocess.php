<?php
	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$update = "UPDATE `tblpets` SET `pet_status_id`=2 WHERE `ID`='$id'";
		$query = mysqli_query($con,$update);
		$msg = "Pet already restore!";
		echo "<script>alert('$msg'); window.location.href='deletedpets.php'</script>";
	}