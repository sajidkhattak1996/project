<?php
session_start();

//input data dates
$date1=$_POST['check_in'];
$date2=$_POST['check_out'];


//calculating the number of days from the given two date
$date1Timestamp = strtotime($date1);
$date2Timestamp = strtotime($date2);
$difference = $date2Timestamp - $date1Timestamp; 
$difference =floor($difference/(60*60*24));

//assigne the html data to the php variables 
      $night=$difference;
	  $br=$_POST['select_branch'];
      $h_name="";

//condition for the branck of the hostel 
      if ($br=="Peshawar")      {$h_name="Rehman Baba Hostel no 2";}
      if ($br=="Lahore")       {$h_name="Lahore Hostel";}
      if ($br=="Karachi")     {$h_name="Karachi Hostel";}
      if ($br=="Mardan")     {$h_name="Mardan Hostel"; }
      if ($br=="Islamabad") {$h_name="Islamabad Hostel";}
   
      //this is session variable which is use further in other pages
      $_SESSION['no_night'] = "$night";
      $_SESSION['branch'] = "$br";
      $_SESSION['hostelname'] = "$h_name";
	  $_SESSION['checkin_date']=$date1;
			



$username = "root";
$password = "";
$database = "hostel";

$con = new mysqli("localhost", $username, $password, $database);
 
$statement = "SELECT * FROM bunk_room,exective_room WHERE bnopproom<6 OR enopproom<2";

$result = $con->query($statement);

if ($result->num_rows > 0){
			$broom=false;
			$eroom=false;
				while ($row = $result->fetch_assoc()) {
	  
								if ($row["bnopproom"]<6)
								{
									$broom=true;
								}
					 
								if ($row["enopproom"]<2)
								{
									$eroom=true;
								}

					if ($broom==true OR $eroom==true) { break;}
		}
		if ($broom==true OR $eroom==true) {
		$con->close();		
			include("reservation_step2.php");
		}

}
else
{echo "<h1>All room are full </h1>";}

	
?>

