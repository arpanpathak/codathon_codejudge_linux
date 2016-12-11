<!DOCTYPE html>
<html>
<?php
session_start();
require_once "connection.php";
if(isset($_SESSION['uid']))
    header("Location: test.php");
if(isset($_POST['login']))
{
    $uid=$_POST['uid'];
    $password=$_POST['password'];
    if($ex=mysqli_query($con,"SELECT * from users WHERE uid='$uid' and password='$password'"))
    {
        $result=mysqli_fetch_assoc($ex);
        if((!empty($result)) && ($result['attempt']==0))
        {
            session_start();
            $_SESSION['uid']=$uid;
            $_SESSION['problem1']=0;
            $_SESSION['problem2']=0;
            $_SESSION['problem3']=0;
            $_SESSION['problem4']=0;
            $_SESSION['problem5']=0;
            $_SESSION['flag1']=false;
            $_SESSION['flag2']=false;
            $_SESSION['flag3']=false;
            $_SESSION['flag4']=false;
            $_SESSION['flag5']=false;
            $_SESSION['remaining']=7200; 
            $_SESSION['active']=false;
            $_SESSION['setno']=1;
            //mysqli_query($con,"UPDATE users SET attempt='1' WHERE uid='$uid'");
            mkdir("submissions/".$uid);           
            header("Location: test.php");
        }
        else if($result['attempt']==1)
            echo "<script> alert('Sorry!! you have already attempted the contest \\nPlease wait for the results!!'); </script>";
        else 
            echo "<script> alert('Wrong user id or password \\n Please check again!!'); </script>";
    }
}
if(isset($_POST['register']))
{
    $uid=$_POST['uid'];
    $name=$_POST['name1']."\n".$_POST['name2']."\n".$_POST['name3'];
    $email=$_POST['email'];
    $year=$_POST['year1']."\n".$_POST['year2']."\n".$_POST['year3'];
    $crn=$_POST['crn'];
    $password=$_POST['password'];
    if(mysqli_query($con,"INSERT INTO users values('$uid','$name','$email','$year','$crn','$password',0,0,0,0,0,0)"))
        echo "<script>alert('Successfully registered!!'); </script>";
    else
        echo "<script>alert('Already registered..'); </script>";
}
?>
<head>
    <title>Codathon 2k16</title>

    <meta name="viewport" content="height=device-height,initial-scale=1.0">
    <link rel="icon" href="favicon.png">
    <script src="apstyle/js/apstyle.js"></script>
    <link rel="stylesheet" type="text/css" href="apstyle/css/main.css">
    <link rel="stylesheet" href="tabs.css">
   <!--  <nav class="nav">
        
        <button type="button" class="fold" data-fold="#topBar"></button>
        <div class="folded" id="topBar">
        <ul >
             <li class="nav-title"><img src="extra/logo.png" style='height: 50px; float: left;'></li>
            <li class="dropdown">
                <span style="color: white;"><a href="#" class="dropbtn" style="color: white;">Other Events</a></span>
                <div class="dropdown-content">
                    <span>Tech OOP</span>
                    <span>Codathon</span>
                    <span>Debate</span>
                </div>
            </li>
        </ul>
        </div>
    </nav> -->
    <style>
    .ip {
        border: 1.5px solid red important;
    }
    .btn-default{ padding: 14px 12px; border-radius: 0; box-shadow: none; border: none; }
    </style>
</head>
<body >

        <div class="col6" style="width: 40%;"></div>
        <div class="col4" style="margin: 10% auto;">
            <div class="panel-flat" style="box-shadow: 3px 4px 8px black; background-color: white;">
                <center><h1 style="text-shadow: 5px 2px 5px gray;">LOGIN!</h1></center>
                <form method="POST" action="index.php">
                <div style=" position: relative;">
                <input type="text" required name="uid" class="input-text" placeholder="user id" style="padding-left: 42px;">
                <img src="extra/user.png" style="width: 30px; height: 30px; position: absolute;
                left: 15px; top: 8px;">
                </div>
                <div style=" position: relative;">
                <input type="password" class="input-text" required name="password" placeholder="password" style="padding-left: 42px;">
                <img src="extra/password.png" style="width: 30px; height: 30px; position: absolute;
                left: 15px; top: 5px;">
                </div>
                <center>
                <button type="submit" class="btn-flat-blue" name="login" style="margin-left: 15px;">LOGIN</button>
                <button type="button" class="btn-flat-danger" data-show="#signup">REGISTER</button>
                </center>
                </form>
            </div>
        </div>
    
