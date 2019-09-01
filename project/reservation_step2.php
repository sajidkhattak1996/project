
<!doctype html>
<!DOCTYPE html>
<html>
<head>

	<title>reservation step  2</title>
	<link rel="stylesheet" type="text/css" href="reservation_step2_css.css">
	
<style >
	.step_box{
	background-color: #0099cc;
	margin-left: 480px;
	margin-top: -386px;
	height: 50px;
	width: 830px;
}
	div.your_reservation{
	background-color: #0099cc;
	margin-left: 80px;
	padding-top: 10px;
	padding-bottom: 0px;
	margin-right: 900px;

}
</style>

</head>
<body>
<div class="booking">
	<h1>  BOOKING  </h1>
</div>

<style>
label{
	color: #fff;
	font-size: 28px;
	word-spacing: 8px;
	letter-spacing: 1.0px;
	margin-left: 20px;
	font-family: monotype corsiva;
	
}
	#sv1{
		font-size: 26px;
		color: yellow;
		margin-bottom: 35px;
		margin-top: 0px;
		border:solid #6699cc 1px;
		margin-right: 10px;
		background-color: #6699cc;

	}
		#sv2{
		font-size: 26px;
		color: yellow;
		margin-bottom: 35px;
		margin-top: 0px;
		border:solid #6699cc 1px;
		margin-right: 10px;
		background-color: #6699cc;
	}

			#sv3{
		font-size: 26px;
		color: yellow;
		margin-bottom: 20px;
		margin-top: 0px;
		border:solid #6699cc 1px;
		margin-right: 10px;
		background-color: #6699cc;
	}

</style>
<div class="your_reservation">
	<h2 style="word-spacing: 10px;">  YOUR RESERVATION  </h2>
 <!--  &nbsp is use to give one empty space -->
	<label>Hostel Branch<h3 id="sv1"><?php echo "&nbsp".$_SESSION['branch'];?></h3></label>
	<label>Hostel Name <h3 id="sv2"><?php echo "&nbsp".$_SESSION['hostelname']; ?></h3></label>
	<label>Number of Day's <h3 id="sv3"><?php echo "&nbsp".$_SESSION['no_night']; ?></h3></label>

<?php

$_SESSION['button_bunk']=0;
$_SESSION['button_exective']=0;
?>	
</div>
<div class="step_box">
	<h3 class="step1"> 1 Chose Date</h3>
	<h3 class="step2"> 2 Select Room</h3>
	<h3 class="step3"> 3 Make a Reservation </h3>
	<h3 class="step4"> 4 Confirmation</h3>
</div>
<div class="pic">
	<img src="ecective_room.jpg">
	<h2> Exective Room </h2>
</div>

<div class="icon">
		<div class="icon1">
			<img  src="bed_icon.png">
			<h6><b> 2 SINGLE BEDS </b></h6>
		</div>

		<div class="icon2">
			<img src="guest-icon.png">
			<h6><b> 2 PEOPLE </b></h6>
		</div>

		<div class="icon3">
			<img src="wifi-icon.png">
			<h6><b> AVAILABLE</b></h6>
		</div>
<div class="detail_1">
<h3><b><pre style="font-family: courier new">
	Description  At Rehman Baba Hostel  No II 
	Peshawar we are providing Bed & Breakfast
	facilities  to  our  guest  and  members.
	For any  member  the  rate  is  only  
	Rs.------/bedding night.
</b></h3></pre>	
</div>
<div class="select_button">
	<!-- <a href="reservation_step2.222.html"> -->
		<form action="Exective.php" method="post">
		<input type="submit" name="select_button" value="SELECT THIS ROOM">

   <!-- price for the room -->
	    <h3>Total Night's Price <br><b>Rs. ---,----.---</b></h3>
		</form>
</div>
</div>


<div class="bunk_bed">
	<div class="pic">
	<img src="Bunk-bed.jpg">

	<h2> BUNK BEDS </h2>
</div>
<div class="icon">
		<div class="icon1">
			<img  src="bed_icon.png">
			<h6><b> 3 BUNKS/ROOM </b></h6>
		</div>

		<div class="icon2">
			<img src="guest-icon.png">
			<h6><b> 6 PERSON/ROOM </b></h6>
		</div>

		<div class="icon3">
			<img src="wifi-icon.png">
			<h6><b> AVAILABLE</b></h6>
		</div>
<div class="detail_1">
<h3><b><pre style="font-family: courier new">
	Description  At Rehman Baba Hostel  No II 
	Peshawar we are providing Bed & Breakfast
	facilities  to  our  guest  and  members.
	For any  member  the  rate  is  only  
	Rs.------/bedding night.
</b></h3></pre>	
</div>
<div class="select_button">
	<form >
	<a href="bunk.php">
		<input type="button" name="select_button" value="SELECT THIS ROOM"></a>

<!-- price for the exective room  -->
	<h3>Total Night's Price <br><b>Rs. ---,----.---</b></h3>
	</form>
</div>


	
</div>



</body>
</html>