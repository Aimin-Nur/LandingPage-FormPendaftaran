@include('layouts-home.header')

@include('layouts-home.navbar')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('pesantren/assets/img/footer-new.jpeg') }});">
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
            <img src="{{asset('pesantren')}}/assets/img/idad.jpeg" alt="" class="img-fluid services-img">
            <h3>I’dad Lughowy (Program Persiapan Bahasa)</h3>
            <p>
              Jenjang pendidikan ini mendidik siswa yang sudah berusia remaja (lulusan SMP) atau yang sederajat, dengan kata lain bahwa siswa yang masuk ke jenjang ini harus sudah lulus dari jenjang SMP atau yang sederajat dengan memiliki ijasah tersebut sebagai syarat masuk jenjang I’dad Lughawi.
              Kurikulum yang diajarkan adalah kurikulum bahasa arab dan syari’ah, karena jenjang ini dipersiapkan untuk melanjutkan ke jenjang pendidikan yang lebih tinggi yaitu MA (Madrasah Aliyah Al-Irsyad). Lama pendidikan adalah satu tahun pelajaran.
              Kurikulum bahasa Arab yang digunakan pada jenjang I’dad Lughawi adalah kurikulum yang digunakan pada jenjang MTs dengan dipadatkan menjadi satu tahun pelajaran.
              Siswa yang sudah berhasil menyelesaikan di jenjang ini akan mendapatkan ijasah Pesantren.
            </p>
            <h4>Target Kompetensi Lulusan</h4>
            <li><span>Lulusan jenjang I’dad Lughawi harus sudah menguasai bahasa Arab lisan maupun tulis sebagai jenjang untuk mengikuti jenjang pendidikan yang lebih tinggi (MA).</span></li>
            <li><span>Memahami aqidah dengan benar jauh dari syirik, bid’ah dan khurafat berdasarkan pemahaman salafushshaleh.</span>
            </li>
            <li><span>Hafal minimal 2 juz Al-Qur’an.</span></li>

            <h4>Kurikulum I’dad Lughawi</h4>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Tauhid</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Tafsir Al-Qur'an</span>
              </li>
              <li><i class="bi bi-check-circle"></i> <span>Tahfidz Al-Qur'an</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Hadist</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Fiqih Ibadah</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Khot & Imla’</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Tadrib Lughowy</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Khat</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Shorof</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Nahwu</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ta'bir Insya</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Tadribat AA</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Qira’ah</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Komputer</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Siroh Nabi</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Bela diri TIFAN</span></li>
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->

  @include('layouts-home.footer')

  @include('layouts-home.script')