<div class="popup" id="signup">
        <div class="popup-content" style="margin-top: 5%; max-width: 500px;" tabindex="0">
            <div class="popup-head" style="background-color:rgb(103, 58, 183);color: white; border-bottom: 1px solid #A19F9D;">
                <span class="popup-close" style="color: #fff; font-size: 24px;"><b>X</b></span>
                <center><img src="extra/code.png" style="margin-bottom: -20px; "><h3 style=" display: inline-block;">Register For CODATHON Final</h3></center>
            </div>
            <div class="popup-body" style="margin-top: 0px; " >
                <form method="POST" action="index.php" style="margin-top: 10px;">
                <center>
                <table>
                <tr> <td>Team Id</td>
                <td>
                <div style="display: inline-block; position: relative;">
                <input type="text" class="input-text" id="uid" class="ip tick-icon" name="uid" placeholder="User Id" required >
                <span style="position: absolute; top: 5px; right: 5px;" id="exist"></span>
                </div>
                </td> 
                </tr>
                <!-- -->
                <tr> <td>Member 1</td>
                <td>
                <input type="text" class="input-text" name="name1" placeholder="User Name" required>
                </td><td></td>
                </tr>
                <!-- -->
                <!-- -->
                 <td>Member 2</td>
                <td>
                <input type="text" class="input-text" name="name2" placeholder="User Name" required>
                </td><td></td>
                </tr>
                <!-- -->
                <!-- -->
                <tr> <td>Member 3</td>
                <td>
                <input type="text" class="input-text" name="name3" placeholder="User Name" required>
                </td><td></td>
                </tr>
                <!-- -->
                <tr><td>Email Id of Team Leader:</td>
                <td>
                <input type="email" class="input-text" name="email" placeholder="Email Id" required>
                </td><td></td>
                </tr>
                <tr><td>Year</td>
                <td>
                <select class="select" name="year1" placeholder="Year" required style="width: 80px;">
                    <option value="1">1st year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
                                <select class="select" name="year2" placeholder="Year" required style="width: 80px;">
                    <option value="1">1st year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
                                <select class="select" name="year3" placeholder="Year" required style="width: 80px;">
                    <option value="1">1st year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
                
                </td><td></td>
                </tr>
                <tr><td>Class Roll No of Team Leader:-</td>
                <td>
                <input type="text" name="crn" class="input-text" placeholder="Class Roll No" required>
                </td><td></td></tr>
                <tr><td>Password</td><td>
                <input type="password" name="password" id="pwdd" class="input-text" placeholder="Password" required>
                </td><td></td>
                </tr>
                <tr><td>Confirm Password</td><td>
                <input type="password" name="confirm" id="confirm_password" class="input-text" placeholder="Confirm Password" required>
                </td><td></td>
                </tr>
                </table>
                <button type="submit" name="register" class="btn-flat-blue" id="register_btn">REGISTER</button>
                <button type="button" class="btn-flat-danger" data-close="#signup">CLOSE</button>
                </center>
                

            </div>
            <!-- <div class="popup-footer">
                
                </form>
            </div> -->
        </div>
</div>
<script>

$(document).ready(function(){
$('#uid').blur(function(){
    var val=$(this).val();
    $('#exist').html("<img src='extra/loading36.gif'style='height: 33px; width: 33px;'>");
    $.post('check.php',{uid:val},function(data){ 
        $('#exist').html(data);
    });
});
$('#confirm_password').on('keyup',function(){
        var x=$(this).val();
        var y=$("#pwdd").val();
        if(x==y)
        {
            $('#register_btn').removeAttr('disabled','disabled');
            $('#register_btn').removeClass('btn-default');
        }
        else
        {
            $('#register_btn').attr('disabled','disabled');
            $('#register_btn').addClass('btn-default');
        }
        });
$('#confirm_password').blur(function(){ 
    var x=$(this).val();
        var y=$("#pwdd").val();
        if(x==y)
        {
            $('#register_btn').removeAttr('disabled','disabled');
            $('#register_btn').removeClass('btn-default');
        }
        else
        {
            $('#register_btn').attr('disabled','disabled');
            $('#register_btn').addClass('btn-default');
        }
});
$('#pwdd').blur(function(){ 
    var x=$(this).val();
        var y=$("#confirm_password").val();
        if(x==y)
        {
            $('#register_btn').removeAttr('disabled','disabled');
            $('#register_btn').removeClass('btn-default');
        }
        else
        {
            $('#register_btn').attr('disabled','disabled');
            $('#register_btn').addClass('btn-default');
        }
});
$(document).on('keydown', 'input[type=password]', function(e) {
    if (e.keyCode == 32) return false;
});
$(document).on('keydown', '#uid', function(e) {
    if (e.keyCode == 32) return false;
});

});

</script>
</body>
</html>