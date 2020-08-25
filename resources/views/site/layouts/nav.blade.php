<nav id="nav" class="fixed inset-x-0 top-0 z-10 text-white" style="">
	<div class="sm:container flex flex-row justify-between mx-auto">
		<div id="nav-logo" class="p-4">
			<div class="tracking-widest text-4xl pl-4">
				<a href="/" class="transition duration-500 hover:text-red-400"><i class="psi-eyebrow-2 text-5xl"></i><span class="text-red-400">Blind</span>News</a>
			</div>
		</div>
		<div id="nav-menu" class="p-4 md:flex flex-row justify-between font-bold items-center relative z-100">
			<a href="{{ route('homeSite') }}" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">HOME</a>
			<a href="#" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">BLOG</a>
			<a href="#" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">NEWS</a>
			<a href="#" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">CONTACT US</a>
			<a class="mx-4 text-lg hover:text-red-400 transition duration-500 font-light" onclick="showSearchPage();"><i class="font-light psi-speech-bubble-comic-2 text-4xl"></i></a>
		</div>
	</div>

	<div class="search-full-page absolute h-screen top-0 right-0" style="overflow: hidden;">
		<div class="search-page h-screen fixed bg-black bg-opacity-50 p-8 pr-32 pt-12 text-center" onmouseleave="hiddenSearchPage()">

			<div class="mb-8">
				<a href="/admin" class="px-4 p-2 bg-red-900 text-white hover:bg-red-400 transition duration-200">Login Admin</a>
			</div>

			<h1 class="font-spartan font-bold py-4">SEARCH</h1>
			<form class="w-full max-w-sm mt-4">
			  	<div class="flex items-center border-b border-red-400 py-2">
			    	<input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Search anything here...">
			    	<button class="flex-shrink-0 bg-red-400 hover:bg-red-700 border-red-400 hover:border-red-700 text-sm border-4 text-white py-1 px-2 rounded transition duration-200" type="button">
			      		<i class="pli-magnifi-glass text-xl"></i>
			    	</button>
			  	</div>
			</form>
			
			<h1 class="font-spartan font-bold py-4 pt-12">CATEGORY</h1>
			
			<div class="grid grid-cols-1 gap-4">
				
				@foreach($categories as $category)
				<button class="flex-shrink-0 bg-green-400 hover:bg-green-700 border-green-400 hover:border-green-700 text-sm border-4 text-white py-1 px-2 rounded transition duration-200" type="submit">
					{{$category->name}}
				</button>
				@endforeach

			</div>
			
			<h1 class="font-spartan font-bold py-4 pt-12">TAGS</h1>
			
			<div class="grid grid-cols-2 gap-2">
				
				@foreach($tags as $tag)
				<button class="flex-shrink-0 bg-blue-400 hover:bg-blue-700 border-blue-400 hover:border-blue-700 text-sm border-4 text-white py-1 px-2 rounded transition duration-200" type="submit" style="text-transform: uppercase;">
					{{ $tag->name }}
				</button>
				@endforeach

			</div>

			<div class="w-full pt-1 bg-white my-4"></div>
		</div>
	</div>

</nav>