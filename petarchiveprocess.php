<?php
	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$update = "UPDATE `tblpets` SET `pet_status_id`=1 WHERE `ID`='$id'";
		$query = mysqli_query($con,$update);
		$msg = "Pet already deleted!";
		echo "<script>alert('$msg'); window.location.href='allpets.php'</script>";
	}