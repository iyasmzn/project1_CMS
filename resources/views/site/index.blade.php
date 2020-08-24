<!DOCTYPE html>
<html>
<head>
	<title>BlindNews</title>
	@include('site.layouts.link')
	<style type="text/css">
		#nav-logo {
			font-family: 'Lobster', cursive;
		}
		#nav-menu, .header-info-date {
			font-family: 'Montserrat', sans-serif;
		}
			/*background-image: url("{{ asset('images/bg-computer.jpg') }}");*/
		.header-info h1, .popular-title {
			font-family: 'Anton', sans-serif;
		}
		.news-sinopsis::first-letter {
			font-size: 2em;
		}
		.owl-nav .owl-prev, .owl-nav .owl-next {
			position: absolute;
			top: 50%;
			width: 100px;
			background-color: rgba(0,0,0,0.5)!important;
			right: 20px;
		}
		.owl-nav img {
			filter: brightness(1500%);
		}
		.owl-prev {
			transform: translateY(50px);
		}
		.owl-next {
			transform: translateY(-50px);
		}
		.owl-dots {
			background-color: rgba(0,0,0,0.5);
			padding: 15px;
			border-radius: 7px;
			position: absolute;
			bottom: 20px;
			right: 100px;
		}
		.header-info {
			height: auto;
			position: absolute;
			bottom: 0;
			left: 5%;
			border-radius: 20px 20px 0px 0px;
		}
		.header-info h1 {
			letter-spacing: 1px;
			text-indent: 40px;
		}
		.header-image-hover {
			transition: all 1s;
		}
		.header-image:hover .header-image-hover {
			transform: scale(1.2);
		}
		.search-input {
			background-color: black;
			width: 0px;
		}
		.search-icon:hover {
			cursor: pointer;
		}
		.article-list:hover .image-article {
			transform: scale(1.2);
		}
		.popular-image {
			background-size: cover;
			background-position: center;
		}
		.popular-card {
			transition: all 0.5s;
		}
		.popular-card:hover {
			transform: translateY(10px);
			cursor: pointer;
		}
		.popular-card:hover .read-button-popular {
			opacity: 1!important;
		}
		.popular-card:hover .popular-tag-card {
			background-color: green!important;
		}
		.popular-card:hover .popular-card-title {
			color: blue;
		}
		.read-button-popular:hover {
			background-color: tomato;
		}
	</style>
