<?php 
	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
	if (isset($_POST['firstname'])) {
		$firstname = $_POST['firstname'];
		$mi = $_POST['mi'];
		$lastname = $_POST['lastname'];
		$petname = $_POST['petname'];
		$genderr = $_POST['genderr'];
		$type = $_POST['type'];
		$id = $_POST['id'];

		$update = "UPDATE `tblpets` SET `pet_owner_fn`='$firstname',`pet_owner_mi`='$mi',`pet_owner_ln`='$lastname',`pet_name`='$petname',`pet_gender_id`='$genderr',`pet_type_id`='$type'  WHERE `ID`='$id'";
		$query = mysqli_query($con, $update);
		$msg = "Pet already updated!";
		echo "<script>alert('$msg'); window.location.href='allpets.php'</script>";
	}