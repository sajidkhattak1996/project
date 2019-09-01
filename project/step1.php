<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
      $date1=$_POST['check_in'];
      $date2=$_POST['check_out'];

$date1Timestamp = strtotime($date1);
$date2Timestamp = strtotime($date2);
$difference = $date2Timestamp - $date1Timestamp; 
$difference =floor($difference/(60*60*24));

//dates in second is 
// echo "<br><br>First date in Second is  : $date1Timestamp";
// echo "<br><br>Second date in Second is : $date1Timestamp";
//Difference of the two date in second 
// echo "<br><br>difference in second is : $difference";
//now we convert the difference in second to the days 
// echo "<br><br>Difference in day are :  $difference<br>";

$server ="localhost";  //server name either it local are not
$user="root";  //name of the user in database
$password="";   //empty mean no password
$db_name="project_hostel";  //name of the database 

$db=mysqli_connect($server,$user,$password,$db_name);
      
      $night=$difference;
	  $br=$_POST['select_branch'];
      $h_name="";

      if ($br=="Peshawar")      {$h_name="Rehman Baba Hostel no 2";}
      if ($br=="Lahore")       {$h_name="Lahore Hostel";}
      if ($br=="Karachi")     {$h_name="Karachi Hostel";}
      if ($br=="Mardan")     {$h_name="Mardan Hostel"; }
      if ($br=="Islamabad") {$h_name="Islamabad international Hostel";}
   
      //this is session variable which is use further in other pages
      $_SESSION['no_night'] = "$night";
      $_SESSION['branch'] = "$br";
      $_SESSION['hostelname'] = "$h_name";

       
 $stemt="INSERT INTO hostel (branch,h_name,night)
        VALUES ('$br','$h_name','$night')";
  $query=mysqli_query($db,$stemt);

//  //second method for quary
// $query=mysqli_query($db,"INSERT INTO 
// 	hostel(branch,h_name,night,)
// 	VALUES('$branch','$h_name','$night')");
// echo "connected22";

if ($query) {   echo "<script>window.location.assign('reservation_step2.php');</script>"; }
else
{
    echo "Insertion Failed";
}

?>
</html>