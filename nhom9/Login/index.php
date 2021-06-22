<?php
require "../config.php";
require "../models/db.php";
require "../models/user.php";
session_start();
$user= new User();
if(isset($_POST['user'])&&isset($_POST['pass']))
	{
		$userName = $_POST['user'];
		$pass =$_POST['pass'];
		if($_POST['user']!=null&&$_POST['pass']!=null)
		{
			$userName = $_POST['user'];
			$pass =($_POST['pass']);
			$arr = $user ->getAccount($userName,$pass);
			if(count($arr)>0)
			{
				$_SESSION['user']['user']=$userName;
				$_SESSION['pass']['pass']=$pass;
				$_SESSION['user']['role']=$arr[0]['user_role'];
				if($arr[0]["user_role"]==1)
				{
					header("Location:../admin/index.php");
				}
				else
				{
					header("Location:../index.php");
				}
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Tài Khoản Hoặc Mật Khẩu Sai !!!")';
				echo '</script>';
			}
		}
		else
			{
				echo '<script language="javascript">';
				echo 'alert("Tài Khoản Hoặc Mật Khẩu Không Được Để Trống !!!")';
				echo '</script>';
			}	
	}
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-wrap">
        
        <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
                <form action="../Login/index.php" method="post">
                    <div class="sign-in-htm">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" name="user" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" name="pass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label for="check"><span class="icon"></span> Keep me Signed in</label>
                            </div>
                            <div class="group">
                                <input  type="submit" class="button" value="Sign In">                           
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="#forgot">Forgot Password?</a>
                            </div>
                    </div>
                </form>
                    
                    <!--form đăng ký tài khoảng-->
                <form action="register.php" method="post">
                    <div class="sign-up-htm">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" name="user" type="text" class="input" >
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" name="pass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Repeat Password</label>
                                <input id="pass" name="repass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Email Address</label>
                                <input id="pass" name="email" type="text" class="input">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Sign Up">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <label for="tab-1">Already Member?</a>
                            </div>
                    </div>
                </form>
                    
                </div>
            </div>
        
    </div>
</body>
</html>