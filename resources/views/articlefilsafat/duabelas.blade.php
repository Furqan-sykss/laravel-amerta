@extends('layout.amerta')

@section('content')

<style>

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
   
    </style>
<div class="container-lg">
    <div class="row">
            <div class="col-lg-12 mt-2 text-center">
                <h1>Aristoteles dan Pemikiran-Pemikirannya Kepada Semesta
                </h1>
                            <br>
                            <h4 class="text-secondary">Sudah 25 abad lamanya ia meninggal dunia. Tapi, dunia masih mengenal nama dan pemikirannya. Ialah Aristoteles, sang filsuf Yunani.
                            </h4>
                            <br>
                            <div class="">
                                <img class="" src="img/58994-Aristoteles.jpg" alt="" width="80%;">
                            </div>
            </div>
</div>
<div class="container-lg mt-5">
    <div class="row">
        <div class="col-lg-10">
            <h3>Aristoteles adalah murid dari Plato sekaligus guru dari Alexander Agung</h3>
                <p>
                    Ia banyak menulis berbagai macam disiplin ilmu, termasuk fisika, metafisika, puisi, logika, retorika, politik, pemerintahan, etnis, biologi dan zoologi. Bersama dengan Socrates dan Plato, ia dianggap menjadi seorang di antara tiga orang filsuf yang paling berpengaruh di pemikiran Barat.
                </p>
                <p>
                    Aristoteles tertarik kepada ilmu pengetahuan. Dia ingin menggunakan metode logika Plato untuk mengetahui bagaimana dunia berjalan. Oleh karena itu, Aristoteles dianggap sebagai bapak metode ilmiah. Aristoteles secara khusus tertarik pada ilmu pengetahuan biologi, khususnya klasifikasi tumbuhan dan hewan.
                </p>
                <p>
                    Aristoteles lahir di Stagira, kota di wilayah Chalcidice, Yunani (dahulunya termasuk wilayah Makedonia tengah) tahun 384 SM. Ia bukan berasal dari keluarga yang kaya, ayahnya hanyalah seorang tabib pribadi Raja Amyntas dari Makedonia.
                </p>
                <p>
                    Pada usia 17 tahun, Aristoteles menjadi murid Plato. Aristoteles belajar di Akademi Plato, akademi yang didirikan oleh Plato pada tahun 387 SM di Athena. Plato sendiri saat itu sudah sangat tua. ketika Plato meninggal, Aristoteles meninggalkan akademi tersebut. Ia merasa kesal akibat tak terpilih menjadi salah satu pemimpin di akademi. Padahal, ia telah mengabdi selama 20 tahun menjadi guru di sana.
                </p>
                <p>
                    Beberapa waktu setelahnya, Aristoteles meninggalkan Athena dan pergi ke Makedonia dan menjadi guru bagi pangeran muda Alexander, yang kelak akan menjadi Raja Alexander Agung. Alexander tidak terlalu tertarik pada pembelajaran Aristoteles. Namun, mereka berhubungan baik. Ketika Aleksander menjelajahi Asia Barat, dia dan para armadanya mengambil tumbuh-tumbuhan eksotis untuk dipelajari oleh Aristoteles.
                </p>
                <p>
                    Setelah Alexander tumbuh dewasa dan menjadi raja, Aristoteles kembali ke Athena dan membuka akademinya sendiri di sana, yang disebut Lyceum, yang menjadi saingan Akademi Plato. Ketika Alexander meninggal pada tahun 323 SM, terjadi pemberontakan terhadap Kekaisaran Makedonia di Athena. Orang Athena menuduh Aristoteles memihak Makedonia, karena ia adalah sahabat Alexander dan seperti halnya Plato, ia bukan seorang demokrat. Dia dengan cepat meninggalkan Athena dan menghabiskan sisa hidupnya di Chalcidice, dan meninggal pada 322 SM.
                </p>
                <br>
                <h3>Pemikiran Dan Pandangan</h3>
                <p>
                    Pemikiran Aristoteles berkembang dalam tiga tahapan, pertama ketika ia masih belajar di Akademi Plato ketika gagasannya masih dekat dengan gurunya tersebut, kemudian ketika ia memimpin akademi Lyceum, dan yang terakhir pada waktu ia mengungsi ke daerah Yunani utara, di tempat kelahirannya.
                </p>
                <p>
                    Selama memimpin Lyceum, ia menerbitkan enam karya tulis yang membahas masalah logika, yang dianggap sebagai karya-karyanya yang paling penting, selain kontribusinya di bidang metafisika, fisika, etika, politik, ilmu kedokteran, ilmu alam dan karya seni.
                </p>
                <p>
                    Memang ciri khas kebudayaan Yunani, yang selalu ingin mengubah ketidakteraturan menjadi keberaturan, menerapkan keberaturan buatan manusia ke dalam dunia alami yang kacau. Aristoteles juga berusaha membuat keberaturan dalam sistem pemerintahan. Ia menciptakan sistem klasifikasi monarki, oligarki, tirani, demokrasi dan republik, yang masih dipakai hingga sekarang.
                </p>
                <p>
                    Di bidang ilmu pengetahuan alam, ia merupakan orang pertama yang mengelompokkan dan mengklasifikasikan spesies-spesies biologi secara sistematis. Observasinya ini termasuk suatu bentuk dari keberaturan yang ia ciptakan untuk menggambarkan hukum alam dan keseimbangan pada alam, yaitu metabolisme, perubahan suhu, pemrosesan informasi, embriogenesis, dan pewarisan sifat.
                </p>
                <p>
                    Hingga kini, Metode Aristoteles digunakan oleh ahli biologi moderen ketika menjelajahi wilayah baru, yaitu dengan mengumpulkan data secara sistematis, menemukan pola, dan membuat kesimpulan dari penjelasan kausal yang mungkin saja terjadi. Berlawanan dengan Plato, yang menyatakan teori tentang bentuk-bentuk ideal benda, Aristoteles menjelaskan bahwa materi tidak mungkin tanpa bentuk karena ia ada (eksis).
                </p>
                <p>
                    Pemikiran lainnya adalah tentang gerak, ia selalu mengatakan bahwa semua benda bergerak menuju satu tujuan. Karena benda tidak dapat bergerak dengan sendirinya, maka harus ada penggerak. Penggerak itu harus mempunyai penggerak lainnya, hingga tiba pada penggerak pertama yang tak bergerak, yang kemudian disebut dengan theos, yaitu Tuhan dalam pengertian Bahasa Yunani.
                </p>


        </div>
    </div>
</div>

</div>

<div class="container-lg mt-5">

    <div class="row text-start mb-3">
        <h3>Baca Juga</h3>
    </div>
        <div class="col-11 col-lg-12">
            <div class="row featurette mb-3 border rounded overflow-hidden shadow-sm h-md-250 position-relative">
                <div class="col-md-7 mt-2">
                    <h2 class="featurette-heading fw-normal lh-1">Pandangan dan Tujuan Hidup dari Filosofi Nihilism </h2>
                    <p class="lead" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Apa Arti Dari Hidup Ini</p>
                    <a href="/articlefilsafat.dua" class="stretched-link"></a>
                </div>
                <div class="col-md-5 mt-2 mb-3">
                    <img src="img/56563-article4.png" class="img-thumbnail" alt="...">
                    </svg>
                </div>
            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#214252" fill-opacity="1" d="M0,256L60,266.7C120,277,240,299,360,261.3C480,224,600,128,720,122.7C840,117,960,203,1080,218.7C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg><footer class="site-footer">
    <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>
@endsection