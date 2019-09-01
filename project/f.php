<html>
<?php 
$name=$_POST['name'];
echo "Your Name is :  $name";

$d1 =$_POST['d1'];
echo "<br><br>Your First Date is :  $d1";


$d2 =$_POST['d2'];
echo "<br><br>Your Second Date is :  $d2";

$date1Timestamp = strtotime($d1);
$date2Timestamp = strtotime($d2);

//dates in second is 
echo "<br><br>First date in Second is  : $date1Timestamp";
echo "<br><br>Second date in Second is : $date1Timestamp";
//Difference of the two date in second 
$difference = $date2Timestamp - $date1Timestamp; 
echo "<br><br>difference in second is : $difference";
//now we convert the difference in second to the days 

$difference =floor($difference/(60*60*24));
echo "<br><br>Difference in day are :  $difference<br>";

 ?>
 </html>