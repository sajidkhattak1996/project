<?php
session_start();
//the below set server time zone according to your choice 
date_default_timezone_set('Asia/Karachi');
$current_time=date("Y-m-d h:i:sa");

//session varaible which are previsouly created and need now  
/*
 $_SESSION['branch'].";
 $_SESSION['hostelname'];
 $_SESSION['no_night'];
 $_SESSION['erno'];
 $_SESSION['brno'];
*/

// field of the form which are store in the database 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fathername=$_POST['fathername'];
$email=$_POST['email'];
$cnic=$_POST['cnic'];
$mobileno=$_POST['mobile_no'];
$address=$_POST['address'];

$branch=$_SESSION['branch'];
$hostelname=$_SESSION['hostelname'];
$night=$_SESSION['no_night'];
$in_date=$_SESSION['checkin_date'];

 $b=$_SESSION['button_bunk'];
 $e=$_SESSION['button_exective'];


//database variable and create connection 
 $server="localhost";
 $user="root";
 $db="hostel";
 $password="";

$con=mysqli_connect($server,$user,$password,$db);

 if ($b==6 && $e==0) {
 	$bunk_room_no=$_SESSION['brno'];

 
 	$str1="INSERT INTO `user_data`(`firstname`, `lastname`, `fathername`, `cnic`, `email`, `phone_no`, `address`, `booking_date`, `brach`, `b_room_no`, `night`,`checkin_date`) VALUES ('$fname','$lname','$fathername','$cnic','$email','$mobileno','$address','$current_time','$branch','$bunk_room_no','$night','$in_date')";

		 $queryy=mysqli_query($con,$str1);
		if (isset($queryy)) {
			mysqli_close($con);
			session_destroy();
			include("reservation_step4.html");
		}
		else{
			echo "Error in Insertion of Data ".mysqli_error($con);
		}

 }
 if($e==2 && $b==0)
 {
 	$exective_room_no=$_SESSION['erno'];
 
 
 	$str1="INSERT INTO `user_data`(`firstname`, `lastname`, `fathername`, `cnic`, `email`, `phone_no`, `address`, `booking_date`, `brach`, `e_room_no`, `night`,`checkin_date`) VALUES ('$fname','$lname','$fathername','$cnic','$email','$mobileno','$address','$current_time','$branch','$exective_room_no','$night','$in_date')";

		 $queryy=mysqli_query($con,$str1);
		if (isset($queryy)) {
			
			mysqli_close($con);
			session_destroy();
			include("reservation_step4.html");

		}
		else{
			echo "Error in Insertion of Data ".mysqli_error($con);
		}




 }






?>