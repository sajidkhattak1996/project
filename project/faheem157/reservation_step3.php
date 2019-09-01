<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="reservation_step3css.css">
	<style>
	.blinking{
    animation:blinkingText 5s infinite;
}
@keyframes blinkingText{
    10%{     color: red;    }
    50%{    color:blue; }
    80%{    color: yellow; }
    100%{   color: green;    }
    40%{   color: black;    }
    90%{   color: pink;    }
    60%{   color: orange;    }
}
	</style>
</head>
<body>
  <div class="Container" align="center" >
	<h1><span class="blinking">Hostel Regisration Form </span></h1>
<!-- <div style="display: flex; padding-bottom: 20px;width : 450px;"></div> -->
<form method="POST">

<div >
	<b>First name</b><span style="color: red;"> *</span><br/>
<input type="text" name="sname" style="width: 450px;">
</div>

<div>
	<b>Last name</b><span style="color: red;"> *</span><br/>
<input type="text" name="lname" style="width: 450px;">
</div>


<div >
<b>	Father Name </b><span style="color: red;"> *</span><br/>
<input type="text" name="father" style="width : 450px;">
</div>

<div>
<b>	CNIC </b><span style="color: red;"> *</span><br/>
<input type="text" name="cnic" style="width : 450px;">
</div>
<div >
<b>	Phone </b> <span style="color: red;"> *</span><br/>
<input type="text" name="mobile"  style="width : 450px;">
</div>

<div>
<b>	Email </b><span style="color: red;"> *</span><br/>
<input type="email" name="mail" style="width : 450px;">
</div>

<div style="padding-bottom: 20px;">
<b>	Submitted Date </b><span style="color: red;"> *</span><br/>
<input type="date" name="dati"  style="width : 450px;">
</div>

<div >
  <b>Address</b><span style="color: red;"> *</span><br/>
<input type="text" name="add" style="width: 450px;">
</div>

<div>
  <input type="submit" name="save" value="Submit">
</div>

</form>
</div>
</body>
</html>

<?php 
$db=mysqli_connect("localhost","root","","project");
if (isset($_POST['save'])) {
          $name=$_POST['sname'];
          $fath=$_POST['father'];
          $cnic=$_POST['cnic'];
          $mob=$_POST['mobile'];
          $date=$_POST['dati'];
          $mail=$_POST['mail'];
          $add=$_POST['add'];

 // $stemt="INSERT INTO 
 //        registration (name,father,department,semester,cnic,date,phone)
 //        VALUES ('$name','$fath','$depp','$sem','$cnic','date','$mob')";
 //  $query=mysqli_query($db,$stemt);

$query=mysqli_query($db,"INSERT INTO 
        registration (name,father,cnic,date,phone,email,address )
        VALUES ('$name','$fath','$cnic','$date','$mob','$mail','add')");

if ($query) {
    echo "Date inserted";
}
else
{
    echo "Insertion Failed";
}


}


?>