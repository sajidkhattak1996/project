<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>in this program we calculate the number of day from two dates</title>
</head>
<body>

<form action="f.php" method="post">

	<label>Enter first name : </label>
	<input type="text" name="name">
	<br><br>
	<label>Enter  first date: </label>
	<input type="date" name="d1" style="width: 200px;">


	<br><br>
	<label>Enter Second date: </label>
	<input type="date" name="d2" style="width: 200px;" onchange="return f1(this)">
	<br><br>
	<p id="head"></p>
	<script type="text/javascript">
	function f1(x){

		return x.style.background = "red";
		document.getElementById('nday').value="324";

	}	

	</script>

	<label>Number of Day's</label>
	<input type="number" id="nday" placeholder="Enter Day's" >


	<br><br>
	<input type="submit" name="submit" value="press">

</form>
<input id="first" value="1/1/2000"/>
<input id="second" value="1/1/2001"/>

<script>
  alert(datediff("day", first, second)); // what goes here?
</script>
</body>
</html>