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

    <title>Masuk | eProcurement - Sistem Informasi Procurement</title>

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
          <div class="card mt-5">

          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert" style="postion:relative;margin-bottom:-10px;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
          @endif

          @if(session()->has('failed'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert" style="postion:relative;margin-bottom:-10px;">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
          @endif

            <div class="card-body">
              <!-- Logo -->
              <div class="justify-content-center mb-2">
                <a href="index.html" class="app-brand-link gap-2">
                  <img src="dist/img/logo/logo.png" class="w-px-200 m-auto" alt="logo">
                </a>
              </div>
              <!-- /Logo -->
              <h5 class="text-center" style="margin-bottom: 0px;">Selamat datang di eProcurement 👋</h5>
              <p class="mb-4 text-center fw-lighter">Silakan masuk untuk mulai bekerja.</p>

              <form id="formAuthentication" class="mb-3" action="/" method="POST">
                @csrf
                <div class="form-floating mb-3">
                  <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username anda..." value="{{ old('username') }}">
                  <label for="floatingInput">Username</label>
                  
                  @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input name="password" type="password" class="form-control" id="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                </div>
              </form>
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
