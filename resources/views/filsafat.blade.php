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

<div class="section" style="color: white; background-color: #214252;">
  <div class="container py-5 pb-3">
    <div class="p-4 p-md-5 mb-4 rounded  border text-bg-light" style="background-image:url('img/{{ $filsafat[1]->foto }}')">
      <div class="col-md-6 px-0 border" style="backdrop-filter: blur(5px); text-shadow: 2px 2px 5px black;" >
        <h1 class="display-4 fst-italic">{{$filsafat[1]->judul}}</h1>
        <p class="lead my-3">{{$filsafat[1]->judul2}}.</p>
        <a href="/articlefilsafat.empat" class="stretched-link">Continue reading</a>
      </div>
    </div>
  </div>
</div>

<div class="section mt-5">
  <div class="container">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Philosophy</strong>
            <h3 class="mb-0">{{$filsafat[0]->judul}}</h3>
            <div class="mb-1 text-muted"><b>July 07</b></div>
            <p class="card-text mb-auto">{{$filsafat[0]->judul2}}.</p>
            <a href="articlefilsafat.dua" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="img/{{ $filsafat[0]->foto }}" alt="" srcset="">  
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Philosophy</strong>
            <h3 class="mb-0">{{$filsafat[2]->judul}}</h3>
            <div class="mb-1 text-muted"><b>July 08</b></div>
            <p class="card-text mb-auto">{{$filsafat[2]->judul2}}.</p>
            <a href="articlefilsafat.lima" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="img/{{ $filsafat[2]->foto }}" alt="" srcset="">  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<main class="container py-4">
    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          it's time to broaden your mindset
        </h3>
  
        <article class="blog-post">
          <div class=" mt-5 row featurette border rounded overflow-hidden shadow-sm h-md-250 position-relative">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">{{$filsafat[3]->judul}}.</h2>
                <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{$filsafat[3]->judul2}}</p>
                <a href="/articlefilsafat.enam" class="stretched-link"></a>
            </div>
            <div class="col-md-5 mt-2 mb-3">
                <img src="img/{{ $filsafat[3]->foto }}" width="500" height="500" class="img-thumbnail" alt="...">
                </svg>

            </div>
        </div>
        </article>
  
        <article class="blog-post" >
          <h2 class="blog-post-title mb-1">{{$filsafat[3]->judul2}}</h2>
          <p class="blog-post-meta">July 08, 2023 by <a href="#">Furqan</a></p>
  
          <p>{{$filsafat[3]->keterangan}}.</p>
          <blockquote>
            <p>Nah, Alain de Botton berhasil menemukan solusi atas keresahan yang kita semua rasakan. Ia memberikan suatu pandangan baru mengenai makna hidup yang lebih bahagia untuk dijalani. Alain menawarkan metode hidup biasa aja yang bisa diterapkan oleh semua orang .</p>
          </blockquote>
          <div class="row">  
          <div class="col-md-7 col-lg-12">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">{{$filsafat[4]->judul}}</strong>
                  <p class="card-text mb-auto">{{$filsafat[4]->keterangan}}.</p>
                  <a href="/articlefilsafat.tujuh" class="stretched-link">Lanjut Membaca</a>
                </div>
                
              </div>
            </div>
          </div>
        </article>
        <article class="blog-post">
          <h2 class="blog-post-title mb-1">New feature</h2>
        <div class=" col-md-7 col-lg-8 mb-5">
            <div class="card">
                <img src="img/{{$filsafat[5]->foto}}" alt="">
                <div class="card-body">
                    <a href="/articlefilsafat.delapan" class="stretched-link"></a>
                    <h5 class="card-title">{{$filsafat[5]->judul}}</h5>
                    <p class="card-text">{{$filsafat[5]->judul2}}.</p>
                </div>
            </div>
        </div>
        </article>
      </div>
  


      @include('layout/sideinformation')
    </div>
  
  </main>

  <!-- Start posts-entry -->
	<section class="section posts-entry posts-entry-sm " style="color: white; background-color: #214252;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6 py-3">
					<div class="blog-entry card  rounded" style="color: white; background-color: #214252;">
							<img src="img/{{$filsafat[6]->foto}}" alt="Image" class="img-fluid">
						</a>
						<span class="date">July 08, 2023</span>
						<h1 class="">{{$filsafat[6]->judul}}</h1>
						<p>{{$filsafat[6]->judul2}}.</p>
						<p><a href="/articlefilsafat.sembilan" class="stretched-link"></a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 py-3">
					<div class="blog-entry card  rounded" style="color: white; background-color: #214252;">
							<img src="img/{{$filsafat[7]->foto}}" width="100%;" alt="Image" class="img-fluid">
						</a>
						<span class="date">July 08, 2023</span>
						<h1>{{$filsafat[7]->judul}}</h1>
						<p>{{$filsafat[7]->judul2}}.</p>
						<p><a href="/articlefilsafat.sepuluh" class="stretched-link"></a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

  <section class="section mt-5">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Philosophy</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt card">
						<img width="100%;" src="img/{{$filsafat[8]->foto}}" alt="Image" class="img-fluid">
						<div class="excerpt mt-3">
							<h2>{{$filsafat[8]->judul}}</h2>
							<p>{{$filsafat[8]->judul2}}.</p>
							<p><a href="/articlefilsafat.sebelas" class="stretched-link"></a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt card">
						<img src="img/{{$filsafat[9]->foto}}" alt="Image" class="img-fluid">
						<div class="excerpt mt-3">
							<h2>{{$filsafat[9]->judul}}</h2>
							<p>{{$filsafat[9]->judul2}}.</p>
              <p><a href="/articlefilsafat.duabelas" class="stretched-link"></a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt card">
						<img src="img/{{$filsafat[10]->foto}}" alt="Image" class="img-fluid">
						<div class="excerpt mt-3">
							<h2>{{$filsafat[10]->judul}}</h2>
							<p>{{$filsafat[10]->judul2}}.</p>
              <p><a href="/articlefilsafat.tigabelas" class="stretched-link"></a></p>
						</div>
					</div>
				</div>
      </div>
      </div>
	</section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#214252" fill-opacity="1" d="M0,256L60,266.7C120,277,240,299,360,261.3C480,224,600,128,720,122.7C840,117,960,203,1080,218.7C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg><footer class="site-footer">




	<!-- End posts-entry -->
@endsection