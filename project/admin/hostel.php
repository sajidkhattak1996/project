<!DOCTYPE html>
<html>
<head>
	<title>hostel branches</title>
</head>
<body>


<?php

$server ="localhost";
$user ="root";
$password="";
$db="hostel";

$con =mysqli_connect($server,$user,$password,$db);

if ($con) {
	
	$s1="select * from hostel";
$result=$con->query($s1);
if ($result) {
	?>
	<br>
	<table width="70%" border="1" bgcolor="lightblue" >
		<tr><h2 >Hostel and It Branches are </h2></tr>

		<thead>
			<tr>
				<td>Hostel Branches</td>
				<td>Hostel Name</td>
			</tr>			
		</thead>
<?php

	while ($row=$result->fetch_assoc()) {
		?>

			<tr>
				<td><?php echo $row['brach']; ?></td>
				<td><?php echo $row['hname']; ?></td>
			</tr>
<?php
}
?>
	</table>


	
<?php	
}


}
$con->close();

?>




</body>
</html>