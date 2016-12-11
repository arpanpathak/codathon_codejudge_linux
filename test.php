<!DOCTYPE html>
<?php
require_once "connection.php";
session_start();
if(isset($_GET['logout'])){
	session_destroy(); 
	header('Location: index.php');
}
if(!isset($_SESSION['uid']))
	header('Location: index.php');
?>
<html>
<head>
	<title>Contest Page</title>
    <meta name="viewport" content="height=device-height,initial-scale=1.0">
    <meta charset="utf-8">
    <script src="apstyle/js/apstyle.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="apstyle/css/main.css">
    <link rel="stylesheet" type="text/css" href="tabs.css">
    <link rel="stylesheet" type="text/css" href="css/additiona.css">
    <link rel="icon" href="favicon.png">
    <!-- icnluding codemirror files -->
    <script src="codemirror/lib/codemirror.js"></script>
	<link rel="stylesheet" href="codemirror/lib/codemirror.css">
	<script src="codemirror/mode/javascript/javascript.js"></script>
	<link rel="stylesheet" type="text/css" href="codemirror/theme/blackboard.css">
	<link rel="stylesheet" href="../theme/3024-day.css">
<link rel="stylesheet" href="codemirror/theme/3024-night.css">
<link rel="stylesheet" href="codemirror/theme/abcdef.css">
<link rel="stylesheet" href="codemirror/theme/ambiance.css">
<link rel="stylesheet" href="codemirror/theme/base16-dark.css">
<link rel="stylesheet" href="codemirror/theme/bespin.css">
<link rel="stylesheet" href="codemirror/theme/base16-light.css">
<link rel="stylesheet" href="codemirror/theme/blackboard.css">
<link rel="stylesheet" href="codemirror/theme/cobalt.css">
<link rel="stylesheet" href="codemirror/theme/colorforth.css">
<link rel="stylesheet" href="codemirror/theme/dracula.css">
<link rel="stylesheet" href="codemirror/theme/eclipse.css">
<link rel="stylesheet" href="codemirror/theme/elegant.css">
<link rel="stylesheet" href="codemirror/theme/erlang-dark.css">
<link rel="stylesheet" href="codemirror/theme/hopscotch.css">
<link rel="stylesheet" href="codemirror/theme/icecoder.css">
<link rel="stylesheet" href="codemirror/theme/isotope.css">
<link rel="stylesheet" href="codemirror/theme/lesser-dark.css">
<link rel="stylesheet" href="codemirror/theme/liquibyte.css">
<link rel="stylesheet" href="codemirror/theme/material.css">
<link rel="stylesheet" href="codemirror/theme/mbo.css">
<link rel="stylesheet" href="codemirror/theme/mdn-like.css">
<link rel="stylesheet" href="codemirror/theme/midnight.css">
<link rel="stylesheet" href="codemirror/theme/monokai.css">
<link rel="stylesheet" href="codemirror/theme/neat.css">
<link rel="stylesheet" href="codemirror/theme/neo.css">
<link rel="stylesheet" href="codemirror/theme/night.css">
<link rel="stylesheet" href="codemirror/theme/panda-syntax.css">
<link rel="stylesheet" href="codemirror/theme/paraiso-dark.css">
<link rel="stylesheet" href="codemirror/theme/paraiso-light.css">
<link rel="stylesheet" href="codemirror/theme/pastel-on-dark.css">
<link rel="stylesheet" href="codemirror/theme/railscasts.css">
<link rel="stylesheet" href="codemirror/theme/rubyblue.css">
<link rel="stylesheet" href="codemirror/theme/seti.css">
<link rel="stylesheet" href="codemirror/theme/solarized.css">
<link rel="stylesheet" href="codemirror/theme/the-matrix.css">
<link rel="stylesheet" href="codemirror/theme/tomorrow-night-bright.css">
<link rel="stylesheet" href="codemirror/theme/tomorrow-night-eighties.css">
<link rel="stylesheet" href="codemirror/theme/ttcn.css">
<link rel="stylesheet" href="codemirror/theme/twilight.css">
<link rel="stylesheet" href="codemirror/theme/vibrant-ink.css">
<link rel="stylesheet" href="codemirror/theme/xq-dark.css">
<link rel="stylesheet" href="codemirror/theme/xq-light.css">
<link rel="stylesheet" href="codemirror/theme/yeti.css">
<link rel="stylesheet" href="codemirror/theme/zenburn.css">
<script src="codemirror/addon/edit/closebrackets.js"></script>
<!-- codemioor adons files -->
<script src="codemirror/addon/edit/matchbrackets.js"></script>
<link rel="stylesheet" href="codemirror/addon/hint/show-hint.css">
<script src="codemirror/addon/hint/show-hint.js"></script>
<script src="codemirror/mode/clike/clike.js" type="text/javascript"></script>
<!--end of codemirror files -->

