@include('layouts.header')

@include('layouts.navbar')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-8 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-kalla">Selamat Datang Admin</h5>
                <p class="mb-4" style="font-wieght:2px">
                  Sampai saat ini anda sudah memiliki <span class="fw-bold">{{$totalPendaftaran}}</span> Santri yang mendaftar. Check data santri yang sudah dikirimkan oleh para calon santri.
                </p>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="{{asset('sneat')}}/assets/img/illustrations/man-with-laptop-light.png"
                  width="200"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                  class="gambar-besar"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="{{asset('sneat')}}/assets/img/icons/unicons/chart-success.png"
                      alt="chart success"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt3"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                      <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Ikhwan</span>
                <h3 class="card-title mb-2">{{$ikhwan}} orang</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> total {{$totalPendaftaran}} santri</small>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="{{asset('sneat')}}/assets/img/icons/unicons/wallet-info.png"
                      alt="Credit Card"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt6"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                      <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                  </div>
                </div>
                <span>Akhwat</span>
                <h3 class="card-title text-nowrap mb-1">{{$akhwat}} orang</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>total {{$totalPendaftaran}} santri</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<hr class=""/>

<!-- Striped Rows -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Data Pendaftaran Santri</h5>
        <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nama Santri</th>
                <th>Nomor Hp</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @isset($dataPendaftaran)
                @foreach ($dataPendaftaran as $pendaftaran)
                    <tr>
                        <td>{{ $pendaftaran->nama_lengkap }}</td>
                        <td>{{ $pendaftaran->hp_santri }}</td>
                        <td>{{ $pendaftaran->email }}</td>
                        <td>
                            @if ($pendaftaran->gender === 'Ikhwan')
                                <span class="badge bg-label-info me-1">{{ $pendaftaran->gender}}</span>
                            @else
                                <span class="badge bg-label-danger me-1">{{ $pendaftaran->gender}}</span>
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a data-bs-toggle="modal" data-bs-target="#modalScrollable{{ $pendaftaran->id }}"
                                    class="dropdown-item" href="javascript:void(0);">
                                    <i class="bx bx-edit-alt me-1"></i> Detail
                                </a>


                                {{-- <a class="dropdown-item" href="javascript:void(0);">
                                <i class="bx bx-trash me-1"></i> Delete</a> --}}
                              </div>
                            </div>
                        </td>
                        <!-- tambahkan kolom lainnya sesuai kebutuhan -->
                    </tr>
                @endforeach
            @endisset
            </tbody>
        </table>
        </div>
    </div>
</div>
  <!--/ Striped Rows -->

