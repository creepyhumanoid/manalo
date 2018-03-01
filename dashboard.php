<?php 
	include 'session.php';
	include 'header.html';
	include 'sidebar.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
 <div class="card col-md-2" style="margin-left: 300px; margin-top: 10px; background-color: #6666ff;"><i class="fa fa-paw fa-stack-1x" style="font-size: 50pt; text-align: right;"></i>
  <div class="card-block">
    <h3 class="card-title">All Pets</h3>
    <?php  
    	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
    	$result = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets`");
		$row = mysqli_fetch_array($result);
		$count = $row['count'];
		echo "<h1 class='card-subtitle mb-2 text-muted'>".$count."</h1>";
    ?>
  </div>
</div>
<div class="card col-md-2" style="margin-left: 20px; margin-top: 10px; background-color: #00e600;"><i class="fa fa-sticky-note fa-stack-1x" style="font-size: 50pt; text-align: right;"></i>
  <div class="card-block">
    <h3 class="card-title">Registered</h3>
    <?php  
    	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
    	$result = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_status_id`=2");
		$row = mysqli_fetch_array($result);
		$count = $row['count'];
		echo "<h1 class='card-subtitle mb-2 text-muted'>".$count."</h1>";
    ?>
  </div>
</div>
<div class="card col-md-2" style="margin-left: 20px; margin-top: 10px; background-color: #ffff33;"><i class="fa fa-trash-o fa-stack-1x" style="font-size: 50pt; text-align: right;"></i>
  <div class="card-block">
    <h3 class="card-title">Deleted</h3>
    <?php  
    	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
    	$result = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_status_id`=1");
		$row = mysqli_fetch_array($result);
		$count = $row['count'];
		echo "<h1 class='card-subtitle mb-2 text-muted'>".$count."</h1>";
    ?>
  </div>
</div>
<div class="card col-md-2" style="margin-left: 20px; margin-top: 10px; background-color: #bf40bf;"><i class="fa fa-ticket fa-stack-1x" style="font-size: 50pt; text-align: right;"></i>
  <div class="card-block">
    <h3 class="card-title">Pet Types</h3>
    <?php  
    	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
    	$result = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpettype`");
		$row = mysqli_fetch_array($result);
		$count = $row['count'];
		echo "<h1 class='card-subtitle mb-2 text-muted'>".$count."</h1>";
    ?>
  </div>
</div>
<div class="card col-md-4" style="width: 60em; margin-left: 300px; margin-top: 10px; background-color: white; height: 341px;">
  <div class="card-block">
    <h3 class="card-title">Pet Status</h3>
    <canvas id="pie-chart" width="400" height="250"></canvas>
    <?php
    	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
    	$aresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_status_id`=1");
		$arow = mysqli_fetch_array($aresult);
		$acount = $arow['count'];

		$rresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_status_id`=2");
		$rrow = mysqli_fetch_array($rresult);
		$rcount = $rrow['count'];
    ?>
	<script>
		var ar = "<?php echo $acount; ?>";
		var reg = "<?php echo $rcount; ?>";
		new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Registered", "Deleted"],
      datasets: [{
        backgroundColor: ["#8e5ea2","#3cba9f"],
        data: [reg,ar]
      }]
    },
    options: {
      title: {
        display: true
      }
    }
});
	</script>
  </div>
</div>
<div class="card col-md-5" style="width: 35em; margin-left: 1px; margin-top: 10px; background-color: white;">
  <div class="card-block">
    <h3 class="card-title">Pet Genders</h3>
    <canvas id="pie-charta" width="400" height="250"></canvas>
    <?php
    	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');
    	$femresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_gender_id`=1");
		$femrow = mysqli_fetch_array($femresult);
		$femcount = $femrow['count'];

		$maleresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_gender_id`=2");
		$malerow = mysqli_fetch_array($maleresult);
		$malecount = $malerow['count'];
    ?>
	<script>
	var fem = "<?php echo $femcount; ?>";
	var male = "<?php echo $malecount; ?>";
	new Chart(document.getElementById("pie-charta"), {
    type: 'pie',
    data: {
      labels: ["Female","Male"],
      datasets: [{
        backgroundColor: ["#c45850","#3e95cd"],
        data: [fem,male]
      }]
    },
    options: {
      title: {
        display: true,
      }
    }
});
	</script>
  </div>
</div>
<div class="card col-md-9" style="width: 65.5em; margin-left: 300px; margin-top: 10px; background-color: white;">
  <div class="card-block">
    <h3 class="card-title">Pet Types</h3>
    <canvas id="bar" width="400" height="100"></canvas>
    <?php
    	$con = mysqli_connect("localhost","root","","petregistration") or die('Error connecting to MySQL server.');

    	$birdresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_type_id`=1");
		$birdrow = mysqli_fetch_array($birdresult);
		$birdcount = $birdrow['count'];

		$bunnyresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_type_id`=2");
		$bunnyrow = mysqli_fetch_array($bunnyresult);
		$bunnycount = $bunnyrow['count'];

		$catresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_type_id`=3");
		$catrow = mysqli_fetch_array($catresult);
		$catcount = $catrow['count'];

		$dogresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_type_id`=4");
		$dogrow = mysqli_fetch_array($dogresult);
		$dogcount = $dogrow['count'];

		$fishresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_type_id`=5");
		$fishrow = mysqli_fetch_array($fishresult);
		$fishcount = $fishrow['count'];

		$hamsterresult = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tblpets` WHERE `pet_type_id`=6");
		$hamsterrow = mysqli_fetch_array($hamsterresult);
		$hamstercount = $hamsterrow['count'];
    ?>
	<script>
	var ctx = document.getElementById("bar").getContext('2d');
	var bird = "<?php echo $birdcount; ?>";
	var bunny = "<?php echo $bunnycount; ?>";
	var cat = "<?php echo $catcount; ?>";
	var dog = "<?php echo $dogcount; ?>";
	var fish = "<?php echo $fishcount; ?>";
	var hamster = "<?php echo $hamstercount; ?>";
	var line = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Bird", "Bunny", "Cat", "Dog", "Fish", "Hamster"],
	        datasets: [{
	            data: [bird, bunny, cat, dog, fish, hamster],
	            backgroundColor: [
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(54, 162, 235, 0.2)',
	                'rgba(255, 206, 86, 0.2)',
	                'rgba(75, 192, 192, 0.2)',
	                'rgba(153, 102, 255, 0.2)',
	                'rgba(255, 159, 64, 0.2)'
	            ],
	            borderColor: [
	                'rgba(255,99,132,1)',
	                'rgba(54, 162, 235, 1)',
	                'rgba(255, 206, 86, 1)',
	                'rgba(75, 192, 192, 1)',
	                'rgba(153, 102, 255, 1)',
	                'rgba(255, 159, 64, 1)'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	    	legend: {
            display: false
         },
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});
	</script>
  </div>
</div>
<?php include 'footer.html'; ?>