</head>
<!-- <nav class="nav"> <ul><li><img src="extra/logo.png" style='height: 50px;'></li>
<li style="margin-left: 60%;">
	<form method="GET" action="test.php">
	<button type="submit" class="primary" name="logout"><img src="extra/logout.png" style="height: 20px; width: 20px;">logout</button>
	</form>
</li>
</ul></nav> -->
<ul class="tab" id="task_flyout">
  <li class="left-margin"><a href="#" class="tablinks active" onclick="openCity(event, 'problem1')">Problem 1</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'problem2')">Problem 2</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'problem3')">Problem 3</a></li>
   <li><a href="#" class="tablinks" onclick="openCity(event, 'problem4')">Problem 4</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'problem5')">Problem 5</a></li>
</ul>
<!-- aboutcodathon -->
<div class="popup" id="about" style="z-index: 999999;">
        <div class="popup-content" style="margin-top: 5%; ">
            <div class="popup-head" style="background-color:rgb(103, 58, 183); color: white; cursor: alias;border-bottom: 1px solid #A19F9D;">
                <span class="popup-close" style="font-size: 21px; color: #fff;"><b>X</b></span>
                <center><img src="extra/code.png" style="margin-top: 8px ; float: left;"><h3 style="display: inline-block;">Please read carefully</h3></center>
            </div>
            <div class="popup-body" style="font-family: Verdana;">
       
               <strong>About the contest</strong>
<hr />
<div>
The contest will be of two rounds.This is the first round.In this round you will 
be given 5 problems ( 500pts,500pts,700pts,1000pts).You have to successfully submit
as many problems as you can. If you get corret answer you will get a score of points 
of that problem+ ceil(no of seconds remaining/60). The contest will be of 2 hour 30 minutes.
After 75 minutes you will not be unable to submit any problems and the submission 
system will be locked.
</div>
<br /> <hr />
<u><b>Rules</u></b> <br />
<ul>
<li>
You can use any IDE you want.For C/C++ please use gcc,g++ compiler.Don't use turbo C++. For JAVA, you can use any version greater than 1.5.</li>
<li>
Don't use any electronic gadgets at the time of contest.If you try to open google,
quora, stackoverflow or any other site, out spyBot will report us and your account will be suspended 
and you will be disqualified from the contest.</li>
<li>If you are submiting code in JAVA, please use public class name "problem1" for 1st problem,
"problem2" for second problem, "problem3" for 3rd problem otherwise the codejudge will show compilation error!.</li>
</ul>
            
            </div>
            <div class="popup-footer">

                </form>
            </div>
        </div>
</div>

<!-- end of about -->

