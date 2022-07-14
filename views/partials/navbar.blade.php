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
              			<div class="navbar-nav align-items-center w-100">
                			<div class="nav-item d-flex align-items-center">
                  				<i class="bx bx-search fs-4 lh-0"></i>
                  				<input type="text" 
								  class="form-control border-0 shadow-none" 
								  placeholder="Cari {{ $title }}" aria-label="Search..."
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
                            					<span class="fw-semibold d-block">{{ auth()->user()->nama }}</span>
                            					<small class="text-muted">{{ auth()->user()->jabatan }}</small>
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
										<form action="/logout" method="POST">
											@csrf
											<button type="submit" class="dropdown-item"><i class="bx bx-log-out me-2"></i> Keluar</button>
										</form>
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