@extends('layout.amerta')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    .carousel-indicators button {
    height: 10px !important;
    width: 10px !important;
    margin: 0 10px !important;
    border-radius: 100%;
    background-color: #f7f7f7 !important;
}
.retro-layout .v-height {
  height: 240px; }

@media (max-width: 767.98px) {
  .retro-layout .img {
    height: 240px; } }

.retro-layout .h-entry {
  display: block;
  position: relative;
  border-radius: 10px;
  overflow: hidden; }
  .retro-layout .h-entry .post-category {
    color: #fff; }
  .retro-layout .h-entry .featured-img {
    position: absolute;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  .retro-layout .h-entry:hover .featured-img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  opacity:.8; }
  .retro-layout .h-entry.mb-30 {
    margin-bottom: 30px; }
  .retro-layout .h-entry .date {
    font-size: 15px; }
  .retro-layout .h-entry.gradient {
    position: relative; }
    .retro-layout .h-entry.gradient:before {
      z-index: 1;
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: -moz-linear-gradient(top, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
      background: -webkit-linear-gradient(top, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
      background: -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(18%, transparent), color-stop(99%, rgba(0, 0, 0, 0.8)), to(rgba(0, 0, 0, 0.8)));
      background: -o-linear-gradient(top, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
      background: linear-gradient(to bottom, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#cc000000',GradientType=0 ); }

.retro-layout .text {
  position: absolute;
  bottom: 0;
  z-index: 10;
  padding: 20px;
  max-width: 350px; }
  .retro-layout .text h2, .retro-layout .text .h2 {
    color: #fff;
    font-size: 18px;
    line-height: 1.2;
    margin-bottom: 0; }
  .retro-layout .text span {
    color: rgba(255, 255, 255, 0.7);
    font-size: 12px;
    display: block;
    margin-bottom: 5px; }
  .retro-layout .text.text-sm h2, .retro-layout .text.text-sm .h2 {
    font-size: 18px;
    line-height: 1.5; }


@media (max-width: 767.98px) {
  .retro-layout .img-5 {
    height: 240px !important;
    margin-bottom: 30px;
    margin-top: 30px; } }


</style>
<!-- Start retroy layout blog posts -->
<section class="section " style="background-color: #214252;">
  <div class="container">
    <div class="row align-items-stretch retro-layout mt-3">
      <div class="col-md-4 py-4">
        <a href="/articlesejarah.satu" class="h-entry mb-30 v-height gradient">
          <div class="featured-img" style="background-image: url('img/{{ $daftar_article[0]->foto }}');"></div>
          <div class="text">
            <span class="date">July 08, 2023</span>
            <h2>{{$daftar_article[0]->judul}}</h2>
          </div>
        </a>
        <a href="/articlesejarah.tigaa" class="h-entry v-height gradient">
          <div class="featured-img" style="background-image: url('img/{{ $daftar_article[2]->foto }}');"></div>
          <div class="text">
            <span class="date">July 08, 2023</span>
            <h2>{{$daftar_article[2]->judul}}</h2>
          </div>
        </a>
      </div>
      <div class="col-md-4 py-4">
        <a href="/articlefilsafat.dua" class="h-entry img-5 h-100 gradient">

          <div class="featured-img" style="background-image: url('img/{{ $daftar_article[1]->foto }}');"></div>

          <div class="text">
            <span class="date">July 08, 2023</span>
            <h2>{{$daftar_article[1]->judul}}</h2>
          </div>
        </a>
      </div>
      <div class="col-md-4 py-4">
        <a href="/articlefilsafat.empat" class="h-entry mb-30 v-height gradient">

          <div class="featured-img" style="background-image: url('img/{{ $daftar_article[3]->foto }}');"></div>

          <div class="text">
            <span class="date">July 08, 2023</span>
            <h2>{{$daftar_article[3]->judul}}</h2>
          </div>
        </a>
        <a href="/articlefilsafat.lima" class="h-entry v-height gradient">

          <div class="featured-img" style="background-image: url('img/{{ $daftar_article[4]->foto }}');"></div>

          <div class="text">
            <span class="date">July 08, 2022</span>
            <h2>{{$daftar_article[4]->judul}}</h2>
          </div>
        </a>
      </div>
    </div>
    <div class="row text-center mb-3 mt-4">
      <div class="col mb-4" style="color: white;">
          <h1><b>"To live is To Suffer , To Survive is to Find
            Some Meaning in The Suffering."</b></h1>
          <h2>Friedrich Nietzsche</h2>
      </div>
  </div>
  </div>
</section>

<div class="container mt-5 ">
        <div id="carouselExampleDark" class="carousel carousel-light w-100 slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner  border rounded shadow-sm h-md-250">
            <div class="carousel-item active" data-bs-interval="10000">
              <a href="/articlefilsafat.enam" class="stretched-link"></a>
                <img src="img/{{ $daftar_article[5]->foto }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p>{{$daftar_article[5]->judul}}.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <a href="/articlefilsafat.tujuh" class="stretched-link"></a>
                <img src="img/{{ $daftar_article[6]->foto }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p>{{$daftar_article[6]->judul}}.</p>
                </div>
            </div>
            <div class="carousel-item">
              <a href="/articlefilsafat.delapan" class="stretched-link"></a>
                <img src="img/{{ $daftar_article[7]->foto }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p>{{$daftar_article[7]->judul}}.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!--start JUMBOTRON-->
    <section class="section mt-5" style="background-color: #214252;">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="mt-5 p-5 mb-4 bg-light rounded-3 text-bg-dark" style="background-image: url('img/{{ $daftar_article[8]->foto }}')" >
            <div class="mt-3 col-md-6 px-0 border" style="backdrop-filter: blur(5px); text-shadow: 2px 2px 5px black;">
              <h1 class="display-5 fw-bold">{{$daftar_article[8]->judul}}</h1>
              <p class="col-md-8 fs-4 ">{{$daftar_article[8]->judul2}}.</p>
              <a href="/articlefilsafat.sembilan" class="stretched-link"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End JUMBOTRON-->


    <div class="container mt-5">
      <div class="col">
        <div class="row featurette mt-5 mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
          <div class="col-md-7 mt-2">
            <h2 class="featurette-heading fw-normal lh-1">{{$daftar_article[9]->judul}}</h2>
            <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{$daftar_article[9]->judul2}}.</p>
            <a href="/articlefilsafat.sepuluh" class="stretched-link"></a>
          </div>
          <div class="col-md-5 mt-2 mb-3">
            <img src="img/{{ $daftar_article[9]->foto }}" width="500" height="500" class="img-thumbnail" alt="...">
          </div>
        </div>
        
      </div>
    </div>



<div class="container mt-5">
  <div class="row text-center mb-3">
    <div class="col" style="color: #214252;">
        <h1><b>Baca Lagi</b></h1>
        <h2>Berikut rekomendasi artikel</h2>
    </div>
</div>
</div>
<div class="container mt-5">
    <div class="col">
        <div class="row">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h4 class="mb-auto">{{$daftar_article[10]->judul}}</h4>
                        <h6 class="mb-auto text-secondary">{{$daftar_article[10]->judul2}}</h6>
                        <a href="/articlefilsafat.sebelas" class="stretched-link">Lanjut Membca</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/{{ $daftar_article[10]->foto }}" width="230" height="250" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h4 class="mb-auto">{{$daftar_article[11]->judul}}</h4>
                        <h6 class="mb-auto text-secondary">{{$daftar_article[11]->judul2}}</h6>
                        <a href="/articlefilsafat.duabelas" class="stretched-link">Lanjut Membaca</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/{{ $daftar_article[11]->foto }}" width="230" height="250" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" data-masonry='{"percentPosition": true }'>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card">
            <img src="img/{{ $daftar_article[12]->foto }}" alt="">        
            <div class="card-body">
              <h5 class="card-title">{{$daftar_article[12]->judul}}</h5>
              <p class="card-text">{{$daftar_article[12]->judul2}}.</p>
              <a href="/articlefilsafat.tigabelas" class="stretched-link"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card p-3">
            <figure class="p-3 mb-0">
              <blockquote class="blockquote">
                <p>{{$daftar_article[13]->judul}}</p>
              </blockquote>
              <figcaption class="blockquote-footer mb-0 text-muted">
                {{$daftar_article[13]->judul2}}
              </figcaption>
              <a href="/articlesejarah.empatbelas" class="stretched-link"></a>
            </figure>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card">
            <img src="img/{{ $daftar_article[14]->foto }}" alt="" srcset="">        
            <div class="card-body">
              <h5 class="card-title">{{$daftar_article[14]->judul}}</h5>
              <p class="card-text">{{$daftar_article[14]->judul2}}.</p>
              <a href="/articlesejarah.limabelas" class="stretched-link"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card text-center p-3" style="background-color: #214252;">
            <figure class="mb-0">
              <blockquote class="blockquote text-white">
                <p>{{$daftar_article[15]->judul}}.</p>
              </blockquote>
              <figcaption class="blockquote-footer mb-0 text-white">
                {{$daftar_article[15]->judul2}}
              </figcaption>
              <a href="/articlesejarah.enambelas" class="stretched-link"></a>
            </figure>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">{{$daftar_article[16]->judul}}</h5>
              <p class="card-text">{{$daftar_article[16]->judul2}}.</p>
              <a href="/articlesejarah.tujuhbelas" class="stretched-link"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card">
            <img src="img/{{ $daftar_article[17]->foto }}" alt="">
            <a href="/articlesejarah.delapanbelas" class="stretched-link"></a>        
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card p-3 text-center">
            <figure class="mb-0">
              <h5 class="card-title">{{$daftar_article[17]->judul}}as</h5>
              <p class="card-text">{{$daftar_article[17]->judul2}}.</p>
              <a href="/articlesejarah.delapanbelas" class="stretched-link"></a>
            </figure>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$daftar_article[18]->judul}}sss</h5>
              <p class="card-text">{{$daftar_article[18]->judul2}}.</p>
              <a href="/articlesejarah.sembilanbelas" class="stretched-link"></a>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="container mt-5">
  <div class="row text-center mb-3">
    <div class="col" style="color: #214252;">
        <h1><b>"To live is To Suffer , To Survive is to Find
          Some Meaning in The Suffering."</b></h1>
        <h2>Friedrich Nietzsche</h2>
    </div>
</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#214252" fill-opacity="1" d="M0,256L60,266.7C120,277,240,299,360,261.3C480,224,600,128,720,122.7C840,117,960,203,1080,218.7C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg><footer class="site-footer">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>
@endsection