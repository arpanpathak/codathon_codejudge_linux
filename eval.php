<?php
require_once "connection.php";
session_start();
require_once "timelimit.php";
$setno=$_SESSION['setno'];
$path=$_SESSION['uid'];
$ole=25*1024*1024;
/* For Problem1 */
if(isset($_POST['code1']))
{
	if($_POST['lan1']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem1.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code1']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='1'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		// $fp=fopen("solved/output.txt","r");
		// $output2=fread($fp, filesize("solved/output.txt"));
		$output2=($result['output']);
		//fclose($fp);
		$output1=shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem1.out 2>".$executable_path."error.txt");
		$time=time();
		$output=shell_exec("timeout 2 submissions/".$path."/problem1.out<"."submissions/".$path."/input.txt");
		$time=time()-$time;
		$output=str_replace("\r", "", $output);
		$output2=str_replace("\r\n","\n",$output2);
		$output=str_replace(" \n", "\n", $output);
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		echo "<b>Output (Problem1 : ) </b> <br />";
		if(strlen($output)>$ole)
			{
				@unlink('submissions/'.$path.'/problem1.out');
			die ("<img src='extra/warning.png' style='width: 30px; height: 30px; margin-bottom: -7px;'><b style='color: orange;'>Output Limit Exceeded!!!</b>");
			}
		if(@!unlink($executable_path."problem1.out"))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo "<b color='orange'>".nl2br(getError($executable_path."error.txt"))."</b>";
		}
		else
		{
			if($time>1)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px; margin-bottom: -5px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
		
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
			// echo "<b>Your Output</b>: <br/>";
			// echo nl2br($output);
				if(!$_SESSION['flag1'])
				{
				$_SESSION['problem1']=500+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem1'];
				mysqli_query($con,"UPDATE users SET problem1='$score' WHERE uid='$path'");
				$_SESSION['flag1']=true;
				}
			}
			else
			{
				echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Wrong Answer</b><br />";
			
			}
		}
	}
	else
		if($_POST['lan1']=="java")
		{
			$filename="submissions/".$path."/problem1.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code1']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='1'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		//$fp=fopen("solved/output.txt","r");
		//$output2=fread($fp, filesize("solved/output.txt"));
		$output2=$result['output'];
		//fclose($fp);
		$output1=shell_exec('javac '.$filename." 2>submissions/".$path."/error.txt");
		$time=time();
		$output=shell_exec('timeout 3 java -classpath submissions/'.$path.'/ problem1<submissions/'.$path.'/input.txt');
		$time=time()-$time;
		if(strlen($output)>$ole)
		{
			@unlink('submissions/'.$path.'/problem1.class');
			die ("<img src='extra/warning.png' style='width: 30px; height: 30px; margin-bottom: -7px;'><b style='color: orange;'>Output Limit Exceeded!!!</b>");
		}
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		$output=str_replace("\r", "", $output);
		$output2=str_replace("\r\n","\n",$output2);
		$output=str_replace(" \n", "\n", $output);
		echo "<b>Output (Problem1 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem1.class'))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo nl2br(getError("submissions/".$path."/error.txt"));
		}
		else
		{
			if($time>2)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px; margin-bottom: -5px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
		
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
			
				if(!$_SESSION['flag1'])
				{
				$_SESSION['problem1']=500+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem1'];
				mysqli_query($con,"UPDATE users SET problem1='$score' WHERE uid='$path'");
				$_SESSION['flag1']=true;
				}
			}
			else
			{
				echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Wrong Answer</b><br />";
				
			}
		}
		}
	
}
/*end of problem 1*/

/*for problem 2 */


?>
<!-- ______________________________________________________________________________ -->
<?php

