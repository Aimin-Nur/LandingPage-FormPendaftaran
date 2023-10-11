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
          <li><a href="/contact" class="active">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('pesantren/assets/img/footer-new.jpeg')}});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Alamat Kami</h3>
              <p>Desa Dunggala Kecamatan Batudaa Kabupaten Gorontalo, Kode Pos 96271</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <small><a href="ponpesalirsyadgorontalo@gmail.com">ponpesalirsyadgorontalo@gmail.com</a></small>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Waktu Operasional</h3>
              <p>Senin - Jum'at (07:00 - 17.00)</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.641018778193!2d123.05111887496469!3d0.5401556994545641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32792b18d66e3c8b%3A0x699268ddd3dde619!2sMasjid%20Al%20Irsyad%20Al%20Islamiyah!5e0!3m2!1sid!2sid!4v1696429575069!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Hubungi Kami</h3>
              <p>+62 857-9627-2784</p>
            </div>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('layouts-home.footer')

  @include('layouts-home.script')
