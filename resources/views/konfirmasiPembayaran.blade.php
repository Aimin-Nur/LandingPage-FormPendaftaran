@include('layouts.header')

@include('layouts.navbar-admin')

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
                <span class="fw-semibold d-block mb-1">Tervalidasi</span>
                <h3 class="card-title mb-2">{{$validasi}} orang</h3>
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
                <span>Pending</span>
                <h3 class="card-title text-nowrap mb-1">{{$pending}} orang</h3>
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
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @isset($dataPendaftaran)
                @foreach ($dataPendaftaran as $pendaftaran)
                    <tr>
                        <td>{{ $pendaftaran->nama_lengkap }}</td>
                        <td>{{ $pendaftaran->hp_ortu }}</td>
                        <td>{{ $pendaftaran->email }}</td>
                        <td>
                            @if ($pendaftaran->status === 'Menunggu Validasi')
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalScrollable{{ $pendaftaran->id }}" class="badge bg-label-danger me-1">{{ $pendaftaran->status}}</button>
                            @else
                                <span class="badge bg-label-success me-1">{{ $pendaftaran->status}}</span>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info mx-auto" href="{{ route('download-berkas-pembayaran', ['id' => $pendaftaran->id]) }}">Lihat Bukti Tf</a>
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
            <form action="{{ route('validasi.pembayaran', ['id' => $pendaftaran->id]) }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalScrollableTitle">Konfirmasi Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <span class="text-center">Apakah anda yakin untuk melakukan validasi pemabayaran dengan santri atas nama {{$pendaftaran->nama_lengkap}} ?</span>
                        <span class="text-center">Jika anda menekan tombol validasi, maka sistem akan menegirmkan link formulir PSB melalui email peserta.</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-success">Validasi</button>
                </div>
            </form>
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