if(isset($_POST['code2']))
{
	if($_POST['lan2']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem2.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code2']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='2'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		// $fp=fopen("solved/output.txt","r");
		// $output2=fread($fp, filesize("solved/output.txt"));
		$output2=($result['output']);
		//fclose($fp);
		$output1=shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem2.out 2>submissions/$path/error.txt");
		$time=time();
		$output=shell_exec("timeout 2 submissions/".$path."/problem2.out<"."submissions/".$path."/input.txt 2>&1");
		$time=time()-$time;
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		$output=str_replace("\r", "", $output);
		$output2=str_replace("\r\n","\n",$output2);
		$output=str_replace(" \n", "\n", $output);
		echo "<b>Output (Problem2 : ) </b> <br /><hr />";
		if(@!unlink($executable_path."problem2.out"))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo nl2br(getError("submissions/".$path."/error.txt"));
		}
		else
		{
			if($time>1)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px; margin-bottom: -5px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
			if(strlen($output)>$ole)
				die("<b style='color: yellow;'>Output Limit Exceeded!</b>");
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b><br />";
			
				if(!$_SESSION['flag2'])
				{
				$_SESSION['problem2']=500+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem2'];
				mysqli_query($con,"UPDATE users SET problem2='$score' WHERE uid='$path'");
				$_SESSION['flag2']=true;
				}
			}
			else
			{
				echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: red;'>Wrong Answer!!</b> <br />";
				
			}
		}
	}
	else
		if($_POST['lan2']=="java")
		{
			$filename="submissions/".$path."/problem2.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code2']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='2'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		//$fp=fopen("solved/output.txt","r");
		//$output2=fread($fp, filesize("solved/output.txt"));
		$output2=trim($result['output']);
		//fclose($fp);
		$output1=shell_exec('javac '.$filename." 2>submissions/".$path."/error.txt");
		$time=time();
		$output=shell_exec('timeout 3 java -classpath submissions/'.$path.'/ problem2<submissions/'.$path.'/input.txt');
		$time=time()-$time;
		if(strlen($output)>$ole)
		{
			@unlink('submissions/'.$path.'/problem2.class');
			die ("<img src='extra/warning.png' style='width: 30px; height: 30px; margin-bottom: -7px;'><b style='color: orange;'>Output Limit Exceeded!!!</b>");
		}
		$output=str_replace("\r", "", $output);
		$output2 = str_replace("\r","", $output2);
		$output=str_replace(" \n", "\n", $output);
		echo "<b>Output (Problem 2 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem2.class'))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo nl2br(getError("submissions/".$path."/error.txt"));
		}
		else
		{

			if($time>2)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px; margin-bottom: -5px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
		
				if(!$_SESSION['flag2'])
				{
				$_SESSION['problem2']=500+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem2'];
				mysqli_query($con,"UPDATE users SET problem2='$score' WHERE uid='$path'");
				$_SESSION['flag2']=true;
				}
			}
			else
			{
											echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Wrong Answer</b><br />";
				
			}
		}

		}
	
}

?>
<!-- end of problem 2 evaluation -->
<!-- ______________________________________problem 3 evaluation_____________________ -->

<?php

if(isset($_POST['code3']))
{
	if($_POST['lan3']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem3.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code3']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='3'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		$output2=($result['output']);
		$output1=shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem3.out"." 2>submissions/".$path."/error.txt");
		$time=time();
		$output=shell_exec("timeout 2 submissions/".$path."/problem3.out<"."submissions/".$path."/input.txt");
		$time=time()-$time;
		if(strlen($output>500))
		{
				die ("<img src='extra/warning.png' style='width: 30px; height: 30px;'><b style='color: orange;'>Output Limit Exceeded!!!</b>");
				@!unlink($executable_path."problem3.out");
		}
		$output=str_replace("\r", "", $output);
		$output2=str_replace("\r\n","\n",$output2);
		$output=str_replace(" \n", "\n", $output);
		echo "<b>Output (Problem3 : ) </b> <br />";
		if(@!unlink($executable_path."problem3.out"))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo nl2br(getError("submissions/".$path."/error.txt"));
		}
		else
		{
			if($time>1)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
			
				if(!$_SESSION['flag3'])
				{
				$_SESSION['problem3']=700+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem3'];
				mysqli_query($con,"UPDATE users SET problem3='$score' WHERE uid='$path'");
				$_SESSION['flag3']=true;
				}
			}
			else
			{
				echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Wrong Answer</b><br />";
				
			}
		}
	}
	else
		if($_POST['lan3']=="java")
		{
			$filename="submissions/".$path."/problem3.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code3']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='3'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);

		$output2=$result['output'];
		$output1=shell_exec('javac '.$filename." 2>submissions/".$path."/error.txt");
		$time=time();
		$output=shell_exec('timeout 3 java -classpath submissions/'.$path.'/ problem3<submissions/'.$path.'/input.txt');
		$time=time()-$time;
		$output=str_replace("\r", "", $output);
		$output2=str_replace("\r\n","\n",$output2);
		$output=str_replace(" \n", "\n", $output);
		if(strlen($output)>$ole)
		{
				@!unlink('submissions/'.$path.'/problem3.class');
				die ("<img src='extra/warning.png' style='width: 30px; height: 30px; margin-bottom: -7px;'><b style='color: orange;'>Output Limit Exceeded!!!</b>");
		}
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		echo "<b>Output (Problem 3 : ) </b> <br /><hr />";
		if(@!unlink('submissions/'.$path.'/problem3.class'))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo nl2br(getError("submissions/".$path."/error.txt"));
		}
		else
		{
			if($time>2)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
			if(rtrim($output2)==rtrim($output))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b><br />";
			
				if(!$_SESSION['flag3'])
				{
				$_SESSION['problem3']=700+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem3'];
				mysqli_query($con,"UPDATE users SET problem3='$score' WHERE uid='$path'");
				$_SESSION['flag3']=true;
				}
			}
			else
			{
							echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Wrong Answer</b><br />";
				
			}
		}
		}
	
}

