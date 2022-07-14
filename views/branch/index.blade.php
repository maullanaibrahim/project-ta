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
						<figcaption class="blockquote-footer">
						@if(session()->has('success'))
						<div class="alert alert-success" role="alert">
							{{ session('success') }}
						</div>
						@endif
						</figcaption>
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
								@foreach($locations as $l)
								<tr>
									<td style="font-size:13px;">{{ $l->kode_lokasi }}</td>
									<td style="font-size:13px;">{{ $l->nama_lokasi }}</td>
									<td style="font-size:13px;">{{ $l->alamat_lokasi }}</td>
									<td style="font-size:13px;">{{ $l->regional }}</td>
									<td style="font-size:13px;">{{ $l->area }}</td>
									<td style="font-size:13px;">
										<a href="/branch-update{{ $l->id }}">
											<button type="button" class="btn btn-outline-primary btn-sm">
												<i class="bx bxs-edit me-1"></i> Ubah
											</button>
										</a>
										<form class="d-inline" action="/branch-delete{{ $l->id }}" method="post" onclick="return confirm('Yakin ingin menghapus {{ $l->nama_lokasi }}?')">
											@method('delete')
											@csrf
											<button type="submit" class="btn btn-outline-danger btn-sm">
												<i class="bx bxs-trash me-1"></i> Hapus
											</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<div class="float-end mt-3 mb-4">
					<a href="branch-create">
						<button type="button" class="btn btn-primary float-end me-4">
							<span class="tf-icons bx bx-plus"></span> Tambah Lokasi
						</button>
					</a>
				</div>
			</div>
		</div>
    </div>
	<!-- / Content Row -->
@endsection