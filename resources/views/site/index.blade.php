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
				<div class="sliderAx h-auto">
				    <div id="slider-1" class="container mx-auto">
				        <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
				       		<div class="md:w-1/2">
				        		<p class="font-bold text-sm uppercase">Services</p>
				        		<p class="text-3xl font-bold">Hello world</p>
				        		<p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
				        		<a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
				        	</div>
				    	</div> <!-- container -->
				      <br>
				    </div>

				    <div id="slider-2" class="container mx-auto">
				        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">

				  			<p class="font-bold text-sm uppercase">Services</p>
				        	<p class="text-3xl font-bold">Hello world</p>
				        	<p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
				        	<a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>

				    	</div> <!-- container -->
				      	<br>
				    </div>
				</div>
				<div  class="flex justify-between w-12 mx-auto pb-2">
				    <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
				    <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
				</div>
			</div>
		</div>
	</header>



	@include('site.layouts.script')
	@include('site.layouts.tailwindCarouselScript')
</body>
</html>
