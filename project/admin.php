<?php  

$name  =$_POST['name'];
$email =$_POST['email'];
$password = $_POST['password'];

echo "<h5>".$name."<br>".$email."<br>".$password."<br><br>";


$server ="localhost";
$user ="root";
$pass ="";
$db ="hostel";

$con =mysqli_connect($server,$user,$pass,$db);
echo "connection are succeffully created ";

$query1 ="select * from admin ";
$result =$con->query($query1);

echo "<br>query are executed <br>";


while ($row =$result->fetch_assoc()) {
	
	echo "<h2>Name:    ".$row['name']."&nbsp&nbsp&nbsp"."Email : ".$row['email']."&nbsp&nbsp&nbsp".$row['password'];



}

?>