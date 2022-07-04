@extends('layouts.main')

@section('content')
@auth
	<!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-3 order-0">
		    <!-- Welcome Banner -->
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body" style="margin-left:20px;">
                            <h2 class="card-title text-primary">
                          		Selamat Datang {{ auth()->user()->nama }} 🎉
                            </h2>
                            <p class="mb-2">
                                Ada <b class="text-warning">10 PPBJ-e</b> lagi menunggu untuk di proses. <b>Ayo kita mulai bekerja!</b>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5">
						<img src="dist/img/illustrations/man-with-laptop-light.png"
						  height="110"
						  alt="View Badge User"
						  data-app-dark-img="illustrations/man-with-laptop-dark.png"
						  data-app-light-img="illustrations/man-with-laptop-light.png"
					      style="float: right;margin-right: 40px;"
						/>
                    </div>
                </div>
            </div>
			<!-- / Welcome Banner -->
        </div>

		<!-- Content Banner -->
        <div class="container-xxl">
            <div id="carouselExampleCaptions" class="carousel slide shadow rounded w-100s h-100" data-bs-ride="carousel">
				<!-- Pagination Indicator -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
				<!-- / Pagination Indicator -->
                <div class="carousel-inner">
					<!-- Content Banner 1 -->
                    <div class="carousel-item active">
                      	<img src="dist/img/elements/1.jpg" class="d-block w-100" alt="...">
                      	<div class="carousel-caption d-none d-md-block bg-dark" style="--bs-bg-opacity: .5;">
                        	<h4>Lakukan Kerjasama Dengan Supplier</h4>
                        	<p>Mencari dan membuat perjanjian kerjasama dengan beberapa supplier yang benar-benar baik dan bagus pelayanannya terhadap konsumen serta mampu memberikan harga standar dengan kualitas luar biasa.</p>
                      	</div>
                    </div>
					<!-- / Content Banner 1 -->
                    				
					<!-- Content Banner 2 -->
					<div class="carousel-item">
                      	<img src="dist/img/elements/2.jpg" class="d-block w-100" alt="...">
                      	<div class="carousel-caption d-none d-md-block bg-dark" style="--bs-bg-opacity: .5;">
                        	<h4>Koordinasi Pengiriman Barang</h4>
                        	<p>Selalu melakukan koordinasi serta mengikuti perkembangan produksi barang oleh supplier secara teratur hingga seluruh barang yang dipesan terkirim ke tempat atau tujuan dan waktu yang telah ditentukan.</p>
                      	</div>
                    </div>
					<!-- / Content Banner 2 -->

					<!-- Content Banner 3 -->
                    <div class="carousel-item">
                      	<img src="dist/img/elements/3.jpg" class="d-block w-100" alt="...">
                      	<div class="carousel-caption d-none d-md-block bg-dark" style="--bs-bg-opacity: .5;">
                        	<h4>Pastikan Ketepatan Barang</h4>
                        	<p>Periksa dan pastikan bahwa barang yang telah dipesan dan diterima merupakan barang yang benar-benar sesuai dengan permintaan pemohon.</p>
                      	</div>
                    </div>
					<!-- / Content Banner 3 -->
                </div>

				<!-- Navigation Banner -->
				<!-- Previous -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
				<!-- / Previous -->

				<!-- Next -->
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
				<!-- / Next -->
				<!-- / Navigation Banner -->
            </div>
        </div>
		<!-- / Content Banner -->
    </div>
	<!-- / Content Row -->
@endauth
@endsection