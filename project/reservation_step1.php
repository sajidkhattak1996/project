
<!doctype html>
<html>
<head>
	<meta http-equiv="refresh" content="1000">
	<title>reservation step  1</title>
	<link rel="stylesheet" type="text/css" href="reservation_step1_css.css">
<!--  the below link is for to create the calender  -->
<!--     <link rel="stylesheet" href="css/theme1.css"/> -->
<style>
	/*css for valiadation msg which is head */
	#head{
		color: red;
		font-size: 20px;
		margin-left: 120px;

	}

</style>

</head>
<body>
<div class="booking">
	<h1>  BOOKING  </h1>

</div>

<form name="check_avalaibility"  onsubmit="return for_date()" onsubmit="return l()"  action="rs1.php" method="post">
	
	<div class="your_reservation">
		<h2>  YOUR RESERVATION  </h2>
		<h3> Hostel Branches </h3>
		
		<select name="select_branch" onblur="return f1()">
		<option>Select</option>
		<option value="Islamabad">Islamabad</option>
		<option value="Lahore">Lahore</option>
		<option value="Peshawar">Peshawar</option>
		<option value="Karachi">Karachi</option>
		<option value="Mardan">Mardan</option>	

		</select><br><br><br><br>

		<label id="d">Number of Days  </label>
		<p id="dayhead"name="night" style="color: #fff;margin-left: 25px;font-size: 20px; border: solid yellow 2px; width: 100px;height: 25px;" > Day =</p>


	</div>
				<style type="text/css">
						#calender{
								margin-left: 580px;
								margin-top: -300px;
							}
						#calender input{
							width: 257px;
							height: 30px;
							border: solid #0099cc 1.4px;
							color: #0099cc;
							font-size: 18px;
							letter-spacing: 1.5px;
							word-spacing: 5px;
							border-bottom: solid 2px;
							border-right: solid 2.5px;
							}
						#date1{
						
						font-size: 25px;
						}
						#date2{
							margin-top: -91px;
							margin-left: 380px;
							font-size: 25px;
						}
					#date_valiadation{
					margin-left: 100px;
					color: red; word-spacing: 5px;
					letter-spacing: 1px;
					font-size: 18px;
					margin-top: 10px;
					}
					
				</style>
<div id="calender">

		<div id="date1" >
			<label id="cin1"><h5 style="margin-bottom: 0px;">Check In Date</h5></label>
			<input type="Date" id="d1" name="check_in">

		</div>

		<div id="date2" >
			<label id="cout1"><h5 style="margin-bottom: 0px;">Check Out Date</h5></label>
			<input type="Date" id="d2" name="check_out" onchange="return night()" onchange="return for_date()">
		</div>
</div>

 <!-- 	BUTTON CHECK VAILAIBILITY  -->
 	<a href="reservation_step2.html" onclick="return for_date()">	
		<input type="submit" name="check" id="b1" value="CHECK_AVALAIBALITY" onclick="return f1()" onclick="return night()" onclick="return l()"></a>


</form>

<style>
	.step_box{
		margin-top: -343px;
	}
	#b1{
		margin-left: 100px;
		margin-top: 150px;
	}
</style>

	

<div class="step_box">
	<h3 class="step1"> 1 Chose Date</h3>
	<h3 class="step2"> 2 Select Room</h3>
	<h3 class="step3"> 3 Make a Reservation </h3>
	<h3 class="step4"> 4 Confirmation</h3>
</div>

<div id="valiadation_msg" >
		<div style="margin-left: 550px;">
			<p id="date_valiadation" ></p>
			<p id="d1_valiadation" style="font-size: 18;color: red;word-spacing: 5px;margin-left: 20px;margin-top: 100px;"></p>
			<p id="d2_valiadation" style="font-size: 18;color: red;word-spacing: 5px;margin-top: 100px ;margin-left: 400px;"></p>
		</div>

		<!-- msg for branch selection -->
		<div style="margin-left: 0px;margin-top: -210px;">
			<p id="head"></p>
		</div>

</div>

</body>
</html>

<script type="text/javascript">
	function f1(){
	 	var hbranch = document.forms["check_avalaibility"]["select_branch"].value;
		
	 	if (hbranch=="Select") {
	 		// alert("Please Select the Branch of the Hostel");

				document.getElementById('head').innerText = "* Please Select the Hostel Branch *"; // This segment displays the validation rule for  fields
			return false;
	 	}
	}

	function for_date(){
	 	var d1=document.forms["check_avalaibility"]["check_in"].value;
	 	var d2=document.forms["check_avalaibility"]["check_out"].value;

	 	if (d1==""  &  d2=="") {
	 		document.getElementById('date_valiadation').innerText = "* Please Select the Check In and Check Out Dates *";
	 		return false;
	 	}
	 	if (d1=="") {
			document.getElementById('d1_valiadation').innerText = "* Please Select Check In Date*"
	 		return false;
	 	}
	 	if (d2=="") {
	 		document.getElementById('d2_valiadation').innerText = "* Please Select Check Out Date*"
	 		return false;
	 	}

	 	//date condition for entering 
	 		if (!d1==""  &  !d2=="") {
			if(d1>d2){
	 		 document.getElementById('date_valiadation').innerText = " check_in date must be less then check_out date ";
	 		return false; 
	 		}
	 	//condition for the same date entery
	 	if(d1==d2){
	 		document.getElementById('date_valiadation').innerText = "Both Date are equal!... Please check out date must be Greater...";
	 		return false;
	 			}
	 }
}
function night(){
		var d1=document.forms["check_avalaibility"]["check_in"].value;
	 	var d2=document.forms["check_avalaibility"]["check_out"].value;

	 		if (!d1==""  &  !d2=="") {
	 			//Date() function is use to get current time 
				//var now = new Date();
				
				//it convert the date into seconds
				var d1TimeStamp = (new Date(d1)).getTime();
				var d2Timestamp=(new Date(d2)).getTime();
				
				//find the difference in second
				var difference=Math.abs(d2Timestamp-d1TimeStamp);

				//now second are converted into days
				var dayies = Math.floor(difference/(60*60*24*1000));

				// Number of milliseconds per day =
				//   24 hrs/day * 60 minutes/hour * 60 seconds/minute * 1000 msecs/second
				//var daysDiff = Math.floor(microSecondsDiff/(1000 * 60 * 60  * 24));
	 		document.getElementById('dayhead').innerText = dayies;
	 		return false; 
	 		}
}

//function which link to the next page 
function l(){
 window.location.href = "http://www.w3schools.com";
}

</script>