?>
<!-- code for problem 4 -->
<?php

if(isset($_POST['code4']))
{
	if($_POST['lan4']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem4.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code4']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='4'");
		$result=mysqli_fetch_assoc($query);
		// $fp=fopen("submissions/".$path."/input.txt","w");
		// fwrite($fp, $result['input']);
		// fclose($fp);
		
		$output2=($result['output']);
		//fclose($fp);
		$output1=shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem4.out 2>submissions/".$path."/error.txt");
		$time=time();
		$output=shell_exec("timeout 2 submissions/".$path."/problem4.out<"."submissions/gifts.in 2>&1");
		$time=time()-$time;
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		$output=str_replace("\r", "", $output);
		$output2=str_replace("\r\n","\n",$output2);
		$output=str_replace(" \n", "\n", $output);
		echo "<b>Output (Problem4 : ) </b> <br /><hr />";
		if(@!unlink($executable_path."problem4.out"))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo nl2br(getError("submissions/".$path."/error.txt"));
		}
		else
		{
			if($time>1)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px; margin-bottom: -5px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
			if(strlen($output)>$ole)
				die("<b style='color: yellow;'>Output Limit Exceeded!</b>");
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b><br />";
			
				if(!$_SESSION['flag4'])
				{
				$_SESSION['problem4']=700+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem4'];
				mysqli_query($con,"UPDATE users SET problem4='$score' WHERE uid='$path'");
				$_SESSION['flag4']=true;
				}
			}
			else
			{
				echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: red;'>Wrong Answer!!</b> <br />";
				
			}
		}
	}
	else
		if($_POST['lan4']=="java")
		{
			$filename="submissions/".$path."/problem4.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code4']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='4'");
		$result=mysqli_fetch_assoc($query);
		// $fp=fopen("submissions/".$path."/input.txt","w");
		// fwrite($fp, $result['input']);
		// fclose($fp);
		
		$output2=trim($result['output']);
		//fclose($fp);
		$output1=shell_exec('javac '.$filename." 2>submissions/".$path."/error.txt");
		$time= round(microtime(true) * 1000);
		$output=shell_exec('timeout 2 java -classpath submissions/'.$path.'/ problem4<submissions/gifts.in 2>&1');
		$time= round(microtime(true) * 1000)-$time;
		if(strlen($output)>$ole)
		{
			@unlink('submissions/'.$path.'/problem4.class');
			die ("<img src='extra/warning.png' style='width: 30px; height: 30px; margin-bottom: -7px;'><b style='color: orange;'>Output Limit Exceeded!!!</b>");
		}
		$output=str_replace("\r", "", $output);
		$output2 = str_replace("\r","", $output2);
		$output=str_replace(" \n", "\n", $output);
		echo "<b>Output (Problem 4 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem4.class'))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo nl2br(getError("submissions/".$path."/error.txt"));
		}
		else
		{

			if($time>500)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px; margin-bottom: -5px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
			
				if(!$_SESSION['flag4'])
				{
				$_SESSION['problem4']=700+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem4'];
				mysqli_query($con,"UPDATE users SET problem4='$score' WHERE uid='$path'");
				$_SESSION['flag4']=true;
				}
			}
			else
			{
											echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Wrong Answer</b><br />";
				
			}
		}

		}
	
}

