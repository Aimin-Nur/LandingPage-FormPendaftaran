@include('layouts.header')
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="/login" class="app-brand-link gap-2">
                <img class="ms-4" style="width: 85%" src="{{asset('sneat')}}/assets/img/favicon/tulisan-logo.png" alt="">
              </a>
            </div>
            <!-- /Logo -->

            <h4 class="mb-2">Selamat datang Admin! 👋</h4>
            <p class="mb-4">Please sign-in to your account and view the monitoring</p>
            <?php
            $gagalLogin = Session::get('warning');
                if ($gagalLogin) {
                echo '<div class="alert alert-danger">' . $gagalLogin . '</div>';
            }
            ?>
            <form action="/prosesLogin/admin" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                    id="username"
                  type="text"
                  class="form-control"
                  placeholder="Enter your email or username"
                  name="username"
                />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" />
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>

            <p class="text-center">
              <span>New on our platform?</span>
              <a href="auth-register-basic.html">
                <span>Create an account</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->

  @include('layouts.footer')

  @include('layouts.script')
