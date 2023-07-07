@extends('layout.amerta')

@section('content')

<style>
  .posts-entry-title {
  text-transform: uppercase;
  font-size: 20px;
  color: #000;
  letter-spacing: .05rem; }

.posts-entry .blog-entry .img-link {
  position: relative;
  overflow: hidden;
  display: inline-block;
  border-radius: 10px;
  margin-bottom: 10px; }

.posts-entry .blog-entry h2, .posts-entry .blog-entry .h2 {
  line-height: 1.3;
  font-size: 26px; }
  .posts-entry .blog-entry h2 a, .posts-entry .blog-entry .h2 a {
    color: #4D4C7D; }

.posts-entry .btn-sm, .posts-entry .btn-group-sm > .btn {
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 15px;
  padding-right: 15px; }

.posts-entry .blog-entry-sm li {
  margin-bottom: 20px; }

.posts-entry .blog-entry-sm h3, .posts-entry .blog-entry-sm .h3 {
  font-size: 20px; }
  .posts-entry .blog-entry-sm h3 a, .posts-entry .blog-entry-sm .h3 a {
    color: #4D4C7D; }

.posts-entry.posts-entry-sm .blog-entry h2, .posts-entry.posts-entry-sm .blog-entry .h2 {
  font-size: 18px; }

.posts-entry .blog-entry-search-item {
  margin-bottom: 30px; }
  .posts-entry .blog-entry-search-item .img-link {
    width: 280px;
    border-radius: 0; }
    .posts-entry .blog-entry-search-item .img-link img {
      margin-bottom: 0;
      border-radius: 10px; }

.read-more {
  border-bottom: 2px solid #214252; }

.post-entry-alt h2, .post-entry-alt .h2 {
  font-size: 18px;
  margin-bottom: 20px; }
  .post-entry-alt h2 a, .post-entry-alt .h2 a {
    color: #4D4C7D; }

.post-entry-alt .excerpt {
  padding-left: 20px;
  padding-right: 20px; }

.post-entry-alt .img-link {
  position: relative;
  display: inline-block;
  overflow: hidden;
  border-radius: 10px;
  margin-bottom: 10px; }
  .post-entry-alt .img-link img {
    margin-bottom: 0; }

.post-meta {
  color: gray;
  font-size: 13px;
  width: 100%;
  display: block;
  margin-bottom: 20px; }
  .post-meta a {
    color: #000; }
  .post-meta .author-figure img {
    width: 30px;
    border-radius: 50%; }

.blog-entries .blog-entry {
  display: block;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  margin-bottom: 30px;
  position: relative; }
  .blog-entries .blog-entry:hover, .blog-entries .blog-entry:focus {
    opacity: .7;
    top: -1px;
    -webkit-box-shadow: 0 3px 50px -2px rgba(0, 0, 0, 0.2) !important;
    box-shadow: 0 3px 50px -2px rgba(0, 0, 0, 0.2) !important; }
  .blog-entries .blog-entry .blog-content-body {
    padding: 20px;
    border: 1px solid #efefef;
    border-top: none; }
  .blog-entries .blog-entry img {
    max-width: 100%; }
  .blog-entries .blog-entry h2, .blog-entries .blog-entry .h2 {
    font-size: 18px;
    line-height: 1.5; }
  .blog-entries .blog-entry p {
    font-size: 13px;
    color: gray; }

.blog-entries .post-meta {
  font-size: 14px;
  color: #b3b3b3; }
  .blog-entries .post-meta .author img {
    width: 30px;
    border-radius: 50%;
    display: inline-block; }
</style>


<main class="container py-4">
    <div class="p-4 p-md-5 mb-4 rounded  border text-bg-light" style="background-image:url('img/{{ $filsafat[1]->foto }}')">
        <div class="col-md-6 px-0 border" style="backdrop-filter: blur(5px); text-shadow: 2px 2px 5px black;" >
            <h1 class="display-4 fst-italic">{{$filsafat[1]->judul}}</h1>
            <p class="lead my-3">{{$filsafat[1]->judul2}}.</p>
            <p class="lead mb-0"><a href="#" class=" fw-bold">Lanjut Membaca...</a></p>
      </div>
    </div>
  
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Philosophy</strong>
            <h3 class="mb-0">{{$filsafat[0]->judul}}</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">{{$filsafat[0]->judul2}}.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="img/{{ $filsafat[0]->foto }}" alt="" srcset="">  
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">{{$filsafat[2]->judul}}</h3>
            <p class="mb-auto">{{$filsafat[2]->judul2}}.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="img/{{ $filsafat[2]->foto }}" width="200" height="300" aria-label="Placeholder: Thumbnail" alt="" srcset="">  
            {{-- <svg class="bd-placeholder-img" style="" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
          </div>
        </div>
      </div>
    </div>
  
    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          it's time to broaden your mindset
        </h3>
  
        <article class="blog-post">
          <div class=" mt-5 row featurette border rounded overflow-hidden shadow-sm h-md-250 position-relative">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">xixixi </h2>
                <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">cicicic</p>
                <a href="bendera.php" class="stretched-link"></a>
            </div>
            <div class="col-md-5 mt-2 mb-3">
                <img src="img/sukarno3.jpg" width="500" height="500" class="img-thumbnail" alt="...">
                </svg>

            </div>
        </div>
        </article>
  
        <article class="blog-post">
          <h2 class="blog-post-title mb-1">Another blog post</h2>
          <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>
  
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <blockquote>
            <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
          </blockquote>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <div class="row">  
          <div class="col-md-7 col-lg-12">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">World</strong>
                  <h3 class="mb-0">Featured post</h3>
                  <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="blog-post">
          <h2 class="blog-post-title mb-1">New feature</h2>
        <div class=" col-md-7 col-lg-8 mb-5">
            <div class="card">
                <img src="img/teukudaud.jpg" alt="">
                <div class="card-body">
                    <a href="art9.php" class="stretched-link"></a>
                    <h5 class="card-title">teuku daud</h5>
                    <p class="card-text">Lorem ipsum dolor sit.</p>
                </div>
            </div>
        </div>
        </article>
        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
          <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
        </nav>
      </div>
  


      @include('layout/sideinformation')
    </div>
  
  </main>

  <!-- Start posts-entry -->
	<section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="img/img_2_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="img/img_2_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="img/img_3_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="img/img_4_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

  <section class="section mt-5">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Politics</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="img/img_7_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="img/img_6_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				
	</section>



	<!-- End posts-entry -->
@endsection