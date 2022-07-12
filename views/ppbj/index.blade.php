@extends('layouts.main')

@section('content')
	<!-- Content Row -->
    <div class="row">
		<div class="col-lg-12">
			<div class="card overflow-hidden mb-4 p-0" style="height: 570px;">
				<div class="card-body" id="vertical-example">
					<figure class="text-center">
						<blockquote class="blockquote">
							<h4><b>DATA PPBJe</b></h4>
						</blockquote>
						<figcaption class="blockquote-footer"></figcaption>
					</figure>
					<div class="table-responsive">
						<table id="ppbj" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>No. PPBJe</th>
									<th>Beban Biaya</th>
									<th>Ringkasan Barang</th>
									<th>Progress</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $p)
								<tr>
									<td style="font-size:13px;">{{ date('d-M-Y', strtotime($p->ppbj_approval->updated_at)); }}</td>
									<td style="font-size:13px;">{{ $p->no_ppbj }}</td>
									<td style="font-size:13px;">{{ $p->beban_biaya }}</td>
									<td style="font-size:13px;">{{ $p->ppbj_detail->nama_barang }}</td>
									<td style="font-size:13px;">
										<div class="progress" style="height:15px;">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: <?php echo $p->progress ?>;height:15px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><?php echo $p->progress ?></div>
										</div>
									</td>
									<td style="font-size:13px;">
										<a href="{{ route('ppbj.detail',$p->id) }}"><button type="button" class="btn btn-outline-primary btn-sm"><i class="bx bx-show-alt me-1"></i> Detail</button></a>
										<a href="#"><button type="button" class="btn btn-outline-danger btn-sm"><i class="bx bxs-x-square me-1"></i> Batal</button></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<div class="float-end mt-3 mb-4">
					<a href="ppbj-create">
						<button type="button" class="btn btn-primary float-end me-4">
							<span class="tf-icons bx bx-plus"></span> Tambah PPBJe
						</button>
					</a>
				</div>
			</div>
		</div>
    </div>
	<!-- / Content Row -->
@endsection