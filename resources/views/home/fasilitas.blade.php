@include('layouts-home.header')

 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img style="width: 150px;" src="{{asset('pesantren')}}/assets/img/tulisan-logo.png" alt="">
        <!-- <h1>Al-Irsyad Tengaran<span></span></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/">Visi - Misi</a></li>
          <li><a href="#">Jenjang Pendidikan</a></li>
          <li><a href="/">Kebijakan Mutu</a></li>
          <li><a href="/">Blog</a></li>
          <li class="dropdown"><a href="#" class="active"><span>Pesantren</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="/fasilitas">Fasilitas Pesantren</a></li>
                    <li><a href="/studi">Profil Lulusan</a></li>
                    <li><a href="/pengajar">Pengajar</a></li>
                    <li><a href="#">Dropdown 4</a></li>
                </ul>
            </li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('pesantren/assets/img/footer-new.jpeg')}}">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h1 class="text-white">Fasilitas Pesantren</h1>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Fasilitas Pesantren</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section id="mutu" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4">

            <div class="col-xl-12 col-xl-6 text-center" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                {{-- <div class="icon">
                  <i class="fa-solid fa-mountain-city"></i>
                </div> --}}
                <h3>Fasilitas Pesantren</h3>
                <p style="font-size: 15px">Untuk menunjang tercapainya kualitas pendidikan yang optimal, Pesantren Islam Al-Irsyad menyediakan beberapa fasilitas di antaranya : Ruang Kelas yang memiliki AC, asrama representatif, laboratorium komputer, loundry, lapangan olah raga, pelayanan kesehatan, kantin, sumber air artesis, minimarket dan lain-lain.</p>
              </div>
            </div><!-- End Service Item -->
          </div>

        </div>
      </section><!-- End Services Section -->


</main><!-- End #main -->

  @include('layouts-home.footer')

  @include('layouts-home.script')
