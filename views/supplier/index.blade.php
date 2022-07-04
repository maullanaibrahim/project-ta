@extends('layouts.main')

@section('content')
	<!-- Content Row -->
    <div class="row">
		<div class="col-lg-12">
			<div class="card overflow-hidden mb-4 p-0" style="height: 570px;">
				<div class="card-body" id="vertical-example">
					<figure class="text-center">
						<blockquote class="blockquote">
							<h4><b>DATA SUPPLIER</b></h4>
						</blockquote>
						<figcaption class="blockquote-footer"></figcaption>
					</figure>

					<div class="table-responsive">
						<table id="ppbj" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>Kode Supplier</th>
									<th>Nama Supplier</th>
									<th>TOP</th>
									<th>Kontak Supplier</th>
									<th>PIC</th>
									<th>Alamat Supplier</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="font-size:13px;">S-0001</td>
									<td style="font-size:13px;">BANGUN INDAH</td>
									<td style="font-size:13px;">14 HARI</td>
									<td style="font-size:13px;">08XX-XXXX-XXXX</td>
									<td style="font-size:13px;">A NYANYANG</td>
									<td style="font-size:13px;">GG. PECINAN LAMA, BANDUNG</td>
									<td style="font-size:13px;">
										<a href="#">
											<button type="button" class="btn btn-outline-primary btn-sm">
												<i class="bx bxs-edit me-1"></i> Ubah
											</button>
										</a>
										<a href="#">
											<button type="button" class="btn btn-outline-danger btn-sm">
												<i class="bx bxs-trash me-1"></i> Hapus
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