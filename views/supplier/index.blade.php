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
									@foreach($suppliers as $s)
									<td style="font-size:13px;">{{ $s->kode_supplier }}</td>
									<td style="font-size:13px;">{{ $s->nama_supplier }}</td>
									<td style="font-size:13px;">{{ $s->top }}</td>
									<td style="font-size:13px;">{{ $s->kontak }}</td>
									<td style="font-size:13px;">{{ $s->pic }}</td>
									<td style="font-size:13px;">{{ $s->alamat }}</td>
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
									@endforeach
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