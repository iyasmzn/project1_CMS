<style type="text/css">
	body {
		overflow-x: hidden;
	}
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
	.font-poppins {
		font-family: 'Poppins', sans-serif;
	}
	.font-anton {
		font-family: 'Anton', sans-serif;
	}
	.font-didact {
		font-family: 'Didact Gothic', sans-serif;
	}
	.font-spartan {
		font-family: 'Spartan', sans-serif;
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
		background-color: navy!important;
	}
	.popular-card:hover .popular-tag-card-count {
		background-color: black!important;
	}
	.popular-card:hover .popular-card-title {
		color: tomato;
	}
	.popular-card:hover .popular-image {
		filter: brightness(100%)!important;
	}
	.read-button-popular:hover {
		background-color: tomato;
	}
	.latest-article-card-image {
		height: 250px;
		transition: all 0.3s;
	}
	.latest-article-card-image:hover {
		transform: scale(1.05);
		box-shadow: 0px 0px 15px gray;
		cursor: pointer;
		filter: brightness(70%);
	}
	.latest-article-card-title:hover {
		transition: all 0.3s;
		color: tomato;
		cursor: pointer;	
	}
	#nav {
		background-color: rgba(0,0,0,0.7);
		transition: all 0.3s;
	}
	#nav:hover {
		background-color: rgba(0,0,0,1);
	}
	.search-page {
		z-index: 200;transform: translateX(500px);
		right: 0;top: 0;
		transition: all 0.2s;
	}
	.psi-speech-bubble-comic-2:hover {
		cursor: pointer;
	}
	.search-full-page {
		transition: all 0.4s;
		width: 0px;
	}
	.paper-plane-icon:hover {
		cursor: pointer;
	}
	.comments-form {
		position: relative;
		z-index: 20;
		box-shadow: 0px 5px 10px gray;
		height: 0;
		opacity: 0;
		transition: all 1s;
	}
	.article-comments {
		transform: translateY(-120px);
	}
	.comment-dismiss:hover {
		cursor: pointer;
	}
</style>