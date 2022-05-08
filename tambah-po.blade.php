<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" 
  data-theme="theme-default"
  data-assets-path="../dist/"
  data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Tambah PO | e-Procurement - Sistem Informasi Procurement Yomart</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="dist/img/favicon/iconym.ico" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="dist/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="dist/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="dist/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="dist/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="dist/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="dist/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Helpers -->
    <script src="dist/vendor/js/helpers.js"></script>

    <script src="dist/js/config.js"></script>
</head>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
		<!-- Layout Container -->
    	<div class="layout-container">
        
			<!-- Layout Menu -->
        	<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
				<!-- Brand Menu -->
				<div class="app-brand demo">
					<a href="index.html" class="app-brand-link">
						<h3 class="app-brand-text menu-text fw-bolder">e-Procurement</h3>
					</a>
				</div>
				<!-- / Brand Menu -->
			
				<div class="dropdown-divider"></div>
				<div class="menu-inner-shadow"></div>

				<!-- Sidebar Menu -->
				<ul class="menu-inner py-1">
					<!-- Menu Beranda -->
					<li class="menu-item">
						<a href="/" class="menu-link">
						<i class="menu-icon tf-icons bx bx-home-circle"></i>
						<div data-i18n="Analytics">Beranda</div>
						</a>
					</li>
					<!-- / Menu Beranda -->

					<!-- Menu PPBJ-e Masuk -->
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
						<i class="menu-icon tf-icons bx bx-dock-top"></i>
						<div data-i18n="Account Settings">PPBJ-e Masuk</div>
						</a>
						<!-- Dropdown Menu PPBJ-e Masuk -->
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="/ppbj-masuk" class="menu-link">
								<div data-i18n="Account">Data PPBJ-e Masuk</div>
								</a>
							</li>
							<li class="menu-item">
							<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Progress PPBJ-e</div>
								</a>
							</li>
						</ul>
						<!-- / Dropdown Menu PPBJ-e Masuk -->
					</li>
					<!-- / Menu PBJ-e Masuk -->

					<!-- Menu Purchase Order -->
					<li class="menu-item active">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
						<i class="menu-icon tf-icons bx bx-cart-alt"></i>
						<div data-i18n="Authentications">PO/Purchase Order</div>
						</a>
						<!-- Dropdown Menu Purchase Order -->
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="/tambah-po" class="menu-link">
								<div data-i18n="Under Maintenance">Buat PO Baru</div>
								</a>
							</li>
							<li class="menu-item">
							<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Receiving PO</div>
								</a>
							</li>
							<li class="menu-item">
							<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Progress PO</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="/lihat-po" class="menu-link">
								<div data-i18n="Basic">Lihat PO</div>
								</a>
							</li>
						</ul>
						<!-- / Dropdown Menu Purchase Order -->
					</li>
					<!-- / Menu Purchase Order -->

					<!-- Menu Pengajuan Biaya -->
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-wallet-alt"></i>
							<div data-i18n="Misc">Pengajuan Biaya</div>
						</a>
						<!-- Dropdown Menu Pengajuan Biaya -->
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Buat Pengajuan Biaya</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Data Pengajuan Biaya</div>
								</a>
							</li>
						</ul>
						<!-- / Dropdown Menu Pengajuan Biaya -->
					</li>
					<!-- / Menu Pengajuan Biaya -->

					<!-- Divider Maser Data -->
					<li class="menu-header small text-uppercase"><span class="menu-header-text">Master Data</span></li>
					<!-- / Divider Maser Data -->
				
					<!-- Menu Supplier -->
					<li class="menu-item">
						<a href="javascript:void(0)" class="menu-link menu-toggle">
						<i class="menu-icon tf-icons bx bx-box"></i>
						<div data-i18n="User interface">Supplier</div>
						</a>
						<!-- Dropdown Menu Supplier -->
						<ul class="menu-sub">
							<li class="menu-item">
							<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Tambah Supplier Baru</div>
								</a>
							</li>
							<li class="menu-item">
							<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Lihat Supplier</div>
								</a>
							</li>
						</ul>
						<!-- / Dropdown Menu Supplier -->
					</li>
					<!-- / Menu Supplier -->

					<!-- Menu Barang & Jasa -->
					<li class="menu-item">
						<a href="javascript:void(0)" class="menu-link menu-toggle">
						<i class="menu-icon tf-icons bx bx-copy"></i>
						<div data-i18n="Extended UI">Barang/Jasa</div>
						</a>
						<!-- Dropdown Menu Barang & Jasa -->
						<ul class="menu-sub">
							<li class="menu-item">
							<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Tambah Barang/Jasa</div>
								</a>
							</li>
							<li class="menu-item">
							<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Lihat Barang/Jasa</div>
								</a>
							</li>
						</ul>
						<!-- / Dropdown Menu Barang & Jasa -->
					</li>
					<!-- / Menu Barang & Jasa -->

					<!-- Menu Cabang -->
					<li class="menu-item">
						<a href="javascript:void(0)" class="menu-link menu-toggle">
						<i class="menu-icon tf-icons bx bx-copy"></i>
						<div data-i18n="Extended UI">Cabang/Lokasi</div>
						</a>
						<!-- Dropdown Menu Cabang -->
						<ul class="menu-sub">
							<li class="menu-item">
							<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Tambah Cabang/Lokasi</div>
								</a>
							</li>
							<li class="menu-item">
							<a href="/under-maintenance" class="menu-link">
								<div data-i18n="Under Maintenance">Lihat Cabang/Lokasi</div>
								</a>
							</li>
						</ul>
						<!-- / Dropdown Menu Cabang -->
					</li>
					<!-- / Menu Cabang -->
				</ul>
				<!-- Sidebar Menu -->

				<!-- Side Footer -->
				<div class="float-end text-center mb-3">
					<div class="dropdown-divider"></div>
					<!-- Copyright -->
						Copyright ©
						<script>document.write(new Date().getFullYear());</script>
						, created by :
						<a href="#" class="footer-link fw-bolder">MaullanaIbrahim</a>
					<!-- / Copyright -->
				</div>
				<!-- / Side Footer -->
        	</aside>
        	<!-- / Layout Menu -->

        	<!-- Layout Page -->
        	<div class="layout-page">
          		
				<!-- Navbar -->
          		<nav
				  class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            	  id="layout-navbar"
          		>
            		<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              			<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                		  <i class="bx bx-menu bx-sm"></i>
              			</a>
            		</div>

					<!-- Menu Bar -->
            		<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              			<!-- Search Menu -->
              			<div class="navbar-nav align-items-center">
                			<div class="nav-item d-flex align-items-center">
                  				<i class="bx bx-search fs-4 lh-0"></i>
                  				<input type="text" 
								  class="form-control border-0 shadow-none" 
								  placeholder="Search..." aria-label="Search..."
								/>
                			</div>
              			</div>
              			<!-- / Search Menu -->

              			<ul class="navbar-nav flex-row align-items-center ms-auto">
                			<!-- Menu Pemberitahuan -->
                			<a href="#">
                    		  <span class="d-flex align-items-center align-middle">
                        	  <i class="flex-shrink-0 bx bx-bell me-2"></i>
                        		<span class="Account Settings">Pemberitahuan</span>
                        		<span class="translate-middle badge rounded-pill bg-danger ms-1">10</span>
                    		  </span>
                			</a>
							<!-- / Menu Pemberitahuan -->

							<!-- Menu User -->
                			<li class="nav-item navbar-dropdown dropdown-user dropdown">
                  				<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    				<div class="avatar avatar-online">
                      					<img src="dist/img/avatars/2.png" 
										  alt class="w-px-40 h-auto rounded-circle"
										/>
                    				</div>
                  				</a>
								<!-- Dropdown Menu User -->
                				<ul class="dropdown-menu dropdown-menu-end">
									<!-- Title Dropdown Menu User -->
                    				<li>
                      					<a class="dropdown-item" href="#">
                        				  <div class="d-flex">
                          					<div class="flex-shrink-0 me-3">
                            				  <div class="avatar avatar-online">
                              					<img src="dist/img/avatars/2.png" 
												  alt class="w-px-40 h-auto rounded-circle"
												/>
                            				  </div>
                          					</div>
                          					<div class="flex-grow-1">
                            					<span class="fw-semibold d-block">Maulana Ibrahim</span>
                            					<small class="text-muted">Admin</small>
                          					</div>
											
                        				  </div>
                      					</a>
                    				</li>
									<!-- / Title Dropdown Menu User -->

                    				<li>
                      					<div class="dropdown-divider"></div>
                    				</li>
                    
									<!-- Menu Logout -->
                    				<li>
                      					<a class="dropdown-item" href="auth-login-basic.html">
                        				  <i class="bx bx-power-off me-2"></i>
                        				  <span class="align-middle">Log Out</span>
                      					</a>
                    				</li>
									<!-- / Menu Logout -->
                  				</ul>
				  				<!-- / Dropdown Menu User -->
                			</li>
                			<!-- / Menu User -->
              			</ul>
            		</div>
					<!-- / Menu Bar -->
          		</nav>
        		<!-- / Navbar -->
				 
          		<div class="content-wrapper">    	
				
				<!-- Content -->
            	<div class="container-xxl flex-grow-1 container-p-y">
					<!-- Content Row -->
              		<div class="row">
						<div class="col-lg-12 order-0">
							<div class="card" style="padding:20px 15px 20px 15px;">
							<figure class="text-center">
								<blockquote class="blockquote">
									<h4><b>FORM PURCHASE ORDER (PO)</b></h4>
								</blockquote>
								<figcaption class="blockquote-footer"></figcaption>
							</figure>
							<form class="row g-3">
								<div class="container">
									<div class="row g-2" style="margin-bottom:8px;">
										<div class="col-md">
											<div class="form-floating">
												<input type="text" 
												  class="form-control" 
												  id="floatingInputGrid"
												  value="PO0123001"
												  disabled
												>
												<label for="floatingInputGrid">No. PO</label>
											</div>
										</div>
										<div class="col-auto">
											<div class="form-floating">
												<input type="date" 
												  class="form-control" 
												  id="floatingInputGrid" 
												  placeholder="name@example.com" 
												>
												<label for="floatingInputGrid">Tanggal PO</label>
											</div>
										</div>
										<div class="col-auto">
											<div class="form-floating">
												<input type="date" 
												  class="form-control" 
												  id="floatingInputGrid" 
												  placeholder="name@example.com" 
												>
												<label for="floatingInputGrid">Expired PO</label>
											</div>
										</div>
										<div class="col-auto">
											<div class="form-floating">
												<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    												<option selected disabled>Pilih Lokasi / Cabang / Divisi</option>
    												<option value="1">PROCUREMENT</option>
    												<option value="2">OPERASIONAL</option>
    												<option value="3">CIBADUYUT LAMA / MHO</option>
													<option value="3">KOTA BARU PARAHYANGAN 2</option>
													<option value="3">DC YOMART 53</option>
													<option value="3">DC YOMART GEDEBAGE</option>
  												</select>
												<label for="floatingInputGrid">Pemohon</label>
											</div>
										</div>
										<div class="col-auto">
											<div class="form-floating">
												<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    												<option selected disabled>Pilih Nama Perusahaan</option>
    												<option value="1">PT. GRIYA PRATAMA</option>
    												<option value="2">PT. AKUR PRATAMA</option>
    												<option value="3">PT. KULINER AKUR PRATAMA</option>
													<option value="3">FRISIAN FLAG INDONESIA</option>
  												</select>
												<label for="floatingInputGrid">Ditujukan Untuk</label>
											</div>
										</div>
										<div class="col-md">
											<div class="form-floating">
												<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    												<option selected disabled>Pilih Jenis PO</option>
    												<option value="1">ASSET</option>
    												<option value="2">NON ASSET</option>
  												</select>
												<label for="floatingInputGrid">Jenis PO</label>
											</div>
										</div>
									</div>
									<div class="row g-2" style="margin-bottom:12px;">
										<div class="col-auto">
											<div class="form-floating">
												<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    												<option selected disabled>Pilih Supplier</option>
    												<option value="1">ANUGRAH JAYA ELEKTRINDO</option>
    												<option value="2">BANGUN INDAH</option>
													<option value="2">COMPUMAX</option>
													<option value="2">GRAMEDIA</option>
													<option value="2">ZENTECH</option>
  												</select>
												<label for="floatingInputGrid">Supplier</label>
											</div>
										</div>
										<div class="col-auto">
											<div class="form-floating">
												<input type="text" 
												  class="form-control" 
												  id="floatingInputGrid" 
												  value="Tempo Pembayaran" 
												  disabled
												>
												<label for="floatingInputGrid">TOP</label>
											</div>
										</div>
										<div class="col-auto">
											<div class="form-floating">
												<input type="text" 
												  class="form-control" 
												  id="floatingInputGrid" 
												  value="No. Telp / Fax / WA" 
												  disabled
												>
												<label for="floatingInputGrid">Kontak Supplier</label>
											</div>
										</div>
										<div class="col-md">
											<div class="form-floating">
												<input type="text" 
												  class="form-control" 
												  id="floatingInputGrid" 
												  value="Alamat Lengkap" 
												  disabled
												>
												<label for="floatingInputGrid">Alamat Supplier</label>
											</div>
										</div>
										<div class="col-auto">
											<div class="form-floating">
												<input type="text" 
												  class="form-control" 
												  id="floatingInputGrid"
												  value="MAULANA"
												  disabled
												>
												<label for="floatingInputGrid">Dibuat Oleh</label>
											</div>
										</div>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="ppn" value="option1">
										<label class="form-check-label" for="ppn">PPN</label>
									</div>
									<div class="float-end fs-6">
										Alamat Pengiriman :
										<div class="form-check form-check-inline ms-3">
											<input class="form-check-input" type="radio" id="gc" value="option2">
											<label class="form-check-label" for="gc">Griya Center</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" id="kc" value="option3">
											<label class="form-check-label" for="kc">Kopo Center</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" id="lainnya" value="option3">
											<label class="form-check-label" for="kc">Lainnya</label>
											<input type="text" style="outline: 0;border-width: 0 0 2px;border-color: #cecece;margin-left:5px;" placeholder="ketik disini...">
										</div>
									</div>
									<div class="dropdown-divider"></div>
									
									<div class="row g-2" style="margin-bottom:8px;">
										<div class="col-sm">
											<label class="form-label">Kode</label>
											<input type="text" class="form-control" id="inputText1" disabled>
										</div>
										<div class="col-md-2">
											<label class="form-label">Nama Barang / Jasa</label>
											<select class="form-select" id="specificSizeSelect">
												<option selected disabled>Pilih Barang / Jasa</option>
												<option value="0">LAMPU LED T8 9 WATT</option>
												<option value="1">LAMPU LED T8 18 WATT</option>
											</select>
										</div>
										<div class="col-md">
											<label class="form-label">Desc</label>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
											Detail
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">DETAIL BARANG / JASA</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
												<form>
													<div class="mb-3">
														<label for="message-text" class="col-form-label">Tuliskan Merk / Jenis / Ukuran / Dimensi:</label>
														<textarea class="form-control" id="message-text"></textarea>
													</div>
												</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
													<button type="button" class="btn btn-primary">Simpan</button>
												</div>
												</div>
											</div>
											</div>
										</div>
										<div class="col-md">
											<label class="form-label">QTY</label>
											<input type="text" class="form-control" id="InputText4">
										</div>
										<div class="col-md">
											<label class="form-label">Satuan</label>
											<select class="form-select" id="specificSizeSelect">
												<option value="0">PCS</option>
												<option value="1">BUAH</option>
												<option value="2">UNIT</option>
												<option value="3">LS</option>
											</select>
										</div>
										<div class="col-md-2">
											<label class="form-label">Harga</label>
											<input type="text" class="form-control" id="inputText5">
										</div>
										<div class="col-md">
											<label class="form-label">Disc (Rp)</label>
											<input type="text" class="form-control" id="inputText6">
										</div>
										<div class="col-md">
											<label class="form-label">Disc (%)</label>
											<input type="text" class="form-control" id="inputText7">
										</div>
										<div class="col-md-2">
											<label class="form-label">Jumlah (Rp)</label>
											<input type="text" class="form-control" id="inputText8" disabled>
										</div>
									</div>

									<div class="row g-2" style="margin-bottom:8px;">
										<div class="col-sm">
											<input type="text" class="form-control" id="inputText1" disabled>
										</div>
										<div class="col-md-2">
											<select class="form-select" id="specificSizeSelect">
												<option selected disabled>Pilih Barang / Jasa</option>
												<option value="0">LAMPU LED T8 9 WATT</option>
												<option value="1">LAMPU LED T8 18 WATT</option>
											</select>
										</div>
										<div class="col-md">
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
											Detail
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">DETAIL BARANG / JASA</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
												<form>
													<div class="mb-3">
														<label for="message-text" class="col-form-label">Tuliskan Merk / Jenis / Ukuran / Dimensi:</label>
														<textarea class="form-control" id="message-text"></textarea>
													</div>
												</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
													<button type="button" class="btn btn-primary">Simpan</button>
												</div>
												</div>
											</div>
											</div>
										</div>
										<div class="col-md">
											<input type="text" class="form-control" id="InputText4">
										</div>
										<div class="col-md">
											<select class="form-select" id="specificSizeSelect">
												<option value="0">PCS</option>
												<option value="1">BUAH</option>
												<option value="2">UNIT</option>
												<option value="3">LS</option>
											</select>
										</div>
										<div class="col-md-2">
											<input type="text" class="form-control" id="inputText5">
										</div>
										<div class="col-md">
											<input type="text" class="form-control" id="inputText6">
										</div>
										<div class="col-md">
											<input type="text" class="form-control" id="inputText7">
										</div>
										<div class="col-md-2">
											<input type="text" class="form-control" id="inputText8" disabled>
										</div>
									</div>

									<div class="row g-2" style="margin-bottom:8px;">
										<div class="col-sm">
											<input type="text" class="form-control" id="inputText1" disabled>
										</div>
										<div class="col-md-2">
											<select class="form-select" id="specificSizeSelect">
												<option selected disabled>Pilih Barang / Jasa</option>
												<option value="0">LAMPU LED T8 9 WATT</option>
												<option value="1">LAMPU LED T8 18 WATT</option>
											</select>
										</div>
										<div class="col-md">
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
											Detail
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">DETAIL BARANG / JASA</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
												<form>
													<div class="mb-3">
														<label for="message-text" class="col-form-label">Tuliskan Merk / Jenis / Ukuran / Dimensi:</label>
														<textarea class="form-control" id="message-text"></textarea>
													</div>
												</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
													<button type="button" class="btn btn-primary">Simpan</button>
												</div>
												</div>
											</div>
											</div>
										</div>
										<div class="col-md">
											<input type="text" class="form-control" id="InputText4">
										</div>
										<div class="col-md">
											<select class="form-select" id="specificSizeSelect">
												<option value="0">PCS</option>
												<option value="1">BUAH</option>
												<option value="2">UNIT</option>
												<option value="3">LS</option>
											</select>
										</div>
										<div class="col-md-2">
											<input type="text" class="form-control" id="inputText5">
										</div>
										<div class="col-md">
											<input type="text" class="form-control" id="inputText6">
										</div>
										<div class="col-md">
											<input type="text" class="form-control" id="inputText7">
										</div>
										<div class="col-md-2">
											<input type="text" class="form-control" id="inputText8" disabled>
										</div>
									</div>

									<div class="row g-2" style="margin-bottom:15px;">
										<div class="col-sm">
											<input type="text" class="form-control" id="inputText1" disabled>
										</div>
										<div class="col-md-2">
											<select class="form-select" id="specificSizeSelect">
												<option selected disabled>Pilih Barang / Jasa</option>
												<option value="0">LAMPU LED T8 9 WATT</option>
												<option value="1">LAMPU LED T8 18 WATT</option>
											</select>
										</div>
										<div class="col-md">
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
											Detail
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">DETAIL BARANG / JASA</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
												<form>
													<div class="mb-3">
														<label for="message-text" class="col-form-label">Tuliskan Merk / Jenis / Ukuran / Dimensi:</label>
														<textarea class="form-control" id="message-text"></textarea>
													</div>
												</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
													<button type="button" class="btn btn-primary">Simpan</button>
												</div>
												</div>
											</div>
											</div>
										</div>
										<div class="col-md">
											<input type="text" class="form-control" id="InputText4">
										</div>
										<div class="col-md">
											<select class="form-select" id="specificSizeSelect">
												<option value="0">PCS</option>
												<option value="1">BUAH</option>
												<option value="2">UNIT</option>
												<option value="3">LS</option>
											</select>
										</div>
										<div class="col-md-2">
											<input type="text" class="form-control" id="inputText5">
										</div>
										<div class="col-md">
											<input type="text" class="form-control" id="inputText6">
										</div>
										<div class="col-md">
											<input type="text" class="form-control" id="inputText7">
										</div>
										<div class="col-md-2">
											<input type="text" class="form-control" id="inputText8" disabled>
										</div>
									</div>

									<div class="dropdown-divider"></div>

									<div class="float-end">
										<button type="button" class="btn btn-warning">Batal</button>
										<button type="button" class="btn btn-success">Simpan</button>
									</div><br>
								</div>
							</div>
                  			</div>
						</div>
              		</div>
					<!-- / Content Row -->
				</div>
				<!-- / Content -->


            	<div class="content-backdrop fade"></div>
          	</div>
			<!-- / Layout Page -->
        </div>
        <!-- / Layout Container -->
    </div>
	<!-- / Layout wrapper -->

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Core JS -->
	<div name="core-js">
		<!-- build:js assets/vendor/js/core.js -->
		<script src="dist/vendor/libs/jquery/jquery.js"></script>
		<script src="dist/vendor/libs/popper/popper.js"></script>
		<script src="dist/vendor/js/bootstrap.js"></script>
		<script src="dist/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

		<script src="dist/vendor/js/menu.js"></script>
		<!-- endbuild -->

		<!-- Vendors JS -->
		<script src="dist/vendor/libs/apex-charts/apexcharts.js"></script>

		<!-- Main JS -->
		<script src="dist/js/main.js"></script>

		<!-- Page JS -->
		<script src="dist/js/dashboards-analytics.js"></script>
	</div>
	<!-- / Core JS -->
</body>
</html>