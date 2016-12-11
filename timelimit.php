<?php

function kill($pid){ 
    //return stripos(php_uname('s'), 'win')>-1  ? exec("taskkill /F /T /PID $pid") : 
    return exec("kill -9 ".$pid);
}
function comp($str1,$str2)
{
	for($i=0;$i<strlen(trim($str1));$i++)
	{
		if($str1[$i]!=$str2[$i])
			return false;
	}
	return true;
}
function execute($command)
{
$descriptorspec = array(
    0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
    1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
    2 => array("file", "submissions/".$_SESSION['uid']."/error-output.txt", "a+") // stderr is a file to write to
);

$process = proc_open($command,$descriptorspec,$pipes);

$terminate_after = .2; // seconds after process is terminated

usleep($terminate_after*1000000); // wait for 5 seconds

// terminate the process
$pstatus = proc_get_status($process);
$PID = $pstatus['pid'];
echo "ID: <br />".$PID."<br />";
kill($PID); // instead of proc_terminate($resource);
$output=stream_get_contents($pipes[1]);

fclose($pipes[0]); 
fclose($pipes[1]); 
proc_close($process);

$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
echo 'Process terminated after: '.$time;
return $output;
}
function getError($path)
{
	return file_get_contents($path);
}
?>