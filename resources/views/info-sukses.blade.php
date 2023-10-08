@include('layouts.header')

<!-- Error -->
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
      <h2 class="mb-2 mx-2">Data Anda Berhasil Disimpan 😁 </h2>
      <p class="mb-4 mx-2">Silahkan tunggu informasi lebih lanjut dari panitia.</p>
      <a href="/dashboard" class="btn btn-primary">Back to home</a>
      <div class="mt-3">
        <img
          src="{{asset('sneat')}}/assets/img/illustrations/sukses.png"
          alt="page-misc-error-light"
          width="500"
          class="img-fluid"
          data-app-dark-img="illustrations/page-misc-error-dark.png"
          data-app-light-img="illustrations/page-misc-error-light.png"
        />
      </div>
    </div>
</div>
  <!-- /Error -->

@include('layouts.footer')

@include('layouts.script')
