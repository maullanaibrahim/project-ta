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
	<!-- Site Title -->
    <title>Buat PO Baru | e-Procurement - Sistem Informasi Procurement Yomart</title>
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
					<li class="menu-item active">
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
					<li class="menu-item">
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
						©
						<script>document.write(new Date().getFullYear());</script>
						, dibuat oleh :<br>
						<a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">MaullanaIbrahim</a>
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