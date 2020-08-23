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
			/*background-image: url("{{ asset('images/bg-computer.jpg') }}");*/
			background-image: url('https://images3.alphacoders.com/109/thumb-1920-1092574.jpg');
		}
		header h1 {
			font-family: 'Anton', sans-serif;
		}
		.popular-title {
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
	</style>
</head>
<body>
	<nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10 text-white" style="background-color: rgba(0,0,0,0.7);">
		<div id="nav-logo" class="p-4">
			<div class="tracking-widest text-4xl pl-4">
				<a href="#" class="transition duration-500 hover:text-red-400"><i class="psi-eyebrow-2 text-5xl"></i><span class="text-red-400">Blind</span>News</a>
			</div>
		</div>
		<div id="nav-menu" class="p-4 md:flex flex-row justify-between font-bold items-center relative z-100">
			<a href="#" class="mx-4 text-lg hover:underline transition duration-500">HOME</a>
			<a href="#" class="mx-4 text-lg hover:underline transition duration-500">BLOG</a>
			<a href="#" class="mx-4 text-lg hover:underline transition duration-500">NEWS</a>
			<a href="#" class="mx-4 text-lg hover:underline transition duration-500">CONTACT US</a>
			<a href="#" class="mx-4 text-lg hover:underline transition duration-500"><i class="psi-gears"></i></a>
		</div>
	</nav>

	<div id="header-carousel" class="owl-carousel owl-theme text-white w-full h-screen relative">

	    <div class="w-full bg-white text-black mx-auto h-screen">
	    	<div style="background-image: url('https://images2.alphacoders.com/109/thumb-1920-1090609.jpg');">
		    	<div class="w-1/2 h-screen flex items-center bg-black bg-opacity-50 relative bottom-0 text-white">
		    		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    		tempor incididunt ut labore et dolore magna</div> 
		    	</div>
	    	</div>
		</div>
	    <div class="w-full bg-white text-black mx-auto h-screen">
	    	<div style="background-image: url('https://images8.alphacoders.com/562/thumb-1920-562449.jpg');">
		    	<div class="w-1/2 h-screen flex items-center bg-black bg-opacity-50 relative bottom-0 text-white">
		    		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    		tempor incididunt ut labore et dolore magna</div> 
		    	</div>
	    	</div>
		</div>
	    <div class="w-full bg-white text-black mx-auto h-screen">
		    	<img src="https://images8.alphacoders.com/562/thumb-1920-562449.jpg">
		</div>

	</div>


	<div class="w-full md:container">
		
	</div>

	<div class="flex flex-row justify-around mt-8 xl:container  sm:w-full mx-auto">

		<div class="w-8/12 p-8">
		@foreach($articles as $article)
			<div class="flex flex-row justify-between">
				<div class="w-1/4 overflow-hidden" data-aos="fade-right"  data-aos-offset="100">
					<img src="https://ichef.bbci.co.uk/news/660/cpsprodpb/185EF/production/_113932899_gettyimages-1214408745-594x594.jpg">
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
