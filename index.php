<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/mystyle.css" rel="stylesheet"/>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/myjs.js"></script>
<style>
body {
    background-image: url("123.jpg");
    background-size:cover;
	 background-repeat: no-repeat;
}
</style>
</head>
<body>
<div class="col-md-offset-4 col-md-4 div1">

<form method="post" action="result.php" id="signup">
<h3 align="center"> Register</h3>
<hr>
<div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" name="name" id="Name" placeholder="Name">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
<div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
</div>
<div class="form-group">
    <label for="Password">ReEnter Password</label>
    <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Password">
</div>
<input type="submit" value="Register" class="btn btn-success btn-block"/>
<input type="button" value="Login" class="btn btn-primary btn-block" id="logins"/>
</form>
<form method="post" action="result.php" id="login">
<h3 align="center"> Login</h3>
<hr>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
<div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
</div>

<input type="submit" value="login" class="btn btn-success btn-block"/>
<input type="button" value="Register" class="btn btn-primary btn-block" id="register"/>
</form>
</div>
</body>
</html>