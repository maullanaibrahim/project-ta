@extends('layouts.main')

@section('content')
	<!-- Content Row -->
    <div class="row">
		<div class="col-lg-12">
			<div class="card overflow-hidden mb-4 p-0" style="height: 570px;">
				<div class="card-body" id="vertical-example">
					<figure class="text-center">
						<blockquote class="blockquote">
							<h4><b>DATA BARANG / JASA</b></h4>
						</blockquote>
						<figcaption class="blockquote-footer"></figcaption>
					</figure>
					<div class="table-responsive">
						<table id="ppbj" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>KODE</th>
									<th>NAMA BARANG / JASA</th>
									<th>SATUAN</th>
									<th>HARGA</th>
									<th>LEAD TIME</th>
									<th>KATEGORI</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="font-size:13px;">B-0001</td>
									<td style="font-size:13px;">LAMPU LED T8 16 WATT PHILIPS ECOFIT</td>
									<td style="font-size:13px;">UNIT</td>
									<td class="font-size:13px;">{{ "Rp " . number_format(45000,2,',','.') }}</td>
									<td class="font-size:13px;">3-4 HARI KERJA</td>
									<td style="font-size:13px;">ELECTRICAL</td>
									<td style="font-size:13px;">
										<a href="#"><button type="button" class="btn btn-outline-primary btn-sm">
											<i class="bx bxs-edit me-1"></i> 
											Ubah</button>
										</a>
										<a href="#"><button type="button" class="btn btn-outline-danger btn-sm">
											<i class="bx bxs-trash me-1"></i> 
											Hapus</button>
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