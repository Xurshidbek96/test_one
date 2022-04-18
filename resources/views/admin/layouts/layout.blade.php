<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('admin/style.css')}}">

	

	<title>Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Dashboard</span>
		</a>
		<ul class="side-menu top">
			<li class="@yield('banners')">
				<a href="{{route('banners.index')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Images</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">

			<!-- <li class="@yield('sms')">
				<a href="">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Xabarlar</span>
				</a>
			</li> -->
			
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
		<!-- NAVBAR -->
		@yield('content')
	</section>
	<!-- CONTENT -->
	
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>;

	<script src="{{asset('admin/script.js')}}"></script>
</body>
</html>