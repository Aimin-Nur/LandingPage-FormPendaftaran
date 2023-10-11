@include('layouts.header')

@include('layouts.navbar')

 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4 text-primary"><span class="text-muted fw-light">Formulir/</span> Pendaftaran Santri Baru</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic with Icons -->
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Silahkan Lakukan Konfirmasi Pembayaran Biaya Pendaftaran.</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="/skema" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Lengkap <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="Fulan Bin Fulan"
                          aria-label="Fulan Bin Fulan"
                          aria-describedby="basic-icon-default-fullname2"
                          name="nama_lengkap"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="E-mail"
                          aria-label="john.doe"
                          aria-describedby="basic-icon-default-email2"
                          name="email"
                        />
                        <span id="basic-icon-default-email2" class="input-group-text">@gmail.com</span>
                      </div>
                      <div class="form-text">You can use letters, numbers & periods</div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Nomor Hp Orang Tua Santri <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-phone"></i
                        ></span>
                        <input
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="658 799 8941"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Bukti Pembayaran <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                          <input type="file" name="bukti_tf" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <small class="form-text">* File Bukti Pembayaran berupa .jpg, .png, .jpeg.</small> <br>
                      <small class="form-text">* Rekening Yayasan : xxxxxx .</small> <br>
                      <small class="form-text">* Maksimal Size File sebesar 5 MB.</small>
                    </div>
                </div>
                <div class="row mt-4 justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <div class="buy-now">
        <button type="button" data-bs-toggle="modal"
        data-bs-target="#modalToggle" class="btn btn-danger btn-buy-now">Baca Ketentuan Pendaftaran</button>
        </form>
    </div>


    <!-- Modal 1-->
    <div
    class="modal fade"
    id="modalToggle"
    aria-labelledby="modalToggleLabel"
    tabindex="-1"
    style="display: block"
    aria-hidden="true"
  >
    <div class="modal-lg modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalToggleLabel">Syarat & Ketentuan Pendafatran</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
            <ul>
                <li>Seluruh berkas persyaratan berbentuk file berformat PDF (kecuali file foto .jpg, .jpeg, .png) dengan ukuran masing-masing maksimal 5 MB.
                </li>
                <li>Scan raport dua semester terakhir.</li>
                <li>File foto setengah badan calon santri dengan ketentuan,
                    Pas Photo 3 x 4, background foto warna merah, baju putih berkerah, tanpa atribut, tanpa penutup kepala dan tanpa kacamata.</li>
                <li>Scan Akte Kelahiran.</li>
                <li>Scan Kartu Keluarga (KK).</li>
                <li>Scan Surat Kesehatan dan Hasil Lab HbsAg.</li>
                <li>Scan surat pernyataan kesanggupan: membayar biaya pendidikan, mengikuti pembelajaran tatap muka, menjalani masa pengabdian setelah lulus MA/SMA, kebenaran data yang diberikan dll, sesuai format yang disediakan (dapat diunduh usai pendaftaran online).</li>
                <li>Scan sertifikat prestasi minimal tingkat provinsi dan bukti hafalan (opsional).</li>
            </ul>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-primary"
            data-bs-target="#modalToggle2"
            data-bs-toggle="modal"
            data-bs-dismiss="modal"
          >
            Tutup
          </button>
        </div>
      </div>
    </div>
  </div>

  {{-- Top Up Modal --}}
  <script>
    window.addEventListener('DOMContentLoaded', function () {
        @if (!$errors->any())
            var myModal = new bootstrap.Modal(document.getElementById('modalToggle'));
            myModal.show();
        @endif
    });
</script>




@include('layouts.footer')

@include('layouts.script')