{{-- Modal --}}
@isset($dataPendaftaran)
@foreach ($dataPendaftaran as $pendaftaran)
<div class="modal fade" id="modalScrollable{{ $pendaftaran->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalScrollableTitle">Detail Data</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            {{-- <div class="modal-body">
                <p><strong>Nama:</strong> <span id="detailNama">{{ $pendaftaran->nama_lengkap}}</span></p>
                <p><strong>Email:</strong> <span id="detailEmail">{{ $pendaftaran->email}}</span></p>
                <p><strong>Jenis Kelamin:</strong> <span id="detailGender">{{ $pendaftaran->gender }}</span></p>
                <p><strong>Tempat lahir:</strong> <span id="detailGender">{{ $pendaftaran->tempat_lahir }}</span></p>
                <p><strong>Tanggal lahir:</strong> <span id="detailGender">{{ $pendaftaran->tanggal_lahir }}</span></p>
                <p><strong>Nomor HP:</strong> <span id="detailHpSantri">{{ $pendaftaran->hp_santri}}</span></p>
                <p><strong>Nomor HP Orang Tua:</strong> <span id="detailHpOrangTua">{{ $pendaftaran->hp_ortu}}</span></p>
                <p><strong>Asal Sekolah:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->asal_sekolah}}</span></p>
                <p><strong>Alamat:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->alamat_lengkap}}</span></p>
                <p><strong>NIK:</strong> <span id="detailNik">{{ $pendaftaran->NIK}}</span></p>
                <p><strong>Riwayat Penyakit:</strong> <span id="detailNik">{{ $pendaftaran->riwayat_penyakit}}</span></p>
                <p><strong>Nama Ayah:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->nama_ayah}}</span></p>
                <p><strong>Nama Ibu:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->nama_ibu}}</span></p>
                <p><strong>Pendidikan Ayah:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->pendidikan_ayah}}</span></p>
                <p><strong>Pendidikan Ibu:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->pendidikan_ibu}}</span></p>
                <p><strong>Pekerjaan Ayah:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->pekerjaan_ayah}}</span></p>
                <p><strong>Pekerjaan Ibu:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->pekerjaan_ibu}}</span></p>
                <p><strong>Nama Wali:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->nama_wali}}</span></p>
                <p><strong>Pekerjaan Wali:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->pekerjaan_wali}}</span></p>
                <p><strong>Pendidikan Wali:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->pendidikan_wali}}</span></p>
                <p><strong>Nomor Hp wali:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->hp_wali}}</span></p>
                <p><strong>Alamat Wali:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->alamat_wali}}</span></p>
                <p><strong>Hubungan Wali:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->hubungan_wali}}</span></p>
                <p><strong>Keahlian:</strong> <span id="detailAsalSekolah">{{ $pendaftaran->keahlian}}</span></p>
                <a href="{{ route('download-berkas', ['id' => $pendaftaran->id]) }}">Download berkas</a>
            </div> --}}
            <div class="modal-body">
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameBackdrop" class="form-label">Nama Lengkap</label>
                    <input
                      class="form-control"
                      value="{{$pendaftaran->nama_lengkap}}"
                      readonly
                    />
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col mb-0">
                    <label for="emailBackdrop" class="form-label">Jenis Kelamin</label>
                    <input
                      class="form-control"
                      value="{{ $pendaftaran->gender }}"
                      readonly
                    />
                  </div>
                  <div class="col mb-0">
                    <label for="dobBackdrop" class="form-label">Email</label>
                    <input
                      class="form-control"
                      value="{{ $pendaftaran->email}}"
                      readonly
                    />
                  </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBackdrop" class="form-label">Tempat Lahir</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->tempat_lahir }}"
                        readonly
                      />
                    </div>
                    <div class="col mb-0">
                      <label for="dobBackdrop" class="form-label">Tanggal Lahir</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->tanggal_lahir}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Alamat Lengkap</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->alamat_lengkap}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Asal Sekolah</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->asal_sekolah}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Nomor NISN</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->NIK}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBackdrop" class="form-label">Nomor Hp Santri</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->hp_santri }}"
                        readonly
                      />
                    </div>
                    <div class="col mb-0">
                      <label for="dobBackdrop" class="form-label">Nomor Hp Orang Tua</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->hp_ortu}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Riwayat Penyakit</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->riwayat_penyakit}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Nama Ayah</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->nama_ayah}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Nama Ibu</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->nama_ibu}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBackdrop" class="form-label">Pendidikan Ayah</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->pendidikan_ayah }}"
                        readonly
                      />
                    </div>
                    <div class="col mb-0">
                      <label for="dobBackdrop" class="form-label">Pendidikan Ibu</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->pendidikan_ibu}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Pekerjaan Ayah</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->pekerjaan_ayah}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Pekerjaan Ibu</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->pekerjaan_ibu}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Nama Wali</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->nama_wali}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBackdrop" class="form-label">Pendidikan Wali</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->pendidikan_wali }}"
                        readonly
                      />
                    </div>
                    <div class="col mb-0">
                      <label for="dobBackdrop" class="form-label">Pekerjaan Wali</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->pekerjaan_wali}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Alamat Lengkap Wali</label>
                      <input
                        class="form-control"
                        value="{{$pendaftaran->alamat_wali}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBackdrop" class="form-label">Nomor Hp Wali</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->hp_wali }}"
                        readonly
                      />
                    </div>
                    <div class="col mb-0">
                      <label for="dobBackdrop" class="form-label">Hubungan Wali</label>
                      <input
                        class="form-control"
                        value="{{ $pendaftaran->hubungan_wali}}"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 text-center mt-3">
                        <a class="btn btn-success mx-auto" href="{{ route('download-berkas', ['id' => $pendaftaran->id]) }}">Download berkas Santri</a>
                    </div>
                  </div>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>

            </div>
        </div>
    </div>
</div>
@endforeach
@endisset

@include('layouts.footer')

<div class="buy-now">
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" type="submit" class="btn btn-danger btn-buy-now">Logout</button>
    </form>
</div>




@include('layouts.script')
