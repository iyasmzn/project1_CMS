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
		.popular-title {
			font-family: 'Anton', sans-serif;
		}
		.popular-info {
		}
		.news-sinopsis::first-letter {
			font-size: 2em;
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
			<div class="bg-white p-2 max-h-3/4"  style="overflow: hidden;box-shadow: 0px 0px 15px black;">
				<div class="h-auto" style="overflow: hidden;">
				    <div id="slider-1" class="container mx-auto max-w-screen-sm">
				        <div class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://www.aljazeera.com/mritems/imagecache/mbdxxlarge/mritems/Images/2020/7/22/63dacc07164e49ffae040419420ebfd9_18.jpg);">
				       		<div class="md:w-full text-center">
				        		<p class="font-bold text-sm uppercase text-white bg-red-500 inline-block px-2">HOT</p>
				        		<p class="popular-title text-3xl text-center" style="background-color: rgba(0,0,0,0.5);">Twitter 'looking' at a possible TikTok tie-up</p>
				        		<p class="popular-info text-xl mb-10 leading-none text-center"><span  style="background-color: rgba(0,0,0,0.5);line-height: 33px;">The messaging platform has approached under-fire TikTok about a possible deal, according to reports.</span></p>
				        		<a href="#" class="bg-red-500 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-white hover:text-red-500">Read More >></a>
				        	</div>
				    	</div> <!-- container -->
				    </div>
				    <div id="slider-2" class="container mx-auto max-w-screen-sm">
				        <div class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://ichef.bbci.co.uk/news/660/cpsprodpb/13DB7/production/_113953318_mediaitem113953317.jpg">
				       		<div class="md:w-full text-left">
				        		<p class="font-bold text-sm uppercase text-white bg-green-500 inline-block px-2">NEW</p>
				        		<p class="popular-title text-3xl" style="background-color: rgba(0,0,0,0.5);">China restaurant apologises for weighing customers</p>
				        		<p class="popular-info text-xl mb-10 leading-none"><span  style="background-color: rgba(0,0,0,0.5);line-height: 33px;">A restaurant in central China has apologised for encouraging diners to weigh themselves and then order food accordingly.</span></p>
				        		<a href="#" class="bg-red-500 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-white hover:text-red-500">Read More >></a>
				        	</div>
				    	</div> <!-- container -->
				    </div>
				</div>
			</div>
			<div  class="flex justify-center w-auto mx-auto absolute inset-x-0 top-0 mt-4 pt-8 z-20">
			    <button id="sButton1" onclick="sliderButton1()" class="bg-white w-8 rounded pb-2 mx-1" ></button>
			    <button id="sButton2" onclick="sliderButton2() " class="bg-white w-8 rounded pb-2 mx-1"></button>
			</div>
			<div class="absolute flex justify-center bottom-0 text-white">
				<a href="#" class="mb-6"><i class="psi-arrow-down text-4xl"></i></a>
			</div>
			<div class="absolute bottom-20 right-0 text-white transform rotate-90">
				<a href="#" class="mb-6">@indonesianNews</a>
			</div>
		</div>
	</header>
	<div class="flex flex-row justify-around mt-8">

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
	@include('site.layouts.tailwindCarouselScript')
</body>
</html>
