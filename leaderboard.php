<!DOCTYPE html>
<?php
require_once "connection.php";
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scle=1.0">
<link rel="stylesheet" type="text/css" href="tabs.css">
</head>
<body>
<table class="table" cellspacing="0">
<tr class="table-header-row" style='box-shadow: none;''>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'>Rank</td>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'>Team Name</td>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'><center>Name</center></td>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'>Year</td>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'>Problem1</td>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'>Problem2</td>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'>Problem3</td>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'>Problem4</td>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'>Problem5</td>
<td class="table-header" style='background-color: white; border-bottom: 4px solid gray;color: black; border:'>Total Score</td>
</tr>
<?php
session_start();
$query=mysqli_query($con,"SELECT uid,name,year,problem1,problem2,problem3,problem4,problem5,(problem1+problem2+problem3+problem4+problem5) AS sum FROM users ORDER BY sum DESC");
$i=1;
$previous_rank=1;
$previous_score=0;
while($result=mysqli_fetch_assoc($query))
{
	$status="";
	if($result['sum']<$previous_score)
		$i=++$previous_rank;
	$class='table-row';
	if(isset($_SESSION['uid']))
	if($result['uid']==$_SESSION['uid'])
	{
		$class='current-user';
		$status.="<img src='extra/user.jpg' style='width: 17px; height: 17px; '>";
	}
	if($i==1){ $class='winner'; $status.="<img src='extra/cup.png' style='width: 30px; height: 20px;'>"; }
	echo "<tr class=$class>";
	echo "<td style='text-align: left;'> $i $status </td><td>".$result['uid']."</td><td>".nl2br($result['name'])."</td><td>".
	nl2br($result['year'])."</td><td>".$result['problem1']."</td>"."<td>".$result['problem2']."</td>".
	"<td>".$result['problem3']."</td><td>".$result['problem4']."</td><td>".$result['problem5']."</td><td>".$result['sum']."</td></tr>";
	$previous_score=$result['sum'];
	//$i++;
}

?>
</table>

