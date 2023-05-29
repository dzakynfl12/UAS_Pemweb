@extends('layout.main')

@section('container')
<link href="/css/about.css" rel="stylesheet" />

  <!-- Responsive navbar-->
  {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="#!">Start Bootstrap</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
              </ul>
          </div>
      </div>
  </nav> --}}
  <!-- Header - set the background image for the header in the line below-->
  <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
      <div class="text-center my-5">
          <img class="img-fluid rounded-circle mb-4" width="200" height="200" src="/img/kekelompok.jpg" alt="..." />
          <!--<h1 class="text-white fs-3 fw-bolder">Dzaky Naufal Nabhan Setiawan Putra</h1>-->
          <h1 class="text-white fs-3 fw-bolder">Kelompok Pemweb</h1>
          <p class="text-white-50 mb-0">152021179 - 152021147 - 152021153</p>
          <p class="text-white-50 mb-0">Founder of World Blog</p>
      </div>
  </header>
  <body>
  <!-- Content section-->
  <section class="py-5">
      <div class="container my-5">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <h2>BACKGROUND</h2>
                  <p class="lead">Perkenalan singkat tentang founder kami </p>
                  <p class="mb-0">Bernama lengkap Dzaky Naufal Nabhan Setiawan Putra, lahir di Bandung pada tanggal 12 oktober 2003. Merupakan founder dari Dzaky's Blog
                    yang saat ini sedang anda buka. Didirikan pada tahun 2022 untuk memenuhi tugas UAS mata kuliah Pemrograman Web kemudian berkembang setelah di hosting memiliki banyak peminat sehingga web ini dapat dinikmati hingga saat ini.
                  </p>
                  <br>
                  <p class="mb-0">Saat ini menyandang gelar S1 Komputer (S.Kom), kemudian sedang meneruskan pendidikan S2 di Harvard University yang berada di Amerika Serikat</p>
                  <br>
                  <p class="mb-0">Selain Dzaky's Blog, beliau memiliki perusahaan di bidang Musik yaitu Produser Musik, kemudian juga memiliki bisnis dibidang fashion dan pertambangan emas di Kalimantan.</p>
              </div>
          </div>
      </div>
  </section>

  <hr class="featurette-divider">

  <!-- Image element - set the background image for the header in the line below-->
  <a href="https://www.itenas.ac.id/" class="href">
  <div class="py-5 bg-image-full mt-5" style="background-image: url('https://va.medcom.id/site/osc2018/images/kampus/kampus-itenas.jpg')">
      <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
      <div style="height: 20rem"></div>
  </div>
</a>
  <!-- Content section-->
  <section class="py-5">
      <div class="container my-5">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <h2>Background Pendidikan</h2>
                  <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                  <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
              </div>
          </div>
      </div>

      <hr class="featurette-divider">

     
  </section>
  {{-- <!-- Footer-->
  <footer class="py-5 bg-dark">
      <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
  </footer> --}}
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="/js/about.js"></script>
</body>
@endsection
 