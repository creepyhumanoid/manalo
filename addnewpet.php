<?php
$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
if (isset($_POST['firstname'])) {
	$firstname = $_POST['firstname'];
	$mi = $_POST['mi'];
	$lastname = $_POST['lastname'];
	$petname = $_POST['petname'];
	$gender = $_POST['gender'];
	$type = $_POST['type'];


		$insert = "INSERT INTO `tblpets`(`pet_owner_fn`, `pet_owner_mi`, `pet_owner_ln`, `pet_name`, `pet_gender_id`,`pet_type_id`, `pet_status_id`) VALUES ('$firstname','$mi','$lastname','$petname','$gender','$type',2)";
		$query = mysqli_query($con, $insert);
		$msg = $petname." already added!";
		echo "<script>alert('$msg'); window.location.href='newpet.php'</script>";
}