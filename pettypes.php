<?php 
	include 'session.php';
	include 'header.html';
	include 'sidebar.php';
?>

<div class="card" style="margin-left:20em; border: none; margin-top: 2%; width: 35em;">
	<div class="card-block">
		<h3>Pet Types</h3><br>
		<button type="button" class="btn btn-outline-secondary" data-target='#add' data-toggle='modal'>ADD PET TYPE</button><br><br>
		<div class="modal fade" id="add">
			<div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title">ADD PET TYPE</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>
			      <div class="modal-body" style="margin-top: 5%;">
			         <form role="form" id="contact-form" method="POST" action="addpettype.php">
			            <div class="form-group">
                		<label for="type">New Pet Type</label>
                   		<div class="input-group">
                        	<div class="input-group-addon"><span class="fa fa-paw"></span></div>
                        		<input type="text" class="form-control" id="type" placeholder="Pet Type" name="type" >
                    		</div>
                		</div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-success">SUBMIT</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
			      
			    </div>
			  	</div>
			   </div>
		    </div>
	    </div>
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>ID</th>
					<th>Pet Type</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
		            $pets = "SELECT * FROM tblpettype";
		            $petsquery = mysqli_query($con,$pets);
		            while ($con=mysqli_fetch_assoc($petsquery)) {
						echo "<tr>";
						echo "<td>".$con['ID']."</td>";
						echo "<td>".$con['type']."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include 'footer.html'; ?>