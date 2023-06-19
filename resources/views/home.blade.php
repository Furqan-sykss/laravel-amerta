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
    transform: scale(1); }
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
<section class="section bg-light">
  <div class="container">
    <div class="row align-items-stretch retro-layout">
      <div class="col-md-4">
        <a href="single.html" class="h-entry mb-30 v-height gradient">

          <div class="featured-img" style="background-image: url('img/marcus2.png');"></div>

          <div class="text">
            <span class="date">Apr. 14th, 2022</span>
            <h2>AI can now kill those annoying cookie pop-ups</h2>
          </div>
        </a>
        <a href="single.html" class="h-entry v-height gradient">

          <div class="featured-img" style="background-image: url('img/albertcamus.jpg');"></div>

          <div class="text">
            <span class="date">Apr. 14th, 2022</span>
            <h2>Don’t assume your user data in the cloud is safe</h2>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="single.html" class="h-entry img-5 h-100 gradient">

          <div class="featured-img" style="background-image: url('img/article4.png');"></div>

          <div class="text">
            <span class="date">Apr. 14th, 2022</span>
            <h2>Why is my internet so slow?</h2>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="single.html" class="h-entry mb-30 v-height gradient">

          <div class="featured-img" style="background-image: url('img/seneca.jpg');"></div>

          <div class="text">
            <span class="date">Apr. 14th, 2022</span>
            <h2>Startup vs corporate: What job suits you best?</h2>
          </div>
        </a>
        <a href="single.html" class="h-entry v-height gradient">

          <div class="featured-img" style="background-image: url('img/teukudaud.jpg');"></div>

          <div class="text">
            <span class="date">Apr. 23th, 2022</span>
            <h2>Thought you loved Python? Wait until you meet Rust</h2>
          </div>
        </a>
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
                <img src="img/albert.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/acehditii.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/art11.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p>Some representative placeholder content for the third slide.</p>
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

    <div class="mt-5 p-5 mb-4 bg-light rounded-3 text-bg-dark" style="background-image: url(img/rmph.jpg)" >
      <div class="col-md-6 px-0 border" style="backdrop-filter: blur(5px); text-shadow: 2px 2px 5px black;">
          <h1 class="display-5 fw-bold">Custom jumbotron</h1>
          <p class="col-md-8 fs-4 ">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
      </div>
  </div>

    <div class="col">
        
            <div class="row featurette mt-5 mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                <div class="col-md-7 mt-2">
                    <h2 class="featurette-heading fw-normal lh-1">jadikans asdasd</h2>
                    <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">asasfaskfasf asf.</p>
                    <a href="art1.php" class="stretched-link"></a>
                </div>
                <div class="col-md-5 mt-2 mb-3">
                    <img src="img/sipilwar1.jpg" width="500" height="500" class="img-thumbnail" alt="...">
                </div>
            </div>
        
    </div>

</div>
<div class="container mt-5">
    <div class="col">
        <div class="row">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h4 class="mb-auto">asasfasfasf</h4>
                        <h6 class="mb-auto text-secondary">asasdasdasd</h6>
                        <a href="art2.php" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/sipilwar2.jpg" width="230" height="250" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h4 class="mb-auto">asasfasfasf</h4>
                        <h6 class="mb-auto text-secondary">asasdasdasd</h6>
                        <a href="art2.php" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/sipilwar2.jpg" width="230" height="250" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<div class="container mt-5">
  <div class="row text-center mb-3">
    <div class="col">
        <h1>Baca lagi</h1>
        <h2>Berikut rekomendasi artikel</h2>
    </div>
</div>
<!-- START THE FEATURETTES -->

<div class="container-lg">
        <hr class="featurette-divider mb-3 ">
        <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
            <div class="col-md-7 mt-2">
                <h2 class="featurette-heading fw-normal lh-1"> Lorem, ipsum dolor.</h2>
                <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium voluptates ea harum architecto saepe repudiandae.</p>
                <a href="belajar.php" class="stretched-link">Lorem ipsum dolor sit amet.</a>
            </div>
            <div class="col-md-5 mt-2 mb-3">
                <img src="img/art11.jpg " width="500" height="500" class="img-thumbnail" alt="...">
                </svg>
            </div>
        </div>
        <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
          <div class="col-md-5 mt-2 mb-3">
              <img src="img/art11.jpg " width="500" height="500" class="img-thumbnail" alt="...">
              </svg>
          </div>
            <div class="col-md-7 mt-2">
                <h2 class="featurette-heading fw-normal lh-1"> Lorem, ipsum dolor.</h2>
                <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium voluptates ea harum architecto saepe repudiandae.</p>
                <a href="belajar.php" class="stretched-link">Lorem ipsum dolor sit amet.</a>
            </div>
        </div>
</div>
</div>
<!-- END THE FEATURETTES -->

<script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>
@endsection