</head>
<body>
	<nav id="nav" class="fixed inset-x-0 top-0 z-10 text-white" style="background-color: rgba(0,0,0,0.7);">
		<div class="sm:container flex flex-row justify-between mx-auto">
			<div id="nav-logo" class="p-4">
				<div class="tracking-widest text-4xl pl-4">
					<a href="#" class="transition duration-500 hover:text-red-400"><i class="psi-eyebrow-2 text-5xl"></i><span class="text-red-400">Blind</span>News</a>
				</div>
			</div>
			<div id="nav-menu" class="p-4 md:flex flex-row justify-between font-bold items-center relative z-100">
				<a href="#" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">HOME</a>
				<a href="#" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">BLOG</a>
				<a href="#" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">NEWS</a>
				<a href="#" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">CONTACT US</a>
				<a href="#" class="mx-4 text-lg hover:text-red-400 transition duration-500"><i class="psi-gears"></i></a>
			</div>
		</div>
	</nav>

	<div id="header-carousel" class="owl-carousel owl-theme text-white w-full h-screen relative">

	    <div class="header-image w-full mx-auto h-screen">
	    	<div class="h-screen" style="">
	    		<div class="header-image-hover h-screen w-full relative" style="z-index: -10;background-image: url('https://images3.alphacoders.com/819/thumb-1920-81925.jpg');"></div>
		    	<div class="header-info w-1/2 bg-black bg-opacity-50 relative bottom-0 text-white p-8">

		    		<h1 class="text-4xl my-5 mt-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    		tempor incididunt ut labore et dolore magna aliqua</h1> 
		    		
		    		<p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			    	<div class="header-info-tag p-2 bg-blue-400 text-white bg-opacity-50 absolute top-0 font-bold">
			    		MOST READ
			    	</div>

			    	<div class="header-info-date p-2 pl-4 bg-black text-white bg-opacity-50 absolute bottom-0 right-0" style="border-radius: 7px 0 0 0;">
			    		26 - 04 - 2020
			    	</div>

		    		<a href="#" class="header-read-more p-4 hover:bg-red-400 text-red-400 hover:text-white border-2 border-red-400 font-bold rounded transition duration-500 mt-8 mb-8">
		    			READ MORE
		    		</a>

		    	</div>
	    	</div>
		</div>
	    <div class="header-image w-full mx-auto h-screen">
	    	<div class="h-screen" style="">
	    		<div class="header-image-hover h-screen w-full relative" style="z-index: -10;background-image: url('https://images6.alphacoders.com/109/thumb-1920-1094480.jpg');"></div>
		    	<div class="header-info w-1/2 bg-black bg-opacity-50 relative bottom-0 text-white p-8">

		    		<h1 class="text-4xl my-5 mt-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    		tempor incididunt ut labore et dolore magna aliqua</h1> 
		    		
		    		<p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			    	<div class="header-info-tag p-2 bg-blue-400 text-white bg-opacity-50 absolute top-0 font-bold">
			    		MOST READ
			    	</div>

			    	<div class="header-info-date p-2 pl-4 bg-black text-white bg-opacity-50 absolute bottom-0 right-0" style="border-radius: 7px 0 0 0;">
			    		26 - 04 - 2020
			    	</div>

		    		<a href="#" class="header-read-more p-4 hover:bg-red-400 text-red-400 hover:text-white border-2 border-red-400 font-bold rounded transition duration-500 mt-8 mb-8">
		    			READ MORE
		    		</a>

		    	</div>
	    	</div>
		</div>
	    <div class="header-image w-full mx-auto h-screen">
	    	<div class="h-screen" style="">
	    		<div class="header-image-hover h-screen w-full relative" style="z-index: -10;background-image: url('https://artfiles.alphacoders.com/134/thumb-1920-134317.jpg');"></div>
		    	<div class="header-info w-1/2 bg-black bg-opacity-50 relative bottom-0 text-white p-8">

		    		<h1 class="text-4xl my-5 mt-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    		tempor incididunt ut labore et dolore magna aliqua</h1> 
		    		
		    		<p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			    	<div class="header-info-tag p-2 bg-blue-400 text-white bg-opacity-50 absolute top-0 font-bold">
			    		MOST READ
			    	</div>

			    	<div class="header-info-date p-2 pl-4 bg-black text-white bg-opacity-50 absolute bottom-0 right-0" style="border-radius: 7px 0 0 0;">
			    		26 - 04 - 2020
			    	</div>

		    		<a href="#" class="header-read-more p-4 hover:bg-red-400 text-red-400 hover:text-white border-2 border-red-400 font-bold rounded transition duration-500 mt-8 mb-8">
		    			READ MORE
		    		</a>

		    	</div>
	    	</div>
		</div>

	</div>

	<div class="bg-gray-200 py-16">
		<div class="xl:px-32 md:px-12 sm:px-2 mx-auto">
			<h1 class="mb-8 text-3xl font-bold">Most Popular Articles</h1>
			<div id="popular-carousel" class="owl-carousel owl-theme">

				<?php for ($i=0; $i < 12; $i++) { ?>
				<div class="popular-card bg-white border-2 border-gray-300 relative font-bold" style="width: 300px;overflow: hidden;border-radius: 7px;">
					<div class="popular-image w-full bg-black" style="height: 200px;background-image: url('https://images3.alphacoders.com/206/thumb-1920-206999.jpg');"></div>
					<div class="p-4">
						<h2 class="text-gray-500">Author</h2>
						<h1 class="popular-card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h1>
					</div>
					<div class="popular-tag-card absolute top-0 left-0 m-2 ml-4 p-1 px-3 text-white font-bold" style="border-radius: 20px;background-color: rgba(0,0,0,0.1);transition: all 0.5s;">
						Article
					</div>
					<div class="read-button-popular absolute p-4 px-8 bg-black bg-opacity-50 text-white border-2 border-transparent transition duration-500 rounded font-bold" style="top: 50%;left: 50%;transform: translate(-50%,-150%);text-align: center;opacity: 0;"><a href="#">READ</a></div>
				</div>
				<?php } ?>
				
			</div>	
		</div>
	</div>

	<div class="pt-16 bg-white">
		<div class="sm:container mx-auto">
			<h1 class="mb-8 text-3xl font-bold">Latest Articles</h1>
			<div class="grid grid-cols-3 gap-3 my-4">
				@foreach($articles as $article)
					<div class="text-center bg-gray-200">{{ $article->title }}</div>
				@endforeach
			</div>
		</div>
		<div class="w-full mt-8 bg-gray-200">
			<div class="sm:container mx-auto py-4">
				{{ $articles->links() }}								
			</div>
		</div>
	</div>

	<div class="py-16 bg-white">
		<div class="md:container mx-auto">
			<div class=""></div>
		</div>
	</div>
	



	@include('site.layouts.script')
	@include('site.layouts.myScript')
</body>
</html>
