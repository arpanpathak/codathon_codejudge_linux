<?php
session_start();
$_SESSION['active']=true;
echo ceil($_SESSION['problem1']+$_SESSION['problem2']+$_SESSION['problem3'])+$_SESSION['problem4']+
$_SESSION['problem5'];
if(isset($_POST['destroy']))
{
	echo "<script> alert('You have attempted the contest'); </script>";
	session_destroy();
}
if(!isset($_SESSION['start_time']))
{
	$_SESSION['start_time']=time();
}
else
	$_SESSION['remaining']=7200-(time()-$_SESSION['start_time']);

?>
