<!DOCTYPE html>
<?php
session_start();
require_once "connection.php";

?>
<html>
<head>
<style>
/* Style the list */

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    margin-left: 0px;
    overflow: hidden;
    font-weight: bold;
    color: white;
    box-shadow: none;
    position: relative; 
    /* box-shadow: 1px 0px 20px 1px  #17202a inset; */

   /* background-color: #34495e ;*/ 
   background-color: #22385a;
   padding-top: 10px;
   font-family: Candara, Calibri, "Segoe UI", Segoe, Arial, sans-serif;
}

/* Float the list items side by side */
ul.tab li {float: left; }

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    /* color: white; */
    text-align: center;
    padding: 12px 12px;
    text-decoration: none;
    transition: .6s;
    font-size: 17px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-bottom: none;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    /* box-shadow: 1px 0px 20px 1px  #17202a inset,1px 0px 10px 1px black; */
}

/* Change background color of links on hover */
ul.tab li a:hover {background-color: black;}
.active {background-color: white;  color: black; 
box-shadow: -4px 0 3px black;
}
/* Create an active/current tablink class */
ul.tab .active {background-color: white;  color: black; 
box-shadow: -4px 0 3px black;
}
ul.tab li a:focus,.active {background-color: white;  color: black; 

}

/* Style the tab content */
.tabcontent {
    display: none;
    background-color: white;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    margin-top: 0px;
    margin-left: 15px;
    border-left: 1px solid;
    box-shadow: 3px 0px 10px gray;
    /* transition: .6s; */

} 

/* My Style */
.panel-right
{
    position: fixed;
    right: 0;
    top: 0px;
    height: 100%;
    width: 15%;
    background-color: #f1f1f1;
    border-left: 5px double black;
    box-shadow: -3px 0px 10px gray;
}
.table{ padding: 0px; border: 0px solid; width: 100%;}
.table-header
{
    
    padding: 5px 5px;
    color: black;
    font-size: 14;
    font-weight: bold;
    border-bottom: 0px solid ;

}
.table-header-row
{
	border-bottom: lightgray;
    background-color: white;

}
.table-row
{
        background-color: white;  /* #f2f2f2; */
        border-radius: 0px;
        border: 1px solid #A19F9D;
        word-wrap: break-word;   
}
.table-row>td
{
    border-bottom: 1px solid #A19F9D;
    padding: 5px 5px;
    font-size: 14;
    text-align: center;
}
.table-row:hover
{
    background-color: lightyellow;
}
.current-user
{
        background-color: #7FF99E;
        border-radius: 0px; 
        border: 0px solid darkgray;
        word-wrap: break-word;  
}
.current-user>td
{
    border-bottom: 1px solid #A19F9D;
    padding: 5px 5px;
    font-size: 14;
    font-weight: bold;

    text-align: center;
}
.current-user:hover
{
    background-color: green; color: white;
}
.winner
{
        background-color:  #defefa;
        border-radius: 0px; 
        border: 0px solid darkgray;
        word-wrap: break-word; 
         
}
.winner>td
{
    border-bottom: 1px solid #A19F9D;
    padding: 5px 5px;
    font-size: 14;
    text-align: center;

}

.highlight input[type=]
{
    border: 1px solid darkred;
}
.fixed
{
    position: fixed; top: 0;
    opacity: .8;
    z-index: 999;
}
ul.fixed li a
{

    width: 100%;
}
/* 
.fixed ul { width: 100%; }
.fixed li { width: 100%; } */
.btn
{
    border: 1px solid darkblue;
    background-color:    #0177fb ;
    cursor: pointer;
    color: white;
    font-weight: bold;
    padding-top: 7px; padding-bottom: 7px; padding-right: 7px; padding-left: 7px;
    box-shadow: 1px 0px 5px 1px black,0px 8px 30px 1px black inset;
}
.btn:hover
{
    background-color:  #154360;
    box-shadow: 1px 0px 20px 1px  #154360 inset;
}
.btn-default
{
     padding-top: 7px; padding-bottom: 7px; padding-right: 7px; padding-left: 7px;
      border: 1px solid lightblue;
    background-color:  #d9e2e0 ;
    font-weight: bold;
    font-size: 20;
    font-family: comic;
    border-radius: 7px;
    color: black;
    cursor: pointer;
    box-shadow: 1px 0px 10px 1px black;
}
.btn-default:hover { background-color: #c9d2d0; }
/* Media query for making responsive panel */
@media only screen and (max-width: 1000px){
    .panel-right{
        position: relative;
        width: 97%;
        min-height: 50px;
        margin-bottom: 30px;
        margin-left: 0px;
        margin-right: 0px;
    }
    .panel
    {
        margin-left: 0px;
    }
    li
    {
        width: 100%;
    }
    ul.tab
    {
        width: 97%;
    }
    ul.tab li a
    {
        width: 100%;
    }
    #output
    {
        width: 96%;
        margin-left: 0px;
    }

}
.panel-flat
{
	font-family: Arial;
  padding:  10px 10px;
  background-color:  #E9E4E1;
  float:  left;
}
body,html
{
	margin: 0px;
}
@media only screen and (max-width: 600px){
    .tabcontent{ width: 94%; margin-left: 1px;
        margin-right: 1px;
    }
}

</style>
<meta name="viewport" content="width=device-width,initial-scle=1.0">

</head>
<body>
<div class="panel-flat" style="width: 100%; min-height: 100px; margin-top: 0px; margin-left: 0px;">
<h1>Leaderboard</h1>

</div>
<table class="table" cellspacing="0">
<tr class="table-header-row">
<td class="table-header">Rank</td>
<td class="table-header">User Id</td>
<td class="table-header">Name</td>
<td class="table-header">Year</td>
<td class="table-header">Problem1</td>
<td class="table-header">Problem2</td>
<td class="table-header">Problem3</td>
<td class="table-header">Total Score</td>
</tr>
<?php

$query=mysqli_query($con,"SELECT uid,name,year,problem1,problem2,problem3,(problem1+problem2+problem3) AS sum FROM users ORDER BY sum DESC");
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
	echo "<td style='text-align: left;'> $i $status </td><td>".$result['uid']."</td><td>".$result['name']."</td><td>".
	$result['year']."</td><td>".$result['problem1']."</td>"."<td>".$result['problem2']."</td>".
	"<td>".$result['problem3']."</td>"."<td>".$result['sum']."</td></tr>";
	$previous_score=$result['sum'];
	//$i++;
}

?>
</table>

