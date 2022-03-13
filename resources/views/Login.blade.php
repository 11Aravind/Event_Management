<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="Template_asset/css/login.css" rel="stylesheet">

<body>
    
<div class="container" id="container">
	<div class="form-container sign-up-container">
	<!-- Sign Up form or registration form start -->
		<form action="SignUp/" method="post">
			<h1>Create Account</h1>
					<span>or use your email for registration</span>
					<span style="color:red">
		@csrf
			@if(Session::get('failmsg'))
			{{ Session::get('failmsg')}}
			@endif</span>
			<input type="text" placeholder="Name" name="name" />
		<span style="color:red">
	@error('name')
	{{$message}}
		@enderror</span>
			<input type="text"  name="email" />
			<span style="color:red">
			@error('email')
			{{$message}}
			@enderror
</span>
			<input type="text" name="" />
			<span style="color:red">
			@error('')
			{{$message }}
			@enderror
</span>
			<span style="color:red">
			@error('role')
			{{$message}}
			@enderror
</span>
			<button>Sign Up</button>
		</form>
		<!-- Sign Up form or registration form end -->
	</div>
	<div class="form-container sign-in-container">
        <!-- sign in form -->
		<form action="/Login" method="POST">
			@csrf
			<h1>Sign in</h1>
		<span style="color:red">@if(Session::get('failmsg'))
			{{ Session::get('failmsg')}}
			@endif</span>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<span>or use your account</span>
			<input type="text"  placeholder="Email"name="email" />
	
			<input type="text" placeholder="Password"name="password"/>
			<!-- <select  id=""  class="selectionrole" name="role" > -->
                <!-- <option value="Select" class="selectionrole" >--Select Account Type--</option>
                <option value="User" class="selectionrole" values="User" >User</option>
                <option value="Employ" class="selectionrole" values="Empoly">Employ</option> -->
                <!-- <option value="Employ" class="selectionrole" values="empoly">Employ</option> -->
                <!-- <option value="Employ" class="selectionrole" values="Admin">Admin</option>
            </select> -->
			<a href="#">Forgot your ?</a>
			<button type="submit">Sign In</button>
		</form>
		<!-- sign in form end -->
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<a href="SignUp" class="ghost"  id="sideButton">SignUp</a>
                <a href="/" class="ghost" id="sideButton" style="margin-top: 19px;">Home</a>
			</div>
		</div>
	</div>
</div>

<footer>
	
    <!-- <script src="Template_asset/js/login.js" rel="stylesheet"></script> -->
</body>
</html>