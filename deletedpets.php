<?php 
	include 'session.php';
	include 'header.html';
	include 'sidebar.php';
?>

<div class="card" style="width: 100rem; margin-left:20em; border: none; margin-top: 2%;">
	<div class="card-block">
		<h3>Deleted Pets</h3><br>
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>ID</th>
					<th>Pet Owner's Name</th>
					<th>Pet's Name</th>
					<th>Pet's Gender</th>
					<th>Pet's Type</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
		            $pets = "SELECT * FROM tblpets WHERE `pet_status_id`=1";
		            $petsquery = mysqli_query($con,$pets);
		            while ($con=mysqli_fetch_assoc($petsquery)) {
						$conx = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');

						$typeid = $con['pet_type_id'];
						$seltype = "SELECT * FROM tblpettype WHERE `ID`='$typeid'";
						$typequery = mysqli_query($conx,$seltype);
						$fetchtype = mysqli_fetch_assoc($typequery);
						$vtype = $fetchtype['type'];

						$genderid = $con['pet_gender_id'];
						$selgender = "SELECT * FROM tblpetgender WHERE `ID`='$genderid'";
						$genderquery = mysqli_query($conx,$selgender);
						$fetchgender = mysqli_fetch_assoc($genderquery);
						$genders = $fetchgender['gender'];

						$statusid = $con['pet_status_id'];
						$selstatus = "SELECT * FROM tblstatus WHERE `ID`='$statusid'";
						$statusquery = mysqli_query($conx,$selstatus);
						$fetchstatus = mysqli_fetch_assoc($statusquery);
						$status = $fetchstatus['status'];

						$fullname = $con['pet_owner_fn']." ".$con['pet_owner_mi']." ".$con['pet_owner_ln'];

						echo "<tr>";
						echo "<td>".$con['ID']."</td>";
						echo "<td>".$fullname."</td>";
						echo "<td>".$con['pet_name']."</td>";
						echo "<td>".$genders."</td>";
						echo "<td>".$vtype."</td>";
						echo "<td>".$status."</td>";
						echo "<td>"."<button type='button' class='btn btn-success' data-target='#restore-".$con['ID']."' data-toggle='modal'>RESTORE</button>"."</td>";
						echo "</tr>";
				?>
			<div class="modal fade" id="restore-<?php echo $con['ID']; ?>">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-header">
        					<h4 class="modal-title">RESTORE</h4>
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
      					</div>
      					<div class="modal-body" style="margin-top: 5%;">
         					<form role="form" id="contact-form" method="POST" action="petrestoreprocess.php">
            				<p>Do you really want this to restore?</p>
      						<div class="modal-footer">
						        <input type="hidden" name="id" id="id" value="<?php echo $con['ID']; ?>">
						        <button type="submit" class="btn btn-success">YES</button>
						        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
        						</form>
      						</div>
      					</div>
  					</div>
				</div>
			</div>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php include 'footer.html'; ?>