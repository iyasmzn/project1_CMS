<!DOCTYPE html>
<html>
<head>
	<title>BlindNews</title>
	@include('site.layouts.link')
	@include('site.layouts.myCSS')
</head>
<body>
	@include('site.layouts.customFuncPHP')
	@include('site.layouts.nav')

	<div class="header-image-bg-hover w-full absolute top-0" style="height: 600px;z-index: -10;background-image: url('https://images3.alphacoders.com/819/thumb-1920-81925.jpg');background-size: cover;background-position: top;filter: brightness(50%);background-attachment: fixed;"></div>
	<!-- <span class="article-head-title text-5xl text-white absolute py-2 px-8 bg-black font-anton bg-opacity-50" style="left:50%;transform: translate(-50%,200px);letter-spacing: 1px;">{{$articles->title}}</span> -->
	<div class="header-image-bg h-screen md:container relative mx-auto" style="top: 250px;z-index: -10;background-image: url('https://images3.alphacoders.com/819/thumb-1920-81925.jpg');background-size: cover;background-position: center;border-radius: 50px;border: 10px solid white;"></div>
	

	<div class="bg-gray-200 pb-16 pt-8" style="box-shadow: 0px -5px 15px gray">
		<div class="md:container mx-auto bg-white rounded-lg p-4 px-8">			
			<h1 class="text-6xl font-bold">{{ $articles->title }}</h1>
			<div class="font-bold font-spartan text-gray-500 text-sm pt-4 pb-2" style="text-transform: uppercase;">
				<span class="pr-2">CATEGORY</span>|
				<span class="pl-2"><a href="">Author</a></span>
				<i class="psi-record-3 px-2" style="font-size: 10px;transform: translateY(-2.5px);"></i>
				<span class="pl-2">26 April 2020</span>
			</div>
			<p class="text-xl mb-4" style="text-indent: 50px;">
				{{ $articles->content }}
			</p>
		</div>
		<div class="md:container mx-auto bg-white rounded-lg p-4 px-8 mt-12">
			<div class="flex justify-between" style="transform: translateY(-37px);">
				<span class="font-spartan text-3xl">Comments</span>
				<span class="font-spartan text-3xl"><a href="#" class="bg-red-500 text-white p-1 px-2 rounded"><i class="psi-speech-bubble-13"></i></a></span>
			</div>
			<div class="grid grid-rows-3 grid-flow-col gap-4">
			  <div class="row-span-3"></div>
			  <div class="row-span-1 col-span-2"></div>
			  <div class="row-span-2 col-span-2"></div>
			</div>
		</div>
	</div>

	<div class="pt-16 bg-white" style="background-image: url('https://images2.alphacoders.com/105/thumb-1920-1053867.jpg');background-attachment: fixed;">
		<div class="sm:container mx-auto">
			<div class="flex justify-between">
				<div><h1 class="mb-8 text-3xl font-bold font-spartan text-white">Related Articles</h1></div>				
				<div> 
					<!-- KOSONG -->
				</div>
			</div>
			<div class="grid sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 my-4">

					@foreach($articless as $article)
					<div class="latest-article-card mb-4 mt-1 border-gray-300 shadow-md">
						<div class="latest-article-card-image bg-gray-200 rounded-lg border-2 border-white" style="background-image: url('https://images.alphacoders.com/109/thumb-1920-1097505.png');background-size: cover;background-position: center;"></div>
						<div class="font-bold p-4 text-white">
							<p class="text-sm py-1 text-gray-500 font-poppins"><a href="#">Creator</a> | Date</p>
							<h1 class="latest-article-card-title py-2 font-spartan font-bold text-xl">{{ $article->title }}</h1>
						</div>
					</div>
					@endforeach

			</div>
		</div>
		<div class="w-full mt-8 bg-gray-200">
			<div class="sm:container mx-auto py-4">
			</div>
		</div>
	</div>

	

	@include('site.layouts.footer')
	@include('site.layouts.script')
	@include('site.layouts.myScript')
</body>
</html>
