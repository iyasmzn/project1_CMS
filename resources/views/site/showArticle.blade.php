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

	<div class="header-image-bg-hover w-full absolute top-0 bg-gray-200" style="height: 600px;z-index: -10;background-image: url('/img/{{ $article->image }}');background-size: cover;background-position: top;filter: brightness(50%);background-attachment: fixed;"></div>
	<!-- <span class="article-head-title text-5xl text-white absolute py-2 px-8 bg-black font-anton bg-opacity-50" style="left:50%;transform: translate(-50%,200px);letter-spacing: 1px;">{{$article->title}}</span> -->
	<div class="header-image-bg h-screen md:container relative mx-auto bg-gray-200" style="top: 250px;z-index: -10;background-image: url('/img/{{ $article->image }}');background-size: cover;background-position: center;border-radius: 50px;border: 10px solid white;"></div>
	

	<div class="bg-gray-200 pb-16 pt-8" style="box-shadow: 0px -5px 15px gray">
		<div class="md:container mx-auto bg-white rounded-lg p-8 px-16">			
			<h1 class="text-6xl font-bold">{{ $article->title }}</h1>
			<div class="font-bold font-spartan text-gray-500 text-sm pt-4 pb-2" style="text-transform: uppercase;">
				<span class="pr-2">{{$article->category->name}}</span>|
				<span class="pl-2"><a href="">{{$article->user->name}}</a></span>
				<i class="psi-record-3 px-2" style="font-size: 10px;transform: translateY(-2.5px);"></i>
				<span class="pl-2">{{ Str::words($article->created_at, 1, '') }}</span>
			</div>
			<p class="text-xl mb-4" style="text-indent: 50px;">
				{!! $article->content !!}
			</p>
		</div>
		<div class="md:container mx-auto bg-white rounded-lg p-2 px-8 mt-16" style="height: 5px;">
			<div class="flex justify-between" style="transform: translateY(-27px);">
				<span class="font-spartan text-3xl">Comments</span>
				<span class="font-spartan text-5xl" style="transform: translateY(-30px);"><a onclick="showCommentForm();" class="paper-plane-icon bg-red-500 border-2 border-red-500 text-white hover:text-red-500 hover:bg-red-100 p-1 px-2 transition duration-300" style="border-radius: 100px;"><i class="psi-paper-plane"></i></a></span>
			</div>
		</div>
		<div class="md:container mx-auto">
			
			<div class="comments-form w-1/2 mx-auto bg-white rounded-lg p-4 px-8 mt-12">
				<h1 class="font-poppins text-gray-500">Comment Form</h1>
				<form class="w-full pt-4" action="/comment/{{ $article->id }}" method="post">
					@csrf
					<table class="font-spartan text-gray-700 w-full">
						<tr class="border-b-2 border-gray-300">
							<td width="100"><label for="nameee" class="w-full pr-2">ur Name :</label></td>
							<td>
								<input id="nameee" type="text" name="name" class="w-full px-2 p-1">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<textarea class="w-full border-b-2 p-4" name="body" placeholder="ur commentar here..."></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="text-center">
								<button onclick="hiddenCommentForm()" class="paper-plane-send bg-blue-100 text-blue-500 border-2 border-blue-500 hover:text-white hover:bg-blue-500 px-2 p-1 rounded-md font-poppins transition duration-300"><i class="psi-paper-plane text-5xl"></i></button>
								<p onclick="hiddenCommentForm()"  class="comment-dismiss psi-cross bg-red-500 text-red-100 border-2 border-red-100 hover:text-red-500 hover:bg-red-100 px-2 p-1 rounded-md font-poppins transition duration-300"></p>
							</td>
						</tr>
					</table>
				</form>
			</div>

		</div>
		<div class="article-comments md:container mx-auto bg-white rounded-lg p-2 px-8 mt-16">
			@php $no=1;  @endphp
				<div>
					<table class="w-full font-spartan">
						<thead>
							<tr>
								<td width="50"><span class="text-gray-500">No </span></td>
								<td width="200" class="p-4" style="text-transform: capitalize;">
									<span class="text-gray-500">Name : </span><br>
								</td>
								<td>
									<span class="text-gray-500">Comments : </span><br>
								</td>
								<td width="100"></td>
							</tr>
						</thead>
						<tbody>

						@foreach($comments as $comment)
							<tr class="border-b-2 border-gray-300">
								<td width="50">{{ $no++ }}</td>
								<td width="200" class="p-4" style="text-transform: capitalize;">
									{{ $comment->name }}
								</td>
								<td class="p-4">
									{{ $comment->body }}
								</td>
								<td>
									<span><i class="pli-like text-xl"></i></span>
									<span><i class="pli-paper-plane text-xl"></i></span>
									<span><i class="pli-cross text-xl"></i></span>
								</td>
							</tr>
						@endforeach
							<tr>
								<td colspan="4">
									<div class="p-4 pt-8">{{ $comments->links() }}</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

		</div>


	</div>

	<div class="pt-16 bg-white" style="background-image: url('https://images2.alphacoders.com/105/thumb-1920-1053867.jpg');background-attachment: fixed;">
		<div class="sm:container mx-auto">
			<div class="flex justify-between">
				<div><h1 class="mb-8 text-3xl font-bold font-spartan text-white">Related Article</h1></div>				
				<div> 
					<!-- KOSONG -->
				</div>
			</div>
			<div class="grid sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 my-4">

					@foreach($articles as $article)
					<div class="latest-article-card mb-4 mt-1 border-gray-300 shadow-md">
						<div class="latest-article-card-image bg-gray-200 rounded-lg border-2 border-white" style="background-image: url('https://images.alphacoders.com/109/thumb-1920-1097505.png');background-size: cover;background-position: center;"></div>
						<div class="font-bold p-4 text-white">
							<p class="text-sm py-1 text-gray-500 font-poppins"><a href="#">{{ $article->user->name }}</a> | {{ Str::words($article->created_at, 1, '') }}</p>
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
