<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upicon</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-green font-weight-bold">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html"><img src="img/logo1.png" alt="Home"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link text-green" href="{{ route('home')}}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('property.index')}}">Project</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Add Property</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="csr.html">CSR</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('aboutUs')}}">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    @yield('content')
</body>

</html>