?>
<!--end of code for problem 4 -->
<!-- problem 5 -->
<?php
if(isset($_POST['code5']))
{
	if($_POST['lan5']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem5.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code5']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='5'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		// $fp=fopen("solved/output.txt","r");
		// $output2=fread($fp, filesize("solved/output.txt"));
		$output2=($result['output']);
		//fclose($fp);
		$output1=shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem5.out 2>submissions/".$path."/error.txt");
		$time=time();
		$output=shell_exec("timeout 2 submissions/".$path."/problem5.out<"."submissions/".$path."/input.txt 2>&1");
		$time=time()-$time;
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		$output=str_replace("\r", "", $output);
		$output2=str_replace("\r\n","\n",$output2);
		$output=str_replace(" \n", "\n", $output);
		echo "<b>Output (Problem5 : ) </b> <br /><hr />";
		if(@!unlink($executable_path."problem5.out"))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo nl2br(getError("submissions/".$path."/error.txt"));
		}
		else
		{
			if($time>1)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px; margin-bottom: -5px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
			if(strlen($output)>$ole)
				die("<b style='color: yellow;'>Output Limit Exceeded!</b>");
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b><br />";
			
			
				if(!$_SESSION['flag5'])
				{
				$_SESSION['problem5']=1000+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem5'];
				mysqli_query($con,"UPDATE users SET problem5='$score' WHERE uid='$path'");
				$_SESSION['flag5']=true;
				}
			}
			else
			{
				echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: red;'>Wrong Answer!!</b> <br />";
				
			}
		}
	}
	else
		if($_POST['lan5']=="java")
		{
			$filename="submissions/".$path."/problem5.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code5']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT input,output FROM problems WHERE setno='$setno' AND d='5'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result['input']);
		fclose($fp);
		//$fp=fopen("solved/output.txt","r");
		//$output2=fread($fp, filesize("solved/output.txt"));
		$output2=trim($result['output']);
		//fclose($fp);
		$output1=shell_exec('javac '.$filename." 2>submissions/".$path."/error.txt");
		$time=time();
		$output=shell_exec('timeout 3 java -classpath submissions/'.$path.'/ problem5<submissions/'.$path.'/input.txt 2>&1');
		$time=time()-$time;
		if(strlen($output)>$ole)
		{
			@unlink('submissions/'.$path.'/problem5.class');
			die ("<img src='extra/warning.png' style='width: 30px; height: 30px; margin-bottom: -7px;'><b style='color: orange;'>Output Limit Exceeded!!!</b>");
		}
		$output=str_replace("\r", "", $output);
		$output2 = str_replace("\r","", $output2);
		$output=str_replace(" \n", "\n", $output);
		echo "<b>Output (Problem 5 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem5.class'))
		{
			echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Compilation Error!!</b><br />";

			echo nl2br(getError("submissions/".$path."/error.txt"));
		}
		else
		{

			if($time>2)
				die ("<img src='extra/tle.png' style='width: 30px; height: 30px; margin-bottom: -5px;'><b style='color: orange;'>Time Limit Exceeded!!!</b>");
			if(rtrim($output)==rtrim($output2))
			{
			echo "<b style='color: green;'>&#10004; Correct Answer!</b></b>";
			
				if(!$_SESSION['flag5'])
				{
				$_SESSION['problem5']=1000+ceil(($_SESSION['remaining']/60));
				$score=$_SESSION['problem5'];
				mysqli_query($con,"UPDATE users SET problem5='$score' WHERE uid='$path'");
				$_SESSION['flag5']=true;
				}
			}
			else
			{
											echo "<span style='border-radius: 50%;
    behavior: url(PIE.htc);font-weight: bold; background-color: red; color: white; padding: 2px 4px;'>&#10005;</span><b style='color: orange;'>Wrong Answer</b><br />";
				
			}
		}

		}
	
}

?>
