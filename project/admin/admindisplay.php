<!DOCTYPE html>
<html>
<head>
	<title>this is the admin page </title>
	<!-- <meta http-equiv="refresh" content="5"> -->
<style type="text/css">
	#mh{
		color: #0099cc;
		letter-spacing: 1px;
		word-spacing: 5px;
		border-bottom:solid 2px;


	}
 /*  menu css  */
	.menu{
		margin-top: 20px;
		border-top: solid 2px #0099cc;
		border-bottom: solid 2px #0099cc;
		border-radius: 20px;
		height: 80px;
		
	}
.menuinside{
	margin-top: 30px;
	margin-left: 65px;

}

.menu a{
		width: 250px;
		background-color: #0099cc;
		word-spacing: 5px;
		letter-spacing: 0.5px;
		font-size: 30px;
		margin-right: 50px;
		text-decoration: none;
		border:solid 1px blue;
		border-radius: 5px;
		color: #ffe300;
	}





/*css for main picture in the head on right side */
	#pich{
		width: 160px;
		height: 160px;
		border: solid 2px #0099cc;
		border-radius: 12px;
	}
	.pic{
		width: 180px;
		height: 180px;
		margin-left: 87%;
		margin-top: -12%;
	}

	#an{
		font-size: 30px;
		word-spacing: 5px;
		letter-spacing: 3px;
		font-family: curlz mt;
		color: #0031d6;


	}
	#adn{
		font-size: 30px;
		font-family: monotype corsiva;
		letter-spacing: 8px;
		word-spacing: 2px;
		color: blue;

	}
	.admin_detail{
		border-bottom: solid 2px #0099cc;
		border-radius: 20px;

	}
	.adi{
		margin-top: -2.6%;
		margin-left: 35px;
	}
</style>

</head>
<body bgcolor="lightblue">
<h1 id="mh" align="center">Wellcome to the Admin page </h1>

		<br>
<div class="admin_detail">
	<div class="adi">
	<strong><h2 id="an">Name Of Admin :

		<lable id="adn">   	<?php     echo $_SESSION['n'];      ?>   </lable>        

		<br>
		<br>
		<label id="an">
			Email:
			<label id="adn">
				<?php     echo $_SESSION['em'];      ?>
			</label>
		</label>



	</h2></strong>


</div>
	<div class="pic">
	<img src="heart.jpg" id="pich">
    </div>
</div>
<?php
session_destroy();
?>



<form>
<div class="menu">
	<div class="menuinside">
			<a href="hostel.php">Hostels Branch</a>
			<a href="">Exective Room</a>
			<a href="">Bunk Room</a>
			<a href="">All User Records</a>
			<a href="">Admin Records</a>
	</div>
</div>
</form>




</body>
</html>
