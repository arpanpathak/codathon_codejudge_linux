
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="height=device-height,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/additional.css">
<style type="text/css">
<!--
P { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
TD { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
-->
form{
border-radius:0px 0px 7px 7px;}
</style>
</head>
<body>
<!-- START OF HIDDEN HTML - PLACE YOUR CONTENT HERE -->  
<ul class="tab">
	<b style="color: lightgray; float: left; padding-top: 5px; font-family: times;">ADMIN</b>
	<li class="active" style="margin-left: 30px;"><a>Add Problems</a></li>
	<li><a>Codejudge Compiler</a></li>
	<li><a>Leaderboard</a></li>
	<li><a>Submissions</a></li>
</ul>

<?php
	require_once "connection.php";
	if(isset($_POST['add']))
	{
		$setno=$_POST['setno'];
		$d=$_POST['d'];
		$statement=mysqli_real_escape_string($con,$_POST['statement']);
		$input=rtrim(trim($_POST['input']));
		$output=rtrim(trim($_POST['output']));
		if($d=="1" || $d=="2")
			$marks=500;
		else if($d=="3" || $d=="4")
			$marks=700;
		else if($d=="5")
			$marks=1000;
		if(mysqli_query($con,"INSERT INTO problems(`statement`, `input`, `output`, `setno`, `d`, `pts`) VALUES ('$statement','$input','$output','$setno','$d','$marks')"))
			echo "<script> alert('Problem added'); </script>";
	}

?>
<div class="panel" style="background-color: white; box-shadow: 1px 0px 10px black;
margin-top: 30px;
">
<b style="color:  #273746 ;">Set No : </b>
<form method="POST" action="adminPanel.php">
<input type="text" class="ip" placeholder="Problem Set no"style="width: 20%;" name="setno" required>
<b style="color:  #273746 ;">Difficulty: </b>
<select name="d" class="ip" style="width: 20%" required>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<br />
<b style="color:  #273746 ;">Problem Description : </b>
<textarea class="ip" style="height: 100px;" id="statement" onkeyup="display();" name="statement" required></textarea>

<br />
<b style="color:  #273746 ;">Testcase Inputs : </b><br />
<textarea class="ip" style="height: 100px;" name="input" required></textarea><br />
<b style="color:  #273746 ;">Testcase Outputs : </b><br />
<textarea class="ip" style="height: 100px;" name="output" required></textarea> <br />
<input type="submit" class="btn-success" value="Add" name="add"><br />
<input type="hidden" name="password" value="codathonRCC">
</form>
</div>

<div id="preview" class="preview" >
<kbd> Problem Statement Preview: </kbd>
</div>
<script>
	function display()
	{
		document.getElementById("preview").innerHTML=document.getElementById("statement").value;
	}

</script>
</body>
</html>
