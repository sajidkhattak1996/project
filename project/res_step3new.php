<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<!-- <meta http-equiv="refresh" content="20"> -->
	<title>reservation step3 </title>
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
	<h3 class="step2" style="color: #999999;"> 2 Select Room</h3>
	<h3 class="step3" style="color: #fff;"> 3 Make a Reservation </h3>
	<h3 class="step4"> 4 Confirmation</h3>
</div>
<style>
	.containar{
		background-color: lightblue;
		border:solid #0099cc 1px;
		border-radius: 5px;
		margin-left: 480px;
		margin-right: 40px;
		margin-top: 10px;



	}
#Fn{color: #000;}
#fn{margin-top: 10px;margin-left: 20px;width: 160px;height: 22px;margin-bottom: 20px;}
#Ln{margin-left: 100px;color: #000;}
#ln{margin-top: -20px;	width: 160px;height: 22px;margin-bottom: 10px;}
#Fathername{color: #000;}
#fathername{width: 160px;height: 22px;margin-bottom: 20px;	}
#Email{margin-left: 120px;letter-spacing: 3px;color: #000;}
#email{width: 160px;height: 22px;margin-bottom: 10px;margin-top: -30px;margin-left: 30px;}
#CNIC{letter-spacing: 3px;margin-left: 50px;color: #000;}
#cnic{margin-left: 45px;width: 160px;height: 22px;margin-bottom: 30px;}
#mno{margin-left: 10px;width: 160px;height: 22px;}
#Mno{margin-left: 90px;color: #000;}
#Add{color: #000;margin-left: 40px;}
#add{width: 570px;height: 45px;margin-left: 45px;}

#Submit{
	height: 60px;
	width: 578px;
	margin-left: 180px;
	margin-top: 30px;
	margin-bottom: 20px;
	border:solid 2px #0099cc;
	border-radius: 12px;
	background-color: #0099cc;
	color: #fff;
	letter-spacing: 2px;
	word-spacing: 5px;
}
</style>

<div class="containar">
	<form id="userdata" onsubmit="return val();" action="res3_db.php" method="post">
		
		<div class="row">
		
				<label id="Fn">First Name:</label>
				<input type="text" name="fname" id="fn" placeholder="First name" pattern="[a-zA-z]*" title="Enter Alphabat Only">
				<label id="Ln">Last Name:</label>
				<input type="text" name="lname" id="ln" placeholder="Last name" pattern="[(a-zA-z)+(0-9)?]*" title="Alphabat and Number are accepted">
  
				<label id="Fathername">Father Name:</label>
				<input type="text" name="fathername" id="fathername" placeholder="father name" pattern="[\w]{3,32}" title="required pattern is jan_khan "> 

				<label id="Email">Email:</label>
				<input type="text" name="email" id="email" placeholder="Email" pattern="[A-Za-z]([a-zA-z0-9]*[-_+.]?)*@([a-zA-z]+[.]*][a-zA-z]{2,6})">
 
				
				<label id="CNIC">CNIC:</label>
				<input type="number" id="cnic" name="cnic"placeholder="Enter cnic" pattern="[0-9]{0,15}">

				<label id="Mno">Mobile NO:</label>
				<input type="text" name="mobile_no" placeholder="mobile number" id="mno" pattern="[0-9]{7,15}" title="Mobile Number Not less then 7 digit">

				<label id="Add">Address:</label>
				<input type="text" name="address" id="add" placeholder="Enter Address" pattern="[A-Za-z0-9'\.\-\s\,]">
			
		</div>
		<input type="submit" name="submit" value="BOOK NOW BY EMAIL AND WE WILL CONTACT YOU BACK" id="Submit" onsubmit="return val();">
		<h3 id="errorhead" style="color: red;word-spacing: 5px;letter-spacing: 1px;text-align: center;margin-top: -10px;"><b><i></i></b></h3>
	</form>
</div>


</body>
</html>
<script type="text/javascript">
	function val(){
		var fname=document.getElementById('fn');
		var lname=document.getElementById('ln');
		var fathername=document.getElementById('fathername');
		var email=document.getElementById('email');
		var cnic=document.getElementById('cnic');
		var mobile=document.getElementById('mno');
		var address=document.getElementById('add');
	if (fname.value.length==0)
	 {document.getElementById('errorhead').innerText ="* First Name not be empty *";fname.focus();return false;}
	if (lname.value.length==0) 
		{document.getElementById('errorhead').innerText="* Last name is empty *";lname.focus();return false;}
	if (fathername.value.length==0) 
	{document.getElementById('errorhead').innerText="* Father name is empty *";fathername.focus();return false;}
	if (email.value.length==0) 
		{document.getElementById('errorhead').innerText="* Email is Emply *";email.focus();return false;}
	if (cnic.value.length==0) 
		{document.getElementById('errorhead').innerText="* Cnic must be fill * ";cnic.focus();return false;}
	if (mobile.value.length==0) 
		{document.getElementById('errorhead').innerText="* Mobile number filed is empty * ";mobile.focus();return false;}
	if (address.value.length==0) 
		{document.getElementById('errorhead').innerText="* Address is Emply * ";address.focus();return false;}

	}
</script>
