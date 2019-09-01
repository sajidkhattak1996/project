<!doctype html>
<html>
<head>
	
	<title>reservation step  2.222</title>
	<link rel="stylesheet" type="text/css" href="reservation_step2.222_css.css">
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
		div.your_reservation{
			height: 150px;
		}
	
	</style>
	<div class="your_reservation">
		<h2 style="word-spacing: 10px;">  YOUR RESERVATION  </h2>
	 <!--  &nbsp is use to give one empty space -->
		<label>Hostel Branch<h3 id="sv1"><?php echo "&nbsp".$_SESSION['branch'];?></h3></label>
		<label>Hostel Name <h3 id="sv2"><?php echo "&nbsp".$_SESSION['hostelname']; ?></h3></label>
		<label>Number of Day's <h3 id="sv3"><?php echo "&nbsp".$_SESSION['no_night']; ?></h3></label>
		
	</div>





<div class="step_box" style="margin-top: -382px;">
	<h3 class="step1"> 1 Chose Date</h3>
	<h3 class="step2"> 2 Select Room</h3>
	<h3 class="step3"> 3 Make a Reservation </h3>
	<h3 class="step4"> 4 Confirmation</h3>
</div>
<div class="msg_box">
<h3 class="msg"> <b> <i> Room Selection is Complete</i></b></h3>
<h3 class="msg2"><b> if you want to continue click the Below button  </b></h3>
<h3 class="line"></h3>

<a href="sform.html"><input type="button" name="goto_next_step" value="GO TO NEXT STEP"></a>

</div>


</body>
</html>