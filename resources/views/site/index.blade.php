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
		.popular-info {
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
			height: 60%;
			position: absolute;
			bottom: 0;
			left: 5%;
			border-radius: 20px 20px 0px 0px;
		}
		.header-info h1 {
			letter-spacing: 1px;
			text-indent: https://images6.alphacoders.com/109/thumb-1920-1094480.jpg-read-more {
			bottom: 20px;left: 50%;transform: translateX(-50%);
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
		    		
		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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

		    		<a href="#" class="header-read-more p-4 hover:bg-red-400 text-red-400 hover:text-white border-2 border-red-400 absolute font-bold rounded transition duration-500">
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
		    		
		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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

		    		<a href="#" class="header-read-more p-4 hover:bg-red-400 text-red-400 hover:text-white border-2 border-red-400 absolute font-bold rounded transition duration-500">
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
		    		
		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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

		    		<a href="#" class="header-read-more p-4 hover:bg-red-400 text-red-400 hover:text-white border-2 border-red-400 absolute font-bold rounded transition duration-500">
		    			READ MORE
		    		</a>

		    	</div>
	    	</div>
		</div>

	</div>


	<div class="w-full md:container">
		
	</div>

	<div class="flex flex-row justify-around mt-8 xl:container  sm:w-full mx-auto">

		<div class="w-8/12 p-8">
		@foreach($articles as $article)
			<div class="flex flex-row justify-between">
				<div class="w-1/4 overflow-hidden" data-aos="fade-right"  data-aos-offset="100">
					<img src="https://images6.alphacoders.com/109/thumb-1920-1094480.jpg">
					<p><i>Lorem ipsum dolor sit amet</i></p>
				</div>
				<div class="w-3/4 pl-4" data-aos="fade-right"  data-aos-offset="100" data-aos-delay="150">
					<p class="news-sinopsis">{{ $article->title }}</p>
					<p style="text-indent: 20px;">{{ $article->content }}</p>
				</div>
			</div>
			<div class="w-full pt-1 my-3 bg-gray-400" data-aos="fade-right" data-aos-offset="50" data-aos-duration="300" data-aos-easing="ease-in-sine"></div>
		@endforeach
			<div>
				{{ $articles->links() }}
			</div>
		</div>

		<div class="w-4/12 p-8 sm:hidden xl:block">
			<hr>
			<div class="">
				<p>Categories</p>
				<ul class="list-disc">
					<li>Categories</li>
					<li>Categories</li>
					<li>Categories</li>
					<li>Categories</li>
					<li>Categories</li>
					<li>Categories</li>
					<li>Categories</li>
					<li>Categories</li>
					<li>Categories</li>
				</ul>
			</div>
		</div>
	</div>



	@include('site.layouts.script')
	@include('site.layouts.myScript')
</body>
</html>
