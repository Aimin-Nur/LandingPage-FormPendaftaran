@include('layouts-home.header')


@include('layouts-home.navbar')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center mt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 class="text-white" data-aos="fade-down">PESANTREN ISLAM <span><br>AL-IRSYAD TENGARAN CABANG GORONTALO</span></h2>
            <p data-aos="fade-up" class="d-none d-lg-block">Pesantren Islam Al-Irsyad Tengaran Gorontalo adalah salah satu wadah pendidikan Islam yang menggabungkan ilmu-ilmu keislaman dengan ilmu-ilmu umum dalam rangka mencetak generasi Islam.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="/dashboard" class="btn-get-started">Daftar Sekarang</a>
          </div>
        </div>
      </div>
    </div>

    <style>
          @media (max-width: 767px) {
            .d-lg-block {
              display: none !important;
            }
          }
    </style>
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url({{ asset('pesantren/assets/img/hero-carousel/0.jpeg') }})">
      </div>
      <div class="carousel-item" style="background-image: url({{ asset('pesantren/assets/img/hero-carousel/1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('pesantren/assets/img/hero-carousel/2.jpeg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('pesantren/assets/img/hero-carousel/3.jpg') }})"></div>
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="about" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Visi Pesantren Islam Al-Irsyad Tengaran Cabang Gorontalo</h3>
              <span>Diakui sebagai salah satu
                Pondok Pesantren Islam terbaik
                di wilayah Nusantara maupun Mancanegara
                yang bermanhaj Salaful Ummah
                (Ahlus Sunnah Wal Jama’ah).</span>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h2>Misi Pesantren</h2>
              <p>Untuk mencapai Visi yang telah ditetapkan, Pesantren Islma Al-Irsyad Tengaran Cabang Gorontalo memiliki beberapa misi sebagai berikut: </p>
                <ul>
                  <p>1. Terwujudnya Pesantren dengan fasilitas yang memadai</p>
                  <p>2. Terciptanya lulusan yang menguasai bidang agama dan bahasa Arab, Inggris, Indonesia dengan aktif </p>
                  <p>3. Lulusan yang mampu berdakwah dengan aqidah dan manhaj Salafusshalih</p>
                  <p>4. Lulusan yang mampu melanjutkan ke jenjang yang lebih tinggi baik di dalam maupun luar negeri</p>
                  <p>5. Terwujudnya warga belajar yang peduli terhadap kebersihan</p>
                  <p>6. Terwujudnya warga belajar yang memiliki akhlaq</p>
                  <p>7. Lulusan dengan hasil UN tinggi, diakui oleh pemerintah</p>
                  <p>8. Memperoleh akreditasi dari Kemenag</p>
                  <p>9. Membangun pertemanan yg lebih baik, hubungan sosial yg baik dan positif.</p>
                  <p>10. Memperoleh kurikulum seimbang antara edukasi umum dan agama.</p>
                  <p>11. Memberikan kesempatan berkuliah di luar negri lebih besar</p>
                  <p>12. Memberikan kesempatan menjadi hafiz Al-Quran.</p>
                </ul>
              <!-- <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Get a quote</button>
                </div>

              </div> -->
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Visi & Misi ======= -->
    <section id="jenjang" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Jenjang Pendidikan</h2>
          <p>Pesantren Islam Al-Irsyad Tengaran membuka Jenjang Pendidikan bagi calon santri yang sedang mencari lingkungan Islami untuk mengembangkan ilmu dan keshalihan diri.
          </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('pesantren/assets/img/man-1.jpeg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Madrasah Tsanawiyah (MTs) / Mutawasithoh (MTW) Al-Irsyad</h4>
                    <p>MTw (Mutawasithoh) Pesantren Islam Al Irsyad Tengaran Cabang Gorontalo akan beroperasi pada Tahun 2024 adalah merupakan Tahun akademik baru  dengan ijin operasional dikeluarkan oleh...</p>
                    <a href="/mts" class="readmore stretched-link">Selengkapnya<i
                      class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image:url({{ asset('pesantren/assets/img/idad.jpeg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">I’dad Lughowy (Program Persiapan Bahasa)</h4>
                    <p>SJenjang pendidikan ini mendidik siswa yang sudah berusia remaja (lulusan SMP) atau yang sederajat, dengan kata lain bahwa siswa yang masuk ke jenjang ini harus sudah lulus dari jenjang SM atau yang sederajat...</p>
                    <a href="/idad" class="readmore stretched-link">Selengkapnya<i
                      class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="mutu" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kebijakan Mutu</h2>
          <p>Manajemen Pesantren Al-Irsyad Tengaran (PIAT) menetapkan Kebijakan mutu untuk dilaksanakan sebaik-baiknya oleh seluruh karyawan dengan tujuan untuk mencapai visi dan misi pesantren. Kebijakan ini didasarkan pada ketentuan-ketentuan yang ada pada Sistem Manajemen Mutu Pendidikan ISO 21001:2018 yakni sebagai berikut:</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Taat Peratutan</h3>
              <p>Patuh pada peraturan perundangan dan persyaratan lainnya merupakan kewajiban pesantren sebagai dasar pijakan dalam proses mencapai visi dan misi-nya.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Trend Pendidikan</h3>
              <p>Ikut mengawal proses perkembangan pendidikan dunia dan senantiasa menjunjung tinggi kekayaan intektual pada tempat yang semestinya, diimbangi dengan program peningkatan mutu pendidikan secara konsisten dan berkelanjutan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Amanah</h3>
              <p>Amanah dalam menjalin komunikasi dan interaksi dengan pihak-pihak yang berkepentingan demi memenuhi kepuasan terkait dengan kebutuhan dan harapan.
              </p>
            </div>
          </div><!-- End Service Item -->


          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Tanggung Jawab</h3>
              <p>Tanggung jawab sosial pesantren diwujudkan melalui program-program yang berpihak pada masyarakat kecil dalam mencapai tingkat pendidikan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>PIAT</h3>
              <p>Ini sama dengan Budaya Perusahaan. PIAT itu ada artinya Patuh, Ikut mengawali, Amanah dan Tanggung JAwab</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="blog" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
  <div class=" section-header">
        <h2>Artikel & Kajian Islam</h2>
        <p>Kajian Islam singkat untuk menambah wawasan ilmu agama kita semua</p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{asset('pesantren')}}/assets/img/blog/kisah-1.jpeg" class="img-fluid" alt="">
              <span class="post-date">18 Desember 2010</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Siroh dan Tarikh
                Siapa Rasulullah serta Masa Kecil Beliau Shallallahu ‘Alaihi Wa Sallam</h3>
              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Administator</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Kajian Islam</span>
                </div>
              </div>

              <hr>

              <a href="/blog-sirah" class="readmore stretched-link"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{asset('pesantren')}}/assets/img/blog/santri.jpeg" class="img-fluid" alt="">
              <span class="post-date">18 Maret 2017</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Kebahagian orang tua mendidik buah hati di Pondok Pesantren</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Administator</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Nasehat</span>
                </div>
              </div>

              <hr>

              <a href="/blog-santri" class="readmore stretched-link"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{asset('pesantren')}}/assets/img/blog/manhaj.jpeg" class="img-fluid" alt="">
              <span class="post-date">September 05</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Penjelasan Aqidah Islamiyah serta Manhaj Islmaiyah menurut para pendapat ulama</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Administator</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Kajian Islam</span>
                </div>
              </div>

              <hr>

              <a href="/blog-aqidah" class="readmore stretched-link"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

@include('layouts-home.footer')

@include('layouts-home.script')
