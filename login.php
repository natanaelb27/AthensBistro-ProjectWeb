<?php include('header.php'); ?>
<body class="bodylogin">
	<header class="appetizer">
		<div class="main">
			<?php include('navigationbar.php'); ?>
		</div>
		
	</header>
	<div class="page-wrapper">
		<div class="login-box">
			<h1>Login</h1>
			<form method="post" action="loginproses.php" >
				<div class="textbox">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="username" placeholder="Username">
				</div>
				<div class="textbox">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input class="" type="password" name="password" placeholder="Password">
				</div>
				<input class="btnlogin" type="submit" value="Sign in" name="btn-login" >
			</form>
			
		</div>
		
	</div>


</body>
</html>

