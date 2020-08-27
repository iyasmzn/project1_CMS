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

	<div id="header-carousel" class="owl-carousel owl-theme text-white w-full h-screen relative">

		@foreach($mostPopular as $article)
	    <div class="header-image w-full mx-auto h-screen">
	    	<div class="h-screen" style="">
	    		<div class="header-image-hover h-screen w-full relative" style="z-index: -10;background-image: url('/img/{{ $article->image }}');background-size: cover;background-position: center;"></div>
		    	<div class="header-info xl:w-1/2 md:w-3/4 sm:w-full bg-black bg-opacity-50 relative bottom-0 text-white p-8" data-aos="fade-up">

		    		<h1 class="text-4xl my-5 mt-12">{{ $article->title }}</h1> 
		    		
		    		<p class="mb-8">{{ Str::words($article->content, 20, ' ...') }}</p>

			    	<div class="header-info-tag p-2 bg-red-600 text-white bg-opacity-50 absolute top-0 font-bold">
			    		TOP VIEW
			    	</div>
			    	<div class="header-info-tag p-2 bg-blue-400 text-white bg-opacity-50 absolute top-0 font-bold" style="right: 30px;">
			    		{{ $article->counter }} <span class="psi-eye-visible text-3xl pl-2"></span>
			    	</div>

			    	<div class="header-info-date p-2 pl-4 bg-black text-white bg-opacity-50 absolute bottom-0 right-0 font-spartan" style="border-radius: 7px 0 0 0;">
			    		{{ Str::words($article->created_at, 1, '') }}
			    	</div>

		    		<div class="w-full text-center pb-12">
		    			<a href="/article-site/{{ $article->slug }}" class="header-read-more p-4 hover:bg-red-400 text-red-400 hover:text-white border-2 border-red-400 font-bold rounded transition duration-500 mt-8 mb-8">
			    			READ MORE
			    		</a>
		    		</div>

		    	</div>
	    	</div>
		</div>
		@endforeach

	</div>

	<div class="bg-gray-200 py-16">
		<div class="xl:px-32 md:px-12 sm:px-2 mx-auto">
			<h1 class="mb-8 text-3xl font-bold font-spartan" data-aos="fade-up">Most Popular Articles</h1>
			<div id="popular-carousel" class="owl-carousel owl-theme">

				@foreach($popular as $article)
				<div class="popular-card bg-white border-2 border-gray-300 relative font-bold" style="width: 300px;overflow: hidden;border-radius: 7px;" data-aos="fade-up">
					<div class="popular-image w-full bg-black" style="height: 200px;background-image: url('/img/{{ $article->image }}');filter: brightness(50%);transition: all 0.5s;"></div>
					<div class="p-4">
						<h2 class="text-gray-500 font-spartan">{{$article->user->name}}</h2>
						<h1 class="popular-card-title font-poppins">{{ $article->title }}</h1>
					</div>
					<div class="popular-tag-card absolute top-0 left-0 m-2 ml-4 p-1 px-3 text-white font-bold" style="border-radius: 20px;background-color: rgba(0,0,0,0.1);transition: all 0.5s;">
						{{$article->category->name}}
					</div>
					<div class="popular-tag-card-count absolute top-0 right-0 m-2 ml-4 p-1 px-3 text-white font-bold" style="border-radius: 20px;background-color: rgba(0,0,0,0.1);transition: all 0.5s;">
						{{$article->counter}} <span class="psi-eye-visible pl-2 text-xl"></span>
					</div>
					<div class="read-button-popular absolute bg-black bg-opacity-50 text-white border-2 border-transparent transition duration-500 rounded font-bold" style="top: 50%;left: 50%;transform: translate(-50%,-50%);text-align: center;opacity: 0;"><a href="/article-site/{{ $article->slug }}" class="p-4 px-8" style="display: block;">READ</a></div>
				</div>
				@endforeach
				
			</div>	
		</div>
	</div>

	<div class="pt-16 bg-white">
		<div class="sm:container mx-auto">
			<div class="flex justify-between">
				<div><h1 class="mb-8 text-3xl font-bold font-spartan" data-aos="fade-up">Latest Articles</h1></div>				
				<div>
					<div class="bg-red-500 px-4 border-2 border-red-500" style="border-radius: 50px;box-shadow: 2px 2px 12px gray;" data-aos="fade-left" data-aos-delay="200">
						<span class="font-poppins text-white">CATEGORY</span>
						<i class="psi-arrow-right text-xl text-white"></i>
						<select class="bg-white p-2 font-bold text-gray-500 font-didact">
								<option>All</option>

							@foreach($categories as $cate)
								<option>{{$cate->name}}</option>
							@endforeach

						</select>
					</div>
				</div>
			</div>
			<div class="grid sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 my-4">

				@foreach($articles as $article)
					<div class="latest-article-card mb-4 mt-1" data-aos="zoom-in">
						<div class="latest-article-card-image rounded-lg bg-gray-200" style="background-image: url('/img/{{ $article->image }}');background-size: cover;background-position: center;"><a style="display: block;background-color: rgba(0,0,0,0);width: 100%;height: 100%;" href="/article-site/{{ $article->slug }}"></a></div>
						<div class="font-bold p-4">
							<p class="text-sm py-1 text-gray-500 font-poppins"><a href="#">{{$article->user->name}}</a> | {{$article->created_at}} <span class="psi-eye-visible text-2xl pl-4 pr-1"></span> {{ $article->counter }}</p>
							<h1 class="latest-article-card-title py-2 font-spartan"><a href="/article-site/{{ $article->slug }}">{{ $article->title }}</a></h1>
							<p class="font-light text-sm font-didact" style="text-indent: 20px;width: 100%;">{{ Str::words($article->content, 15, ' ...') }}</p>
							<!-- <p class="font-light text-sm font-didact" style="text-indent: 20px;width: 100%;">{{ $article->content }}</p> -->
						</div>
					</div>
				@endforeach

			</div>
		</div>
		<div class="w-full mt-8 bg-gray-200">
			<div class="sm:container mx-auto py-4">
				{{ $articles->links() }}								
			</div>
		</div>
	</div>

	@include('site.layouts.footer')
	@include('site.layouts.script')
	@include('site.layouts.myScript')
</body>
</html>
