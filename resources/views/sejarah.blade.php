@extends('layout.amerta')

@section('content')

<style>

.retro-layout-alt .img-1 {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat; }
  @media (max-width: 767.98px) {
    .retro-layout-alt .img-1 {
      height: 240px !important;
      position: relative;
      margin-bottom: 30px; } }

.retro-layout-alt .mb30 {
  margin-bottom: 30px; }

.retro-layout-alt .hentry {
  display: block;
  position: relative;
  overflow: hidden;
  border-radius: 10px; }
  .retro-layout-alt .hentry .featured-img {
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
  .retro-layout-alt .hentry:hover .featured-img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1); }

.retro-layout-alt .gradient {
  position: relative; }
  .retro-layout-alt .gradient:before {
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

.retro-layout-alt .post-category {
  margin-left: 20px;
  margin-top: 10px; }

.retro-layout-alt .v-height {
  height: 300px; }

.retro-layout-alt .text {
  position: absolute;
  bottom: 0;
  z-index: 10;
  padding: 20px;
  max-width: 350px; }
  .retro-layout-alt .text h2, .retro-layout-alt .text .h2 {
    color: #fff;
    font-size: 26px; }
  .retro-layout-alt .text span {
    color: rgba(255, 255, 255, 0.7); }
  .retro-layout-alt .text.text-sm h2, .retro-layout-alt .text.text-sm .h2 {
    font-size: 18px;
    line-height: 1.5; }

.retro-layout-alt .two-col > a {
  width: calc(50% - 15px);
  float: left; }
  @media (max-width: 575.98px) {
    .retro-layout-alt .two-col > a {
      width: 100% !important;
      float: none !important;
      margin-bottom: 30px; } }
</style>
<main class="container py-4">
    
        <div class="p-5 mb-4 bg-light rounded-3 text-bg-dark" style="background-image: url(img/{{$sejarah[9]->foto}})" >
            <div class="col-md-6 px-0 border" style="backdrop-filter: blur(5px); text-shadow: 2px 2px 5px black;">
                <h1 class="display-5 fw-bold">{{$sejarah[9]->judul}}.</h1>
                <p class="col-md-8 fs-4">{{$sejarah[9]->judul2}}.</p>
                <a href="/articlesejarah.duapuluhsatu" class="stretched-link"></a>
              </div>
            </div>
          </main>
          <div class="section  mb-5" style="color: white; background-color: #214252;">
            <div class="container py-5">
              <div class="row align-items-stretch retro-layout-alt">
                <div class="col-md-5 order-md-2">
                  <a href="/articlesejarah.tigaa" class="hentry img-1 h-100 gradient">
                    <div class="featured-img" style="background-image: url('img/{{$sejarah[1]->foto}}');"></div>
                    <div class="text">
                      <span>{{$sejarah[1]->judul}}sadasd</span>
                      <h2>{{$sejarah[1]->judul2}}</h2>
                    </div>
                  </a>
                </div>
          
                <div class="col-md-7">
          
                  <a href="/articlesejarah.empatbelas" class="hentry img-2 v-height mb30 gradient">
                    <div class="featured-img" style="background-image: url('img/{{$sejarah[2]->foto}}');"></div>
                    <div class="text text-sm">
                      <span>{{$sejarah[2]->judul}}</span>
                      <h2>{{$sejarah[2]->judul2}}</h2>
                    </div>
                  </a>
          
                  <div class="two-col d-block d-md-flex justify-content-between">
                    <a href="/articlesejarah.duapuluhdua" class="hentry v-height img-2 gradient">
                      <div class="featured-img" style="background-image: url('img/{{$sejarah[10]->foto}}');"></div>
                      <div class="text text-sm">
                        <span>{{$sejarah[10]->judul}}</span>
                        <h2>{{$sejarah[10]->judul2}}</h2>
                      </div>
                    </a>
                    <a href="articlesejarah.enambelas" class="hentry v-height img-2 ms-auto float-end gradient">
                      <div class="featured-img" style="background-image: url('img/{{$sejarah[4]->foto}}');"></div>
                      <div class="text text-sm">
                        <span>{{$sejarah[4]->judul}}</span>
                        <h2>{{$sejarah[4]->judul}}</h2>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="container py-4">
            <div class="row" data-masonry='{"percentPosition": true }'>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                  <img src="img/{{ $sejarah[0]->foto }}" alt="">        
                  <div class="card-body">
                    <h5 class="card-title">{{$sejarah[0]->judul}}</h5>
                    <p class="card-text">{{$sejarah[0]->judul2}}.</p>
                    <a href="/articlesejarah.satu" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card p-3">
                  <figure class="p-3 mb-0">
                    <blockquote class="blockquote">
                      <p>{{$sejarah[5]->judul}}</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 text-muted">
                      {{$sejarah[5]->judul2}}
                    </figcaption>
                    <a href="articlesejarah.tujuhbelas" class="stretched-link"></a>
                  </figure>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                  <img src="img/{{ $sejarah[6]->foto }}" alt="" srcset="">        
                  <div class="card-body">
                    <h5 class="card-title">{{$sejarah[6]->judul}}</h5>
                    <p class="card-text">{{$sejarah[6]->judul2}}.</p>
                    <a href="articlesejarah.delapanbelas" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card text-center p-3" style="background-color: #214252;">
                  <figure class="mb-0">
                    <blockquote class="blockquote text-white">
                      <p>{{$sejarah[7]->judul}}.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 text-white">
                      {{$sejarah[7]->judul2}}
                    </figcaption>
                    <a href="/articlesejarah.sembilanbelas" class="stretched-link"></a>
                  </figure>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card text-center">
                  <div class="card-body">
                    <h5 class="card-title">{{$sejarah[8]->judul}}</h5>
                    <p class="card-text">{{$sejarah[8]->judul2}}.</p>
                    <a href="articlesejarah.duapuluh" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                  <img src="img/{{ $sejarah[2]->foto }}" alt="">
                  <a href="/articlesejarah.empatbelas" class="stretched-link"></a>        
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card p-3 text-center">
                  <figure class="mb-0">
                    <h5 class="card-title">{{$sejarah[2]->judul}}</h5>
                    <p class="card-text">{{$sejarah[2]->judul2}}.</p>
                    <a href="/articlesejarah.empatbelas" class="stretched-link"></a>
                  </figure>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{$sejarah[3]->judul}}</h5>
                    <p class="card-text">{{$sejarah[3]->judul2}}.</p>
                    <a href="/articlesejarah.limabelas" class="stretched-link"></a>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#214252" fill-opacity="1" d="M0,256L60,266.7C120,277,240,299,360,261.3C480,224,600,128,720,122.7C840,117,960,203,1080,218.7C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg><footer class="site-footer">

<script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

@endsection