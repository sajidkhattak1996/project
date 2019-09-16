<style type="text/css">
	h1{
		text-align: center;
		color: deeppink;
		font-size: 50px;
	}
	h5{
		color: blue;

	}
	h6{
		color: red;
		font-size: 40px;
		text-align: center;
	}
	h4{
		word-spacing: 5px;
		color: red;
		font-size: 40px;
		font-style: italic;
		font-family: artial;
	}	

</style>




<?php  

$name  =$_POST['name'];
$email =$_POST['email'];
$password = $_POST['password'];

//display the above variables 
// echo "<h5>".$name."<br>".$email."<br>".$password."<br><br>";

//parameter user  for the database connection 
$server ="localhost";
$user ="root";
$pass ="";
$db ="hostel";

//database connection are created 
$con =mysqli_connect($server,$user,$pass,$db);

//this query are use for the searching for the database of the admin and his password 
//use for the security purpose 
$query1 ="SELECT * FROM admin WHERE name='$name' and email='$email' and password='$password'";
$result =$con->query($query1);

//condition for the password match with the datbase 
if ($result->num_rows > 0) 
{
	while ($row = $result->fetch_assoc()) 
	{
		if ($row["name"]==$name  &&  $row["email"]==$email  && $row["password"]==$password ) 
		{
			//here start and creating the session variable 
			session_start();
			$_SESSION['n']=$name;
			$_SESSION['em']=$email;
			$_SESSION['ps']=$password;
			
//			echo "<h2>The Admin Page is Processing for You ... </h2>";
			include("admindisplay.php");
		}
		else
		{
			echo "<h4>No Admin Record are found in the Database <br>Please Enter again the correct Detail of Admin !</h4>";			
		}
	}


}
else
{
	echo "<h4>No Admin Record are found in the Database <br>Please Enter again the correct Detail of Admin !</h4>";
}


$result->close();
$con->close();


?>