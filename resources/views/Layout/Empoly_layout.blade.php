<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
<style>
    *{
        padding:0px;
        margin:0px;
    }
    .side-menu{
        list-style: none;
        padding: 0px 43px;

    }
    .side-menu li{
        padding: 15px 0px;

    }
   .side-navbar{
        background: black;
    color: white;
    height: 100%;
    position: absolute;
    width: 216px;
    }
    .top-bar{
        display:flex;
        background: black;
    /* height: 65px; */
    padding: 21px;
    color:white;
    }
    .top-bar a{
        color:white;
        text-decoration:none;
    }
    .logo{
        flex: 0.9;
    }
   .contentsss{
        margin-top: 27px;
    margin-left: 230px;
    background: #edeaea;
    width: 80%;
    }
    .cont{
        padding: 20px;
    }
</style>
<body>
   <div id="container">
   <div class="top-bar">
       <span class="logo">Employ</span>
        <span class="top-menu">
            <a href="#">Account</a>
            <a href="/Logout">Logout</a>

        </span>
    </div>
   <div class="side-navbar">
        <ul class="side-menu">
            <li style="margin-top: 28px;">Home</li>
            <li>DashBord</li>
            <li>KYC Form</li>
            <li>Profile</li>
            <li>Job Vaccancy</li>
            <li>Request</li>
        </ul>
    </div>
    <div class="contentsss">
        <div class="cont">
            <h1>haiiiiiiii</h1>
            <hr>
            <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
   </div>
</body>
</html>