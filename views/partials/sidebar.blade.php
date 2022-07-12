            <!-- Layout Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
				<!-- Brand Menu -->
				<div class="app-brand demo">
					<a href="/home" class="app-brand-link">
					<img src="/dist/img/logo/logo2.png" class="rounded me-2" style="width:200px;height:70px;">
						<!-- <h5 class="app-brand-text menu-text fw-bolder">e-Procurement</h5> -->
					</a>
				</div>
				<!-- / Brand Menu -->
			
				<div class="dropdown-divider"></div>
				<div class="menu-inner-shadow"></div>

				<!-- Sidebar Menu -->
				<ul class="menu-inner py-1">
					<!-- Menu PPBJ-e Masuk -->
					<li class="menu-item {{ ($title === 'Data PPBJe') ? 'active' : '' }}">
						<a href="/ppbj" class="menu-link">
						<i class="menu-icon tf-icons bx bxs-receipt"></i>
						<div data-i18n="Account Settings">PPBJ-e</div>
						</a>
					</li>
					<!-- / Menu PBJ-e Masuk -->

					<!-- Menu Purchase Order -->
					<li class="menu-item {{ ($title === 'Data Purchase Order') ? 'active' : '' }}">
						<a href="/purchase" class="menu-link">
						<i class="menu-icon tf-icons bx bxs-basket"></i>
						<div data-i18n="Account Settings">Purchase Order</div>
						</a>
					</li>
					<!-- / Menu Purchase Order -->

					<!-- Menu Pengajuan Biaya -->
					<li class="menu-item {{ ($title === 'Data Pengajuan Biaya') ? 'active' : '' }}">
						<a href="/costRequest" class="menu-link">
						<i class="menu-icon tf-icons bx bxs-wallet-alt"></i>
						<div data-i18n="Account Settings">Pengajuan Biaya</div>
						</a>
					</li>
					<!-- / Menu Pengajuan Biaya -->

					<!-- Menu Receiving -->
					<li class="menu-item {{ ($title === 'Data Receiving') ? 'active' : '' }}">
						<a href="/receiving" class="menu-link">
						<i class="menu-icon tf-icons bx bxl-dropbox"></i>
						<div data-i18n="Account Settings">Receiving</div>
						</a>
					</li>
					<!-- / Menu Receiving -->

					<!-- Divider Maser Data -->
					<li class="menu-header small text-uppercase"><span class="menu-header-text">Master Data</span></li>
					<!-- / Divider Maser Data -->

					<!-- Menu Barang & Jasa -->
					<li class="menu-item {{ ($title === 'Data Barang / Jasa') ? 'active' : '' }}">
						<a href="/goods" class="menu-link">
						<i class="menu-icon tf-icons bx bx-package"></i>
						<div data-i18n="Account Settings">Barang / Jasa</div>
						</a>
					</li>
					<!-- / Menu Barang & Jasa -->
				
					<!-- Menu Supplier -->
					<li class="menu-item {{ ($title === 'Data Supplier') ? 'active' : '' }}">
						<a href="/supplier" class="menu-link">
						<i class="menu-icon tf-icons bx bxs-store"></i>
						<div data-i18n="Account Settings">Supplier</div>
						</a>
					</li>
					<!-- / Menu Supplier -->

					<!-- Menu Cabang -->
					<li class="menu-item {{ ($title === 'Data Lokasi') ? 'active' : '' }}">
						<a href="/branch" class="menu-link">
						<i class="menu-icon tf-icons bx bx-dock-top"></i>
						<div data-i18n="Account Settings">Lokasi</div>
						</a>
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
						<a href="#" target="_blank" class="footer-link fw-bolder">MaullanaIbrahim</a>
					<!-- / Copyright -->
				</div>
				<!-- / Side Footer -->
        	</aside>
        	<!-- / Layout Menu -->