<div class="panel-right" >
	<div class="panel-warning" style="background-color: #333; color: white; box-shadow: 1px 0px 10px black;">
		<center>
		<img src="extra/account.png" style="width: 70px; height: 70px; border-radius: 50%; border: 2px solid white; "><br />
		<b style="font-family: arial; font-size: 24px;"> <?php echo $_SESSION['uid']; ?> </b>
		
		<form method="GET" action="test.php">

	<button type="submit" class="btn-normal" name="logout"><img src="extra/logout.png" style="height: 20px; width: 20px;">logout</button>
	</center>
	</form>
	</div>
		<br />
		<div class="panel-light" style="background-color: #333; color: white; box-shadow: 3px 0px 4px black;">
		<h2> Remaining Time </h2><h1 id="time" style="font-family: clk; font-size: 39px;">2:00:00 </h1>
		<h2 style="text-shadow: 4px 5px 6px black; font-family: Arial;
		">CodEJustice </h2>
		<button type="button" id="start" class="btn-success">START</button>
		<button type="button" id="lb" class="btn-success"> leaderboard</button>
		</div>
	
		<div class="panel-warning" style="background-color:rgb(103, 58, 183); color: white; ">
		<h2>SCORE: <span id="score">0pts </span></h2>
		
		</div>
		
		<div style="background-color: #333; color: white; box-shadow: none;box-shadow: 1px 0px 10px black;">
			<b>Editor theme:</b> <select onchange="selectTheme()" id=select>
    <option selected>default</option>
    <option>3024-day</option>
    <option>3024-night</option>
    <option>abcdef</option>
    <option>ambiance</option>
    <option>base16-dark</option>
    <option>base16-light</option>
    <option>bespin</option>
    <option>blackboard</option>
    <option>cobalt</option>
    <option>colorforth</option>
    <option>dracula</option>
    <option>eclipse</option>
    <option>elegant</option>
    <option>erlang-dark</option>
    <option>hopscotch</option>
    <option>icecoder</option>
    <option>isotope</option>
    <option>lesser-dark</option>
    <option>liquibyte</option>
    <option>material</option>
    <option>mbo</option>
    <option>mdn-like</option>
    <option>midnight</option>
    <option>monokai</option>
    <option>neat</option>
    <option>neo</option>
    <option>night</option>
    <option>panda-syntax</option>
    <option>paraiso-dark</option>
    <option>paraiso-light</option>
    <option>pastel-on-dark</option>
    <option>railscasts</option>
    <option>rubyblue</option>
    <option>seti</option>
    <option>solarized dark</option>
    <option>solarized light</option>
    <option>the-matrix</option>
    <option>tomorrow-night-bright</option>
    <option>tomorrow-night-eighties</option>
    <option>ttcn</option>
    <option>twilight</option>
    <option>vibrant-ink</option>
    <option>xq-dark</option>
    <option>xq-light</option>
    <option>yeti</option>
    <option>zenburn</option>
</select>
		</div>
	</div>
</div>
	</div>

	<div class="col6 tabcontent" id="problem1">
<div>
<div class="panel" class="left-margin" style= "margin-right: 20px; box-shadow: none;">
<?php
$setno=$_SESSION['setno'];
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='1'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>
<b>Paste Your Code here :</b>
<textarea id="code1" placehotlder="paste your code here" rows=10 cols=50 class="codemirror-textarea" required></textarea>
<b>Select Language :</b>
<select id="lan1" class="plang">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11</option>
	<option value="java">JAVA (JDK 1.5+) </option>
</select>
<br />
<button type="button" class="btn-success" id="run1"><b style="font-size: 16px">&#x25BA;</b> RUN</button>
<font color="blue">*Time Limit 1sec (2 sec for Java) </font>
<span id="load1">

	</span>
</div>

</div>
<!-- end of problem1 -->
<!-- problem 2 -->

<div class="col6 tabcontent" id="problem2">
<div class="">
<div class="panel" class="left-margin" style="margin-right: 20px; box-shadow: none;">
<?php
$setno=$_SESSION['setno'];
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='2'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>


<b>Paste Your Code here :</b>
<textarea id="code2" placeholder="paste your code here" rows=10 cols=50 class="codemirror-textarea" required></textarea>
<b>Inputs(Optional) :</b>
<br />
<select id="lan2" class="plang">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11</option>
	<option value="java">JAVA (JDK 1.5+) </option>
</select>
<input type="hidden" name="mysession" id="mysession">
<button type="submit" class="btn-success" id="run2"><b style="font-size: 16px">&#x25BA;</b>RUN</button>
<span id="load2">

	</span>
</div>

</div>

<!--end of problem2 -->
<!--problem 3 -->

<div class="col6 tabcontent" id="problem3">
<div class="">

<div class="panel" class="left-margin" style="margin-right: 20px; box-shadow: none;">
<?php
$setno=$_SESSION['setno'];
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='3'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>


<b>Paste Your Code here :</b>
<textarea id="code3" placeholder="paste your code here" rows=10 cols=50 class="codemirror-textarea" required></textarea>
<b>Inputs(Optional) :</b>
<br />
<select id="lan3" class="plang">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11</option>
	<option value="java">JAVA (JDK 1.5+) </option>
</select>
<input type="hidden" name="mysession" id="mysession">
<button type="submit" class="btn-success" id="run3"><b style="font-size: 16px">&#x25BA;</b>RUN</button>
<span id="load3">

	</span>
</div>
</div>

<br />
<!--end of problem3 -->
<!-- problem 4 -->

<div class="col6 tabcontent" id="problem4" style="margin-top: -20px;">
<div class="">

