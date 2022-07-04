@extends('layouts.main')

@section('content')
	<!-- Content Row -->
    <div class="row">
		<div class="col-lg-12">
			<div class="card overflow-hidden mb-4 p-0" style="height: 570px;">
				<div class="card-body" id="vertical-example">
					<figure class="text-center">
						<blockquote class="blockquote">
							<h4><b>DATA PENGAJUAN BIAYA</b></h4>
						</blockquote>
						<figcaption class="blockquote-footer"></figcaption>
					</figure>
					<div class="table-responsive">
						<table id="ppbj" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>TANGGAL</th>
									<th>NOMOR DOKUMEN</th>
									<th>JENIS</th>
									<th>BEBAN BIAYA</th>
									<th>TOTAL</th>
									<th>STATUS</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="font-size:13px;">1-JUL-2022</td>
									<td style="font-size:13px;">01/PRC/VII/2022</td>
									<td style="font-size:13px;"><span class="badge bg-label-primary fs-6 me-1">TRANSFER</span></td>
									<td style="font-size:13px;">KOTA BARU PARAHYANGAN 2</td>
									<td class="font-size:13px;">{{ "Rp " . number_format(4100000,2,',','.') }}</td>
									<td style="font-size:13px;"><span class="badge bg-label-warning fs-6 me-1">BELUM REALISASI</span></td>
									<td style="font-size:13px;">
										<a href="#">
											<button type="button" class="btn btn-outline-primary btn-sm">
												<i class="bx bx-show-alt me-1"></i> Detail
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