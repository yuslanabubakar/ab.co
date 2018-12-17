<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Register | Ab.co</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ URL('css/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL('css/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL('css/assets/vendor/linearicons/style.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ URL('css/assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ URL('css/assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ URL('css/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ URL('css/assets/img/favicon.png') }}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box " style="width:30%; height:75%;">
					<div class="left" style="width:100%;">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{ URL('pict/abuw.png') }}" alt="Klorofil Logo"></div>
								<p class="lead">Register Account</p>
							</div>
							<form class="form-auth-small" action="index.php">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Name</label>
									<input type="email" class="form-control" name="name" value="" placeholder="Name">
                                </div>
                                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" name="email" value="" placeholder="Email">
                                </div>
                                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Password</label>
									<input type="email" class="form-control" name="password" value="" placeholder="Password">
                                </div>
                                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Password Validation</label>
									<input type="email" class="form-control" name="passwordvalidation" value="" placeholder="Password Validation">
                                </div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