<div class="panel" class="left-margin" style="margin-right: 20px; box-shadow: none;">

<?php
$setno=$_SESSION['setno'];
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='4'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>


<b>Paste Your Code here :</b>
<textarea id="code4" placeholder="paste your code here" rows=10 cols=50 class="codemirror-textarea" required></textarea>
<b>Inputs(Optional) :</b>
<br />
<select id="lan4" class="plang">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11 </option>
	<option value="java">JAVA (JDK 1.5+) </option>
</select>
<button type="submit" class="btn-success" id="run4"><b style="font-size: 16px">&#x25BA;</b>RUN</button>
</div>
</div>

<br />
<!-- end of problem 4 -->
<!-- problem 5 -->

<div class="col6 tabcontent" id="problem5" style="margin-top: -20px;">
<div class="">

<div class="panel" class="left-margin" style="margin-right: 20px; box-shadow: none;">

<?php
$setno=$_SESSION['setno'];
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='5'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>


<b>Paste Your Code here :</b>
<textarea id="code5" placeholder="paste your code here" rows=10 cols=50 class="codemirror-textarea" required></textarea>
<b>Inputs(Optional) :</b>
<br />
<select id="lan5" class="plang">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11 </option>
	<option value="java">JAVA (JDK 1.5+) </option>
</select>
<button type="submit" class="btn-success" id="run5"><b style="font-size: 16px">&#x25BA;</b>RUN</button>
</div>
</div>

<br />

<!-- end of problem 5 -->
<div class="col6">
<div class="panel-warning" id="output" style="box-shadow: 1px 0px 10px 1px black; background-color: black; color: white; margin-left: 15px; border: 0px; border-radius: 0px;font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;">
<b>Output</b>
<br />


</div>
<div class="popup" id="myPopup">
		<div class="popup-content">
			<div class="popup-head">
				<span class="popup-close"><b>X</b></span>
				<h3>Time UP!!!</h3>
			</div>
			<div class="popup-body">
				<h2>You are done! Thanks for the participation</h2>
				See the leaderboard
			</div>
			<div class="popup-footer">
				<button class="btn-flat-danger" data-close="#myPopup">Close</button>
			</div>
		</div>
</div>
<!-- leaderboard -->
<div class="popup" id="leaderboard" style="z-index: 9999;">
		<div class="popup-content" style="width: 100%; margin-top: 10px; ">
			<div class="popup-head" style="background-color: #333; color: white; box-shadow: 0px 0 20px black inset; cursor: pointer;">
				<span class="popup-close"><b style="color: white;">X</b></span>
				<img src='extra/cup.png' style='width: 50px; height: 50px; float: left;'><h3> Leaderboard</h3>
			</div>
			<div class="popup-body">
				<div id="ranks" style="overflow: scroll">

				</div>
			</div>
			
		</div>
</div>

<!-- end of leaderboard -->

<textarea id="session_remaining" style="display: none;"> 
	<?php echo 7200-(time()-$_SESSION['start_time']); ?>
</textarea>
<script>
var myTextArea=$('.codemirror-textarea')[0];
var myTextArea1=$('.codemirror-textarea')[1];
var myTextArea2=$('.codemirror-textarea')[2];
var myTextArea3=$('.codemirror-textarea')[3];
var myTextArea4=$('.codemirror-textarea')[4];
var myCodeMirror = CodeMirror.fromTextArea(myTextArea,{
	lineNumbers: true,
	matchBrackets: true,
    styleActiveLine: true,autoCloseBrackets: true,
    mode: "text/x-c++src",
});
myCodeMirror.refresh();
var myCodeMirror1 = CodeMirror.fromTextArea(myTextArea1,{
	lineNumbers: true,
	matchBrackets: true,
    styleActiveLine: true,autoCloseBrackets: true,
    mode: "text/x-c++src",
});
myCodeMirror1.refresh();
var myCodeMirror2 = CodeMirror.fromTextArea(myTextArea2,{
	lineNumbers: true,
	matchBrackets: true,
    styleActiveLine: true,autoCloseBrackets: true,
    mode: "text/x-c++src",
});
myCodeMirror2.refresh();
var myCodeMirror3 = CodeMirror.fromTextArea(myTextArea3,{
	lineNumbers: true,
	matchBrackets: true,
    styleActiveLine: true,autoCloseBrackets: true,
    mode: "text/x-c++src",
});
myCodeMirror3.refresh();
var myCodeMirror4 = CodeMirror.fromTextArea(myTextArea4,{
	lineNumbers: true,
	matchBrackets: true,
    styleActiveLine: true,autoCloseBrackets: true,
    mode: "text/x-c++src",
});
myCodeMirror4.refresh();

