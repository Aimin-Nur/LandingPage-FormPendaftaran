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
          <li><a href="#" class="active">Jenjang Pendidikan</a></li>
          <li><a href="/">Kebijakan Mutu</a></li>
          <li><a href="/">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('pesantren/assets/img/footer-new.jpeg')}}">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Jenjang Pendidikan</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Jenjang Pendidikan</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">

            <h4>Pesantren Islam Al-Irsyad Tangaran Cabang Gorontalo</h4>
            <p>Pesantren Islam Al-Irsyad Tengaran Gorontalo adalah salah satu wadah pendidikan Islam yang menggabungkan ilmu-ilmu keislaman dengan ilmu-ilmu umum dalam rangka mencetak generasi Islam.</p>
          </div>

          <div class="col-lg-8">
            <img src="{{asset('pesantren')}}/assets/img/man-1.jpeg" alt="" class="img-fluid services-img">
            <h3>Madrasah Tsanawiyah (MTs) / Mutawasithoh (MTW) Al-Irsyad</h3>
            <p>
              MTw (Mutawasithoh) Pesantren Islam Al Irsyad Tengaran Cabang Gorontalo akan beroperasi pada Tahun 2024 adalah merupakan Tahun akademik baru  dengan ijin operasional dikeluarkan oleh Kanwil Kemenag Provinsi Gorontalo
              PIAT Cabang Gorontalo memiliki beberapa wadah pendidikan yang secara integral (saling terkait dan berjalan bersama - sama) berupaya untuk menunjang terwujudnya Visi Pesantren.
            </p>
            <p>
              Salah satu Wadah pendidikan dalam jenjang ini adalah jenjang MTw (Mutawasithoh), jenjang ini berusaha untuk dapat mencetak para lulusan yang mempunyai kemampuan bahasa Arab yang optimal serta pengetahuan ke-Islaman maupun pengetahuan umum yang memadai.
            </p>
            <h4>Daftar Mata Pelajaran Jenjang MTW/MTs</h4>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Tauhid</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Tafsir Al-Qur'an</span>
              </li>
              <li><i class="bi bi-check-circle"></i> <span>Tahfidz Al-Qur'an</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Hadist</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Fiqih Ibadah</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Akhlaq</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Sirah Nabawiyah</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Tadrib Lughowy</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Khat</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Sharaf</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Nahwu</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ta'bir Insya</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Fahmu Maqru</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Tahfidz Al-Qur'an</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Matematika</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Bahasa Indonesia</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Bahasa Inggris</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ilmu Pengetahuan Alam</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ilmu Pengetahuan Sosial</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Pendidikan Kewarganegaraan</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Komputer</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Olahraga</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Suluk</span></li>
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->

  @include('layouts-home.footer')

  @include('layouts-home.script')
