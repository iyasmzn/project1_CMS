<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Link -->
	@include('site.layouts.link')

	<style type="text/css">
		#logo {
			font-family: 'Anton', sans-serif;
		}
		#navbar-menu a {
			font-family: 'Montserrat', sans-serif;
		}
	</style>
</head>
<body>
	<div class="w-full overflow-x-hidden">
		<div class="w-full h-screen bg-gray-200 overflow-y-hidden">
			<div class="flex w-full h-20 bg-red-500 absolute top">
				<div class="w-1/3 flex justify-start items-center pl-5">
					<h1 id="logo" class="text-white text-4xl">CMS</h1>
				</div>
				<div id="navbar-menu" class="flex w-2/3 justify-around items-center text-white h-full border-l-2 border-white">
					<a class="" href="">HOME</a>
					<a href="">BLOG</a>
					<a href="">ARTICLES</a>
					<a href="">CONTACT US</a>
				</div>
			</div>
			<div class="flex w-full h-full bg-white text-center absolute top">
				<h1 class="text-gray-700">Read this bro</h1>
			</div>
		</div>
	</div>
</body>
</html>
