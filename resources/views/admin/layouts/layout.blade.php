<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	<script src="https://unpkg.com/browse/boxicons@2.0.9/css/" rel='stylesheet'></script>
	<!-- Boxicons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"> -->
	<!-- My CSS -->
	<link rel="stylesheet" href="/admin/style/style.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	@include('admin.layouts.sidebar')

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
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="/admin/style/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->
    @yield('content')
	</section>
	<!-- CONTENT -->
	

	<script src="/admin/style/script.js"></script>
</body>
</html>