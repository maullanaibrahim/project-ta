@extends('layouts.main')

@section('content')
	<!-- Content Row -->
    <div class="row">
		<div class="col-lg-12">
			<div class="card overflow-hidden mb-4 p-0" style="height: 570px;">
				<div class="card-body" id="vertical-example">
					<figure class="text-center">
						<blockquote class="blockquote">
							<h4><b>DATA LOKASI</b></h4>
						</blockquote>
						<figcaption class="blockquote-footer"></figcaption>
					</figure>
					<div class="table-responsive">
						<table id="ppbj" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>Kode</th>
									<th>Nama Lokasi</th>
									<th>Alamat Lokasi</th>
									<th>Regional</th>
									<th>Area</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="font-size:13px;">KBA</td>
									<td style="font-size:13px;">KOTA BARU PARAHYANGAN 2</td>
									<td style="font-size:13px;">KOTA BARU PARAHYANGAN, KABUPATEN BANDUNG BARAT</td>
									<td style="font-size:13px;">C</td>
									<td style="font-size:13px;">01</td>
									<td style="font-size:13px;">
										<a href="#">
											<button type="button" class="btn btn-outline-warning btn-sm">
												<i class="bx bxs-trash me-1"></i> Hapus
											</button>
										</a>
										<a href="#">
											<button type="button" class="btn btn-outline-primary btn-sm">
												<i class="bx bxs-edit me-1"></i> Ubah
											</button>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </div>
	<!-- / Content Row -->
@endsection