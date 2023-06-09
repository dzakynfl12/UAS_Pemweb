@extends('layout.main')

@section('container') 
<link href="/css/carousel.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
      </style>
<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://source.unsplash.com/1400x600?street-photography" alt="">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Buat akun dan tulis blog anda.</h1>
              <p>Ekspresikan apapun yang ingin anda tulis pada blog pribadi anda, buat akun anda sekarang!</p>
              <p><a class="btn btn-lg btn-primary" href="/register">Buat Akun Sekarang!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1400x600?passion" alt="">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
          <div class="container">
            <div class="carousel-caption">
              <h1>Category yang menarik.</h1>
              <p>Temukan category-category menarik yang sesuai dengan passion anda.</p>
              <p><a class="btn btn-lg btn-primary" href="/categories">Lihat Category</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1400x600?personal" alt="">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Blog yang sesuai dengan passion anda.</h1>
              <p>Temukan blogger yang sesuai dengan passion anda.</p>
              <p><a class="btn btn-lg btn-primary" href="/blog">Buka Blog</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
  
    <div class="container marketing">
  
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
            <img src="https://source.unsplash.com/170x170?programming" alt="programming" class="img-thumbnail rounded-circle">
          {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></svg> --}}
          <h2 class="fw-normal">Web Programming</h2>
          <p>Baca dan pelajari tentang banyak pengalaman-pengalaman para blogger di bidang web programming</p>
          <p><a class="btn btn-secondary" href="/blog?category=web-programming">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="https://source.unsplash.com/170x170?webdesign" alt="programming" class="img-thumbnail rounded-circle">
          {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> --}}
          <h2 class="fw-normal">Web Design</h2>
          <p>Temukan referensi untuk men-design web dengan para blogger berpengalaman dibidang UI UX</p>
          <p><a class="btn btn-secondary" href="/blog?category=web-design">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="https://source.unsplash.com/170x170?personal" alt="programming" class="img-thumbnail rounded-circle">
          {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> --}}
          <h2 class="fw-normal">Personal</h2>
          <p>Tertarik dengan pengalaman hidup para blogger? klik link dibawah untuk membaca lebih dalam tentang blogger yang anda sukai</p>
          <p><a class="btn btn-secondary" href="/blog?category=personal">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
      <!-- START THE FEATURETTES -->
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Konten yang menarik <span class="text-muted">Yang akan menghibur anda</span></h2>
          <p class="lead">Anda dapat mencari segala sesuatu tentang yang anda inginkan</p>
        </div>
        <div class="col-md-5">
            <img src="https://source.unsplash.com/500x500?programming" alt="programming" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
          {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Buat kontenmu Sendiri! <span class="text-muted">Kembangkan bakat menulis anda disini</span></h2>
          <p class="lead">Kamu dapat menulis apapun yang kamu suka disini, tumpahkan semuanya dengan membuat blog.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="https://source.unsplash.com/500x500?webdesign" alt="programming" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
          {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
            <img src="https://source.unsplash.com/500x500?personal" alt="programming" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
          {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <!-- /END THE FEATURETTES -->
  
    </div><!-- /.container -->
  
  
    <!-- FOOTER -->
    {{-- <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main> --}}

@endsection
     
     