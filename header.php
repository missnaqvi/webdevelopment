<!DOCTYPE html>
<html>
<head>
	<title>My First Web</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="icon" type="image/png" href="assets/img/logo2.png">


</head>
<body>
	<div class="main-content">
<!-- <h1 style="color: purple">Welcome</h1>
<h2 class="heading-style">Welcome</h2>
<h3 id="heading-style">Welcome</h3>
<h4>Welcome</h4>
<h5>Welcome</h5>
<h6>Welcome</h6>

<p>This is paragraph text</p>
<b>This is Bold Text</b>
<pre>This is space                       tag</pre>

<ul><h3><u>Unorder List</u></h3></ul>
<ul>
<li>HTML</li>
<li>CSS</li>
<li>PHP</li>
</ul>

<ol><h3><u><i>Order List</u></i></u></h3></ol>
<ol type="i">
<li>HTML</li>
<li>CSS</li>
<li>PHP</li>

</ol>

<hl>Detailed List</hl>
<dl>
	<dt>Web Designing</dt>
	<ol>
	<li>HTML</li>
	<li>CSS</li>
	<li>PHP</li>
	<li>MY SQL</li>
</ol>

<dt>Web Development</dt>
	<ol>
	<li>HTML</li>
	<li>CSS</li>
	<li>PHP</li>
	<li>MY SQL</li>
</ol>


</dl> -->

<!-- <div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4">
			<h1 class="new">1st Div</h1>
			<img src="assets/img/001.jpeg" class="img-fluid rounded">
		
		</div>
		
		<div class="col-xs-12 col-sm-4 col-md-4">
			<h1 class="new">2nd Div</h1>
			<img src="assets/img/002.jpeg" class="img-fluid rounded">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4">
			<h1 class="new">3rd Div</h1>
			<img src="assets/img/003.jpeg" class="img-fluid rounded">
		</div>
	</div>
	
</div>


 -->
<!-- 4th class -->

<!-- <nav class="navbar navbar-expand-md rounded bg-success navbar-light"> -->
	<!-- previous was this but due to change the header's bg color I called the footer class in Header Nav -->


<nav class="navbar navbar-expand-md rounded footer navbar-light">
	<a href="#" class="navbar-brand nav-link"><img src="assets/img/logo.png" class="img-fluid logo" height="100" width="100">UI Learning</a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsible-div" bg-primary">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsible-div">
		<ul class="navbar-nav justify-content-center w-100">
			<li class="nav-item">
				<a href="index.php" class="nav-link"> Home</a>
			</li>
			<li class="nav-item">
				<a href="aboutus.php" class="nav-link">About Us</a>
				</li>
			<li class="nav-item">
				<a href="portfolio.php" class="nav-link">Port Folio</a>
			</li>
			<li class="nav-item">
				<a href="contact.php" class="nav-link">Contact Us</a>
			</li>
			<li class="nav-item">
				<a href="signup.php" class="nav-link">SignUp</a>
			</li>
			<li class="nav-item">
				<a href="login.php" class="nav-link">Login</a>
			</li>
			
		</ul>
		<ul class="navbar-nav justify-content-end w-100">
			<li class="nav-item">
				<a href="" class="nav-link" data-toggle="modal" data-target="#SignUp" data-backdrop='static' keyboard='false'><i class="fas fa-user-plus"></i>SignUp</a>

			</li>
			<li class="nav-item">
				<a href="" class="nav-link" data-toggle="modal" data-target="#Login" data-backdrop="static" keyboard="false"><i class="fas fa-sign-in-alt"></i>Login</a>
				</li>
			
		</ul>


	</div>

</nav>

<div class="fade modal" id="SignUp" tabindex="-1">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"> SignUp </h4>
			</div>

			<div class="modal-body">
				<div class="form-group">
					<label>Username</label>
					<input class="form-control" type="text" name="name">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="Email" name="Email">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="Password" name="Password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input class="form-control" type="Password" name="confirm_password">
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success">Submit</button>
				<button class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>	
		</div>	
	</div>
</div>
<div class="fade modal" id="Login" tabindex="-1">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"> SignUp </h4>
			</div>

			<div class="modal-body">
				
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="Email" name="Email">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="Password" name="Password">
				</div>
				
			</div>
			<div class="modal-footer">
				<button class="btn btn-success">Submit</button>
				<button class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>	
		</div>
	</div>
</div>