<?php
	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
	if (isset($_POST['type'])) {
		$type = $_POST['type'];

		$check = mysqli_query($con,"SELECT * FROM tblpettype WHERE `type`='$type'");
		$checkrows = mysqli_num_rows($check);
		if ($checkrows>0) {
			$exist = "Pet type already exists!";
			echo "<script type='text/javascript'> alert('$exist'); window.location.href='pettypes.php';</script>";
		}
		else{
			$insert = "INSERT INTO `tblpettype`(`type`) VALUES ('$type')";
			$query = mysqli_query($con,$insert);
			$msg = "Pet Type already addded!";
			echo "<script type='text/javascript'> alert('$msg'); window.location.href='pettypes.php';</script>";
		}
	}