<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="dist/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Daftar Akun | eProcurement - Sistem Informasi Procurement</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="dist/img/favicon/logo2.ico" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="dist/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="dist/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="dist/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="dist/css/demo.css" />
    <link rel="stylesheet" href="dist/css/mystyle.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="dist/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="dist/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="dist/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="dist/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card mt-5">
            <div class="card-body">
              <h5 class="text-center mb-5" style="margin-bottom: 0px;">Daftar Akun eProcurement</h5>

              @if(session('error'))
              <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
              </div>
              @endif

              <form id="formAuthentication" class="mb-3" action="/register" method="POST">
                @csrf
                
                <div class="form-floating mb-3">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected disabled>Nama Lengkap</option>
                    @foreach($data as $user)
                    <option value="{{ $user->id }}">{{ $user->nama_karyawan }}</option>
                    @endforeach
                  </select>
                  <label for="floatingSelect">Nama Lengkap</label>
                  @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username ..." value="{{ old('username') }}">
                  <label for="floatingInput">Username</label>

                  @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                  <label for="floatingPassword">Password</label>

                  @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input name="divisi" type="text" class="form-control" id="floatingPassword" value="OPERASIONAL" hidden>
                  <label for="floatingPassword">Divisi</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="jabatan" type="text" class="form-control" id="floatingPassword" value="ADMIN REGIONAL A" hidden>
                  <label for="floatingPassword">Jabatan</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="nik" type="text" class="form-control" id="floatingPassword" value="000008" hidden>
                  <label for="floatingPassword">NIK</label>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Daftar</button>
                </div>
              </form>
              <p class="text-center">
                <span>Sudah punya Akun?</span>
                <a href="/">
                  <span>Masuk</span>
                </a>
              </p>
            </div>
          </div>
          <p class="text-center mt-4">
              © <script>document.write(new Date().getFullYear());</script>
				      , dibuat oleh : <a href="#" target="_blank" class="footer-link fw-bolder">MaullanaIbrahim</a>
          </p>
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="dist/vendor/libs/jquery/jquery.js"></script>
    <script src="dist/vendor/libs/popper/popper.js"></script>
    <script src="dist/vendor/js/bootstrap.js"></script>
    <script src="dist/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="dist/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="dist/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
