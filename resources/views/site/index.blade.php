<!DOCTYPE html>
<html>
<head>
	<title>BlindNews</title>
	@include('site.layouts.link')
	<style type="text/css">
		#nav-logo {
			font-family: 'Lobster', cursive;
		}
		#nav-menu {
			font-family: 'Montserrat', sans-serif;
		}
		header {
			background-image: url("{{ asset('images/bg-computer.jpg') }}");
		}
		header h1 {
			font-family: 'Anton', sans-serif;
		}
	</style>
</head>
<body>
	<nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10 text-white bg-transparent">
		<div id="nav-logo" class="p-4">
			<div class="tracking-widest text-4xl pl-4">
				<a href="#" class="transition duration-500 hover:text-red-400"><i class="psi-eyebrow-2 text-5xl"></i><span class="text-red-400">Blind</span>News</a>
			</div>
		</div>
		<div id="nav-menu" class="p-4 md:flex flex-row justify-between font-bold">
			<a href="#" class="mx-4 text-lg hover:text-opacity-25 transition duration-500">HOME</a>
			<a href="#" class="mx-4 text-lg hover:text-opacity-25 transition duration-500">BLOG</a>
			<a href="#" class="mx-4 text-lg hover:text-opacity-25 transition duration-500">NEWS</a>
			<a href="#" class="mx-4 text-lg hover:text-opacity-25 transition duration-500">CONTACT US</a>
			<a href="#" class="mx-4 text-lg hover:text-opacity-25 transition duration-500"><i class="psi-gears"></i></a>
		</div>
	</nav>
	<header class="h-screen relative bg-black bg-center bg-cover">
		<div class="h-screen bg-black bg-opacity-50 flex items-center justify-center">
			<div class="bg-red-100">
				<h1 class="text-6xl">Blind News!</h1>
			</div>
		</div>
	</header>
</body>
</html>