$('.tab').hide();
$('#about').show();
$('#output').hide();
$('#run1').click(function(){ 
	$('#output').html('<img src="extra/loading.gif" style="margin-left: 100px;">');
	var code=$('#code1').val();
	var code=myCodeMirror.getValue();
	var lan=$('#lan1').val();
	
	$.post('eval.php',{ code1: code,lan1: lan}, function(data){
		$('#output').html(data);
		$('#load1').html('');
	});
});
$('#run2').click(function(){ 
	$('#output').html('<img src="extra/loading.gif" style="margin-left: 100px;">');
	var code=$('#code2').val();
	var code=myCodeMirror1.getValue();
	var lan=$('#lan2').val();
	
	$.post('eval.php',{ code2: code,lan2: lan}, function(data){
		$('#output').html(data);
		$('#load2').html('');
	});
});
$('#run3').click(function(){ 
	$('#output').html('<img src="extra/loading.gif" style="margin-left: 100px;">');
	var code=$('#code3').val();
	var code=myCodeMirror2.getValue();
	var lan=$('#lan3').val();
	
	$.post('eval.php',{ code3: code,lan3: lan}, function(data){
		$('#output').html(data);
		$('#load3').html('');
	});
});
$('#run4').click(function(){ 
	$('#output').html('<img src="extra/loading.gif" style="margin-left: 100px;">');
	var code=$('#code4').val();
	var code=myCodeMirror3.getValue();
	var lan=$('#lan4').val();
	
	$.post('eval.php',{ code4: code,lan4: lan}, function(data){
		$('#output').html(data);
	});
});
$('#run5').click(function(){ 
	$('#output').html('<img src="extra/loading.gif" style="margin-left: 100px;">');
	var code=$('#code5').val();
	var code=myCodeMirror4.getValue();
	var lan=$('#lan5').val();
	
	$.post('eval.php',{ code5: code,lan5: lan}, function(data){
		$('#output').html(data);
	});
});
$('#start').click(function(){
	$(this).attr('disabled','disabled');
	$(this).removeClass("btn-success");
	$(this).addClass("btn-default");
	$('#output').show();
	$('.tab').show();
	$('#problem1').show();
	setInterval(countdown,1000);
	setInterval(getScore,1000);
});
$('#lb').click(function(){
	$('#leaderboard').show();
	$('#leaderboard .popup-content').hide();
	$('#leaderboard .popup-content').slideDown("fast");
	$.post("leaderboard.php",function(data){
		$('#ranks').html(data);
	});

});
$(function(){ 
	$('.plang').on('change',function(){
		var l=$(this).val();
		
		if(l=="java")
		{
			myCodeMirror.setOption("mode","text/x-java");
			myCodeMirror1.setOption("mode","text/x-java");
			myCodeMirror2.setOption("mode","text/x-java");
			myCodeMirror3.setOption("mode","text/x-java");
			myCodeMirror4.setOption("mode","text/x-java");
		}
		else
		{
			myCodeMirror.setOption("mode","text/x-c++src");
			myCodeMirror1.setOption("mode","text/x-c++src");
			myCodeMirror2.setOption("mode","text/x-c++src");
			myCodeMirror3.setOption("mode","text/x-c++src");
			myCodeMirror4.setOption("mode","text/x-c++src");
		}
	});
});
// editor.setOption("theme", ;"blackboard");
// editor.hash="#blackboard";
</script>
<script src="codemirror_theme.js"></script>
<?php
	if($_SESSION['active']==true)
	{
?>
<script>
$('.tab').show();
$('#output').show();
$('#about').hide();
var time=$('#session_remaining').val();
h=Math.floor(time/3600);
m=Math.floor(time/60)-(h*60);
s=time%60;
	$('#problem1').show();
	$('#start').attr('disabled','disabled');
	$('#start').removeClass("btn-success");
	$('#start').addClass("btn-default");
	$('#start').css('box-shadow','none');
	setInterval(countdown,1000);
	setInterval(getScore,1000);
</script>
	<?php
}
?>
</html>