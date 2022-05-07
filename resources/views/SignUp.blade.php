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
	<div class="form-container sign-in-container">
	<!-- Sign Up form or registration form start -->
		<form action="/SignUp" method="POST">
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
			<input type="text"  placeholder="Email"name="email" />
			<span style="color:red">
			@error('email')
			{{$message}}
			@enderror
</span>
			<input type="password" placeholder="Password"name="password" />
			<span style="color:red">
			@error('')
			{{$message }}
			@enderror
</span>
            <select  id=""  class="selectionrole" name="role" >
                <option value="Select" class="form-control" >--Select Account Type--</option>
                <option value="User" class="form-control"  >User</option>
                <option  class="selectionrole" value="Empoly">Employ</option>
                <option  class="selectionrole" value="Travel">Travel Agency</option>
                <option  class="selectionrole" value="Food">Catering Service</option>
            </select>
			<span style="color:red">
			@error('role')
			{{$message}}
			@enderror
</span>
			<button>Sign Up</button>
		</form>
		<!-- Sign Up form or registration form end -->
	</div>
	
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<!-- <h1>Hello, Friend!</h1> -->
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<a  href="Login"class="ghost" id="sideButton">Sign In</a>
                
			</div>
		</div>
	</div>
</div>

<footer>	
    <!-- <script src="Template_asset/js/login.js" rel="stylesheet"></script> -->
</body>
</html>