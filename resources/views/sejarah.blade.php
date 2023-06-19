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
    
        <div class="p-5 mb-4 bg-light rounded-3 text-bg-dark" style="background-image: url(img/rmph.jpg)" >
            <div class="col-md-6 px-0 border" style="backdrop-filter: blur(5px); text-shadow: 2px 2px 5px black;">
                <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
              </div>
            </div>
          </main>
          <div class="section bg-light mb-5">
            <div class="container">
              
              <div class="row mb-4">
                <div class="col-sm-6 mt-3">
                  <h2 class="posts-entry-title">Travel</h2>
                </div>
              </div>
          
              <div class="row align-items-stretch retro-layout-alt">
          
                <div class="col-md-5 order-md-2">
                  <a href="single.html" class="hentry img-1 h-100 gradient">
                    <div class="featured-img" style="background-image: url('img/img_2_vertical.jpg');"></div>
                    <div class="text">
                      <span>February 12, 2019</span>
                      <h2>Meta unveils fees on metaverse sales</h2>
                    </div>
                  </a>
                </div>
          
                <div class="col-md-7">
          
                  <a href="single.html" class="hentry img-2 v-height mb30 gradient">
                    <div class="featured-img" style="background-image: url('img/img_2_horizontal.jpg');"></div>
                    <div class="text text-sm">
                      <span>February 12, 2019</span>
                      <h2>AI can now kill those annoying cookie pop-ups</h2>
                    </div>
                  </a>
          
                  <div class="two-col d-block d-md-flex justify-content-between">
                    <a href="single.html" class="hentry v-height img-2 gradient">
                      <div class="featured-img" style="background-image: url('img/img_2_sq.jpg');"></div>
                      <div class="text text-sm">
                        <span>February 12, 2019</span>
                        <h2>Don’t assume your user data in the cloud is safe</h2>
                      </div>
                    </a>
                    <a href="single.html" class="hentry v-height img-2 ms-auto float-end gradient">
                      <div class="featured-img" style="background-image: url('img/img_3_sq.jpg');"></div>
                      <div class="text text-sm">
                        <span>February 12, 2019</span>
                        <h2>Startup vs corporate: What job suits you best?</h2>
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
<img src="img/sipilwar2.jpg" alt="">        
                <div class="card-body">
                  <h5 class="card-title">Card title that wraps to a new line</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card p-3">
                <figure class="p-3 mb-0">
                  <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0 text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card">
                <img src="img/sipilwar1.jpg" alt="" srcset="">        
                <div class="card-body">
                  <h5 class="card-title">ini adalah</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card text-bg-primary text-center p-3">
                <figure class="mb-0">
                  <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0 text-white">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has a regular title and short paragraph of text below it.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card">
                <img src="img/kons1.jpg" alt="">        
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card p-3 text-end">
                <figure class="mb-0">
                  <blockquote class="blockquote">
                    <p>A well-known quote, contained in a hola element.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0 text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>


<script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

@endsection