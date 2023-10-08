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
              <h5 class="mb-0">Silahkan isi formulir berikut ini sesuai data diri Anda.</h5>
            </div>
            <div class="card-body">
                <!-- Menampilkan pesan kesalahan validasi -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <form action="/pendaftaran" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Foto Santri <small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group">
                        <input type="file" name="foto" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <small class="form-text">* File foto dapat berupa .jpg, .png, .jpeg.</small> <br>
                    <small class="form-text">* Gunakan Foto latar belakang biru.</small> <br>
                    <small class="form-text">* Maksimal Size Foto 5 MB.</small>
                  </div>
                </div>
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
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">NISN Santri <small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-buildings"></i
                      ></span>
                      <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="281xxxx0020003."
                        aria-label="281xxxx0020003"
                        aria-describedby="basic-icon-default-company2"
                        name="nik"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="">Jenis Kelamin <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline mt-1">
                            <input
                              class="form-check-input"
                              type="radio"
                              id="inlineRadio1"
                              value="Ikhwan"
                              name="jenis_kelamin"
                            />
                            <label class="form-check-label" for="inlineRadio1">Ikhwan</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              id="inlineRadio2"
                              value="Akhwat"
                              name="jenis_kelamin"
                            />
                            <label class="form-check-label" for="inlineRadio2">Akhwat</label>
                          </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="">Tempat/Tanggal Lahir <small class="text-danger">*</small></label>
                        <div class="col-sm-5">
                            <input name="tempat_lahir" class="form-control" type="text" placeholder="Kota kelahiran" id="html5-date-input"/>
                        </div>
                        <div class="col-sm-5">
                            <input name="tgl_lahir" class="form-control" type="date" placeholder="2021-06-18" id="html5-date-input"/>
                        </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Asal Sekolah <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-buildings"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="PPMI Shohwatul Is'ad"
                          aria-label="john.doe"
                          aria-describedby="basic-icon-default-email2"
                          name="asal_sekolah"
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
                <div class="row mt-2">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Nomor Hp Santri <small class="text-danger">*</small></label>
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
                        name="hp_santri"
                      />
                    </div>
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
                <div class="row mt-3">
                  <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-message">Alamat Lengkap <small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span  class="input-group-text"><i class='bx bx-building-house'></i></span>
                      <input
                        name="alamat_lengkap"
                        id="basic-icon-default-message"
                        class="form-control"
                        placeholder="Jalan Urip Sumoharjo"
                      >
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Riwayat Penyakit</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-capsule'></i></span>
                        <input
                          name="riwayat_penyakit"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Asma dan lain-lain"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Nama Ayah <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          name="nama_ayah"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Ali Bin Abi Thalib"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Nama Ibu <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          name="nama_ibu"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Fatimah"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pendidikan Ayah <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select name="pendidikan_ayah" class="form-select" id="inputGroupSelect02">
                              <option selected>...</option>
                              <option value="SD">SD</option>
                              <option value="SMP">SMP</option>
                              <option value="SMA">SMA</option>
                              <option value="D3">D3</option>
                              <option value="S1">S1</option>
                              <option value="S2">S2</option>
                              <option value="S3">S3</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                          </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pendidikan Ibu <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select name="pendidikan_ibu" class="form-select" id="inputGroupSelect02">
                              <option selected>...</option>
                              <option value="SD">SD</option>
                              <option value="SMP">SMP</option>
                              <option value="SMA">SMA</option>
                              <option value="D3">D3</option>
                              <option value="S1">S1</option>
                              <option value="S2">S2</option>
                              <option value="S3">S3</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                          </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pekerjaan Ayah <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-briefcase' ></i></span>
                        <input
                          name="pekerjaan_ayah"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Pegawai Negeri Sipil"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pekerjaan Ibu <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-briefcase' ></i></span>
                        <input
                          name="pekerjaan_ibu"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Ibu Rumah Tangga"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Alamat Orang Tua <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-phone"></i
                        ></span>
                        <input
                          name="alamat_ortu"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Jalan Urip Sumoharjo"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Nama Wali</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          name="nama_wali"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Zaid"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pendidikan Wali</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select name="pendidikan_wali" class="form-select" id="inputGroupSelect02">
                              <option selected>...</option>
                              <option value="SD">SD</option>
                              <option value="SMP">SMP</option>
                              <option value="SMA">SMA</option>
                              <option value="D3">D3</option>
                              <option value="S1">S1</option>
                              <option value="S2">S2</option>
                              <option value="S3">S3</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                          </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pekerjaan Wali</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-briefcase"></i
                        ></span>
                        <input
                          name="pekerjaan_wali"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Guru"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Alamat Wali</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-building-house'></i></span>
                        <input
                          name="alamat_wali"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Jalan Urip Sumoharjo"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">No Hp Wali</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-phone"></i
                        ></span>
                        <input
                          name="hp_wali"
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
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Hubungan Wali ke Santri</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-user-voice'></i></span>
                        <input
                          name="hubungan_wali"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Keponakan"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kartu Keluarga <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                          <input type="file" name="kk" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <small class="form-text">* Scan Kartu Keluarga Asli.</small> <br>
                      <small class="form-text">* File Scan Kartu Keluarga dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Akte Kelahiran <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                          <input type="file" name="akte_lahir" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <small class="form-text">* Scan Akte Kelahiran Asli.</small> <br>
                      <small class="form-text">* File Scan Akte Kelahiran dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Surat Kesehatan <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                          <input type="file" name="kesehatan" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <small class="form-text">* Scan Surat Kesehatan.</small> <br>
                      <small class="form-text">* File Scan Surat Kesehatan dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Scan raport <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                          <input type="file" name="rapor" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <small class="form-text">* Scan Raport 2 Semester terakhir.</small> <br>
                      <small class="form-text">* File Scan Raport dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Surat Kesanggupan <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                          <input type="file" name="ijazah" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <small class="form-text">* Silahkan donwload terlebih dahulu pernyataan Surat Kesanggupan.</small> <br>
                      <small class="form-text">* File Surat Kesanggupan dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Keahlian khusus</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-book-content'></i></span>
                        <input
                          name="keahlian"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Berenang"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          name="hp_ortu"
                        />
                      </div>
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

@include('layouts.footer')

@include('layouts.script')
